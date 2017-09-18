<?php
    
    namespace frontend\controllers;

    use artweb\artbox\ecommerce\models\Brand;
    use artweb\artbox\ecommerce\models\BrandLang;
    use artweb\artbox\ecommerce\models\Product;
    use artweb\artbox\language\models\Language;
    use frontend\models\SearchForm;
    use yii\helpers\Url;
    use yii\data\ArrayDataProvider;
    use yii\data\Pagination;
    use yii\web\HttpException;

    class SearchController extends \yii\web\Controller
    {
        public function actionMain($word,$action)
        {
            $data=[];
            switch ($action){
                case 0:
                    print_r("по номеру товара");
                    break;
                case 1:
                    $data = Product::find()
                        ->joinWith(['lang','variants','variants.lang','brand','brand.lang'])
                        ->andWhere(
                            [
                                'ilike',
                                BrandLang::tableName() . '.title',
                                $word,
                            ]
                        )->all();
                    break;
                case 2:
                    print_r("по названию товара");
                    break;
                default:
                    throw new HttpException(404, 'Page not found');
                    break;
            }
            return $this->render('search', [
                'data' => $data
            ]);
        }

    }