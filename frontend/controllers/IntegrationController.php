<?php
namespace frontend\controllers;

use artweb\artbox\ecommerce\models\Brand;
use artweb\artbox\ecommerce\models\Category;
use artweb\artbox\ecommerce\models\Product;
use artweb\artbox\ecommerce\models\ProductCategory;
use artweb\artbox\ecommerce\models\ProductImage;
use artweb\artbox\ecommerce\models\ProductVariant;
use artweb\artbox\models\Customer;
use frontend\models\SignupForm;
use yii\base\Controller;
use yii\base\Exception;

class IntegrationController extends Controller{

    public $result = [];
    public function getItemData(){
      return '';
    }

    public function ImportCustomers(){
        try{
            if($data = \Yii::$app->request->post("data")){
                //$data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    foreach ($data as $item){
                        $this->SaveCustomers($item);
                    }
                } else {
                    throw new Exception("Данные о пользователях ожидаются в виде массива.");
                }
                die(\GuzzleHttp\json_encode($this->result));
            }else {
                throw new Exception("Отсутствует data");
            }


        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n", 'в файле ', $e->getFile() , "\n",' на строке ', $e->getLine(), "\n"," ", $e->getTraceAsString();
        }
    }


    private function SaveCustomers($item){
        $user = Customer::find()->where(["remote_id" => $item->Code])->one();
        if(!$user instanceof Customer){
            $user = new Customer();
            $user->remote_id = $item->Code;
            $user->status = 10;
            $user->setPassword($item->password);
            $user->generateAuthKey();
        }else if(isset($item->password) && !empty($item->password)){
            $user->setPassword($item->password);
            $user->generateAuthKey();
        }
        $user->username = $item->FullName;
        $user->email = $item->email;
        $user->phone = $item->phone;
        $user->discount_rate = $item->discount_rate;
        $user->validate();
        if(!$user->validate()){
            throw new Exception(print_r($user->getErrors()));
        }
        $user->save();

        $this->result[$item->Code] = $user->id;
    }






    public  function actionImportProducts(){
        try{
            if($data = \Yii::$app->request->post("data")){
                //$data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    foreach ($data as $item){
                        $this->ImportProduct($item);
                    }
                } else {
                    throw new Exception("Данные о товарах ожидаются в виде массива.");
                }
                die(\GuzzleHttp\json_encode($this->result));
            }else {
                throw new Exception("Отсутствует data");
            }


        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n", 'в файле ', $e->getFile() , "\n",' на строке ', $e->getLine(), "\n"," ", $e->getTraceAsString();
        }
    }

    public function ImportProduct($item){
        if(isset($item->category)){
            $item->category_id = $this->SaveCategories($item->category);
            unset($item->category);
        } else {
            throw new Exception("У товара {$item->model} не указаны категории");
        }

        if(isset($item->manufacturer) && !empty($item->manufacturer) && isset($item->manufacturer->name) && !empty($item->manufacturer->name)){
            $item->brand = $this->SaveBrand($item->manufacturer);
            unset($item->manufacturer);
        }

        $this->SaveItem($item);
    }

    private function SaveCategories($categories){
        $category_id = null;
        foreach ($categories as $category){
            $parent = null;
            if(!empty($category->parent_id)){
                $parent = $model = Category::find()->joinWith('lang')->where(["remote_id" => $category->parent_id])->one();
            }
            $model = Category::find()->joinWith('lang')->where(["remote_id" => $category->category_id])->one();
            if(!$model instanceof Category){
                $model = new Category();
                $model->generateLangs();
                foreach ($model->modelLangs as $category_lang) {
                    $category_lang->title = $category->name;
                    $model->remote_id = $category->category_id;
                }
            } else {
                $model->lang->title = $category->name;
            }

            $model->status    = $category->status;
            $model->parent_id =  $parent ? $parent->id : 0;
            $model->image = $category->image;
            if(!$model->validate()){
                throw new Exception(print_r($model->getErrors()));
            }

            $model->save();
            $category_id = $model->id;
        }

        return $category_id;
    }

    private function SaveBrand($brand){
        $model = Brand::find()->joinWith('lang')->where(["remote_id" => $brand->manufacturer_id])->one();
        if(!$model instanceof Brand){
            $model = new Brand();
            $model->generateLangs();
            foreach ($model->modelLangs as $brand_lang) {
                $brand_lang->title = $brand->name;
            }
        } else {
            $model->lang->title = $brand->name;
        }
        $model->remote_id = $brand->manufacturer_id;
        $model->image = $brand->image;
        if(!$model->validate()){
            throw new Exception(print_r($model->getErrors()));
        }
        $model->save();

        return $model->id;
    }


    private function SaveItem($item){

        $model = Product::find()->joinWith('lang')->where(["remote_id" => $item->model])->one();

        $new_product = false;

        if(!$model instanceof Product){
            $new_product = true;
            $model = new Product();
            $model->generateLangs();
            foreach ($model->modelLangs as $lang) {
                $lang->title = $item->name;
            }
        } else {
            $model->lang->title = $item->name;
        }
        $model->status = $item->status;
        $model->discount_rate = $item->discount_rate;
        $model->is_discount = $item->discount;
        $model->is_top = $item->top;
        $model->is_new = $item->new;
        $model->remote_id = $item->model;
        if(isset($item->brand) && !empty($item->brand)){
            $model->brand_id = $item->brand;
        }
        if(!$model->validate()){
            throw new Exception(print_r($model->getErrors()));
        }
        $model->save();



        $variant_id = $this->SaveItemVariant($new_product, $model, $item);
        if(isset($item->category_id)){
            $this->SaveProductCategory($new_product, $model, $item);
        }

        $this->SaveProductImage($new_product,$model,$item,$variant_id);

        $this->result[$item->model] = $model->id;

    }

    private function SaveProductCategory($new_product, $model, $item){

        if(!$new_product){
            $data = ProductCategory::find()
                ->where(["product_id"=>$model->id,
                    "category_id"=>$item->category_id])
                ->one();
            if($data instanceof ProductCategory){
                $data->delete();
            }
        }
        $category = new ProductCategory();
        $category->product_id = $model->id;
        $category->category_id = $item->category_id;
        if(!$category->validate()){
            throw new Exception(print_r($category->getErrors()));
        }
        $category->save();
    }

    private function SaveProductImage($new_product,$model,$item,$variant_id ){
        if($new_product || !isset($model->image)){
            $image = new ProductImage();
            $image->product_id = $model->id;
            $image->product_variant_id = $variant_id;
        } else {
            $image = $model->image;
        }
        $image->image = $item->image;
        if(!$image->validate()){
            throw new Exception(print_r($image->getErrors()));
        }
        $image->save();
    }

    private function SaveItemVariant($new_product, $model, $item){
        if($new_product){
            $variant = new ProductVariant();
            $variant->product_id = $model->id;
            $variant->generateLangs();
            foreach ($variant->modelLangs as $lang) {
                $lang->title = $item->name;
            }
        } else {
            $variant  = $model->variant;
            $variant->lang->title = $item->name;
        }
        $variant->sku = $item->sku;
        $variant->price = $item->price;
        $variant->remote_id = $item->model;
        $variant->stock = $item->quantity;
        if($item->quantity == 0){
            if(empty($variant->sold_date)){
                $sold_date = new \DateTime('NOW');
                $variant->sold_date  = $sold_date->getTimestamp();
            }
        }else {
            $variant->sold_date  = '';
        }
        if(!$variant->validate()){
            throw new Exception(print_r($variant->getErrors()));
        }
        $variant->save();
        return $variant->id;
    }
}