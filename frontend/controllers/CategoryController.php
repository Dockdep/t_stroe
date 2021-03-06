<?php
    namespace frontend\controllers;
    
    use artweb\artbox\ecommerce\helpers\ProductHelper;
    use artweb\artbox\ecommerce\models\Brand;
    use artweb\artbox\ecommerce\models\Category;
    use artweb\artbox\ecommerce\models\Product;
    use yii\data\ArrayDataProvider;
    use yii\db\ActiveQuery;
    use yii\web\Controller;
    
    class CategoryController extends Controller
    {

        /**
         * @param string $slug Brand slug
         *
         * @return string
         */
        public function actionIndex(string $slug)
        {


            /**
             * @var Brand     $model
             * @var Product[] $products
             */
            $model = Category::find()
                          ->with('children','children.lang','children.children')
                          ->joinWith('lang')
                          ->where([ 'category_lang.alias' => $slug ])
                          ->orderBy('category_lang.title')
                          ->one();

            $children = Category::find()
                ->joinWith('lang')
                ->where([ 'category.parent_id' => $model->id ])
                ->orderBy('category_lang.title')
                ->all();
            $childrenProvider = new ArrayDataProvider([
                'allModels' => $children,
                'pagination' => [
                    'pageSize' => 30,
                ],
            ]);

            return $this->render(
                'index',
                [
                    'model'        => $model,
                    'childrenProvider' => $childrenProvider
                ]
            );
        }
    }
    