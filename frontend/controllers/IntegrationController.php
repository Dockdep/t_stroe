<?php
namespace frontend\controllers;

use artweb\artbox\ecommerce\models\Order;
use artweb\artbox\ecommerce\models\OrderProduct;
use common\models\CustomerCategoryDiscount;
use artweb\artbox\ecommerce\models\Brand;
use artweb\artbox\ecommerce\models\Category;
use artweb\artbox\ecommerce\models\Product;
use artweb\artbox\ecommerce\models\ProductCategory;
use artweb\artbox\ecommerce\models\ProductImage;
use artweb\artbox\ecommerce\models\ProductVariant;
use artweb\artbox\models\Customer;
use common\models\CustomerPayment;
use common\models\CustomerPaymentHistory;
use frontend\models\SignupForm;
use yii\base\Controller;
use yii\base\Exception;

class IntegrationController extends Controller{

    public $result = [];
    public function getItemData(){
      return '[
{
"id": 0,
"nomer": "ШД-17006009",
"date": "2017-10-04T17:52:25",
"Counterparties": {
"id": 81,
"YurfizLizso": "Физ. лицо",
"Code": "000000302",
"username": "Андріященко Вячеслав Григорович",
"Discount": [],
"discount_rate": 0,
"Phone": "+38(045)947-92-00",
"Email": "slava.avg99991@gmail.com",
"password": "ismcMI1"
},
"ItemS": [
{
"price": 290,
"model": "000018777",
"amount": 290,
"discount": 0,
"quantity": 1
}
]
},
{
"id": 0,
"nomer": "ШД-17006078",
"date": "2017-10-09T16:12:52",
"Counterparties": {
"id": 81,
"YurfizLizso": "Физ. лицо",
"Code": "000000302",
"username": "Андріященко Вячеслав Григорович",
"Discount": [],
"discount_rate": 0,
"Phone": "+38(045)947-92-00",
"Email": "slava.avg99991@gmail.com",
"password": "ismcMI1"
},
"ItemS": [
{
"price": 210,
"model": "000053623",
"amount": 210,
"discount": 0,
"quantity": 1
},
{
"price": 330,
"model": "000022962",
"amount": 330,
"discount": 0,
"quantity": 1
},
{
"price": 330,
"model": "000022962",
"amount": 330,
"discount": 0,
"quantity": 1
}
]
}
]';
    }

    public function actionImportCustomers(){
        try{
           if($data = \Yii::$app->request->post("data")){
               // $data = $this->getItemData();
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

    public function actionImportOrdersHistory(){
        try{
            if($data = \Yii::$app->request->post("data")){

               // $data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    foreach ($data as $item){
                        $this->SavePaymentHistory($item);
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

    public function actionImportOrders(){
        try{
           // if($data = \Yii::$app->request->post("data")){
               $data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    foreach ($data as $item){
                        $this->SaveOrders($item);
                    }
                } else {
                    throw new Exception("Данные о пользователях ожидаются в виде массива.");
                }
                die(json_encode($this->result,JSON_UNESCAPED_UNICODE));
//            }else {
//                throw new Exception("Отсутствует data");
//            }
        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n", 'в файле ', $e->getFile() , "\n",' на строке ', $e->getLine(), "\n"," ", $e->getTraceAsString();
        }
    }

    private function SavePaymentHistory($item){
        if(!isset($item->id)){
            throw new Exception("Не указан id пользователя");
        }
        $customerPayments = CustomerPayment::find()->where(['customer_id'=> $item->id])->one();
        if(!$customerPayments instanceof  CustomerPayment){
            $customerPayments = new CustomerPayment();
            $customerPayments->customer_id = $item->id;
        }
        $customerPayments->remainder = $item->remainder;
        if(!$customerPayments->validate()){
            throw new Exception(print_r($customerPayments->getErrors()));
        }
        $customerPayments->save();
        if(!isset($item->orders)){
            throw new Exception("Не указан orders пользователя");
        }
        CustomerPaymentHistory::deleteAll(['customer_id'=> $item->id]);
        foreach ($item->orders as $order){
            if(!isset($order->indetail)){
                throw new Exception("Не указан indetail пользователя в заказе " .$order->nom );
            }
            $orderData = Order::find()->where(['remote_id'=> $order->nom])->one();
            if($orderData instanceof Order ){
                foreach ($order->indetail as $row){
                    $customerPaymentHistory = new CustomerPaymentHistory();
                    $customerPaymentHistory->customer_id = $item->id;
                    $customerPaymentHistory->order_id = $orderData->id;
                    $customerPaymentHistory->remainder = $row->remainder;
                    $customerPaymentHistory->order_remainder = $order->remainder;
                    $customerPaymentHistory->days_of_delay = $row->DaysOfDelay;
                    $date = new \DateTime($order->date);
                    $date->format("d.m.Y");
                    $customerPaymentHistory->date = $date->getTimestamp();
                    $date = new \DateTime($row->date);
                    $date->format("d.m.Y");
                    $customerPaymentHistory->action_date = $date->getTimestamp();
                    $date = new \DateTime($row->DateOfDelay);
                    $date->format("d.m.Y");
                    $customerPaymentHistory->date_of_delay = $date->getTimestamp();
                    if(!$customerPaymentHistory->validate()){
                        throw new Exception(print_r($customerPaymentHistory->getErrors()));
                    }
                    $customerPaymentHistory->save();
                }
            } else {
                throw new Exception("На сайте нет заказа с Order.nom " . $order->nom . " с датой ".$order->date );
            }

        }
        $this->result[$item->id] = 'true';
    }

    private function SaveOrders($data){
        $order = Order::find()->where(["remote_id" => $data->nomer])->one();
        if(!$order instanceof Order){
            $order = new Order();
            $order->remote_id = $data->nomer;

        }
        $date = new \DateTime($data->date);
        $date->format("Y-m-dTH:i:s");
        $order->created_at = $date->getTimestamp();
        if(isset($data->Counterparties)){
            $order->name = $data->Counterparties->username;
            if(isset($data->Counterparties->phone)){
                $order->phone = $data->Counterparties->phone;
            }
            if(isset($data->Counterparties->Email)){
                $order->email = $data->Counterparties->Email;
            }

        } else {
            throw new \Exception("В заказе ". $data->nomer." не указан Counterparties");
        }
        if(!$order->validate()){
            throw new Exception(print_r($order->getErrors()));
        }
        $order->save();
        if(isset($data->ItemS)){
            OrderProduct::deleteAll(['order_id'=>$order->id]);
            $total = 0;
            $discount_total = 0;
            foreach ($data->ItemS as $item){
                /**
                 * @var $product Product
                 */
                $product = Product::find()->where(["remote_id" => $item->model])->one();
                $orderProduct = new OrderProduct();
                $orderProduct->product_variant_id = $product->id;
                $orderProduct->name =$product->lang->title;
                $orderProduct->sku = isset($product->variant->sku) ?$product->variant->sku:$product->lang->title;
                $orderProduct->price = $item->price*1;
                $orderProduct->discount_price = ((100-$item->discount)/100)* $item->price;
                $orderProduct->discount = $item->discount;
                $orderProduct->count = $item->quantity;
                $orderProduct->remote_id = $item->model;
                $orderProduct->order_id = $order->id;
                $orderProduct->sum_cost = (((100-$item->discount)/100)* $item->price) * $orderProduct->count ;
                if(!$orderProduct->validate()){
                    throw new Exception(print_r($orderProduct->getErrors()));
                }
                $orderProduct->save();
                $total += $orderProduct->price * $orderProduct->count ;
                $discount_total += $orderProduct->sum_cost;

            }
            $order->total = $total;
            $order->discount_total = $discount_total;
            if(!$order->validate()){
                throw new Exception(print_r($order->getErrors()));
            }
            $order->save();
            $this->result[$data->nomer] = $order->id;
        } else {
            throw new \Exception("В заказе ". $data->nomer." не указан ItemS");
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

        if(isset($item->YurfizLizso)){
            if($item->YurfizLizso == "Юр. лицо"){
                $user->role = "entity";
            }else if($item->YurfizLizso == "Физ. лицо"){
                $user->role = "person";
            }
        }
        $user->username = $item->username;
        $user->email = !empty($item->Email) ? $item->Email : $user->email;
        $user->phone = !empty($item->Phone) ? $item->Phone : $user->phone;
        $user->discount_rate = $item->discount_rate;
        $user->validate();
        if(!$user->validate()){
            throw new Exception(print_r($user->getErrors()));
        }
        $user->save();
        if(isset($item->Discount) && !empty($item->Discount)){
            $this->SaveDiscount($item->Discount, $user);
        }



        $this->result[$item->Code] = $user->id;



    }

    private function SaveDiscount($discounts, $customer){
        CustomerCategoryDiscount::deleteAll(['customer_id'=>$customer->id]);
        foreach ($discounts as $discount){
            $category = Category::find()->where(['remote_id'=>$discount->Group])->one();
            if($category instanceof Category){
                $discountModel = new CustomerCategoryDiscount();
                $discountModel->category_id = $category->id;
                $discountModel->customer_id = $customer->id;
                $discountModel->discount = $discount->Discount;
                $discountModel->save();
            } else {
                throw new \Exception("Категории ".$discount->Group." указаной в Discount у пользователя ".$customer->remote_id." нет в базе");
            }
        }
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


    public  function actionImportCategory(){
        try{
            if($data = \Yii::$app->request->post("data")){
                //$data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    $this->SaveCategories($data);
                } else {
                    throw new Exception("Данные о категориях ожидаются в виде массива.");
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
        if(isset($item->category_id)){
             $category =  Category::find()->where(['remote_id'=>$item->category_id])->one();
             if($category instanceof Category){
                 $item->category_id = $category->id;
             } else {
                 throw new Exception("Категории {$item->category_id} указаной у товара {$item->model} не существует");
             }

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

            $this->result[$category->category_id] = $category_id;
        }

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