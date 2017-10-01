<?php
    
    namespace frontend\controllers;

    use artweb\artbox\ecommerce\models\Brand;
    use artweb\artbox\ecommerce\models\BrandLang;
    use artweb\artbox\ecommerce\models\Product;
    use artweb\artbox\ecommerce\models\ProductLang;
    use artweb\artbox\language\models\Language;
    use frontend\models\SearchForm;
    use yii\data\ActiveDataProvider;
    use yii\helpers\ArrayHelper;
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
                    $bases = [];
                    $tecdoc = [];
                    $analogs = $this->findBySku($word);

                    $data = Product::find()
                        ->joinWith(['lang','variants','variants.lang'])
                        ->where(['product.status'=>0,'product_variant.sku' => $word]);
                    if(isset($analogs->bases)){

                    }
                    if(isset($analogs->tecdoc)){

                    }
                    $siteProvider =  new ActiveDataProvider([
                        'query' => $data,
                    ]);

                    $basesProvider = new ArrayDataProvider([
                        'allModels' => $bases,
                    ]);
                    $tecdocProvider = new ArrayDataProvider([
                        'allModels' => $tecdoc,
                    ]);
                    return $this->render('tecdoc_search', [
                        'siteProvider' => $siteProvider,
                        'basesProvider' => $basesProvider,
                        'tecdocProvider' => $tecdocProvider
                    ]);
                    break;
                case 1:
                    $data = Product::find()
                        ->joinWith(['lang','variants','variants.lang','brand','brand.lang'])
                        ->where(['product.status'=>0])
                        ->andWhere(
                            [
                                'ilike',
                                BrandLang::tableName() . ".title",
                                $word,
                            ]
                        );
                    break;
                case 2:
                    $data = Product::find()
                        ->joinWith(['lang','variants','variants.lang'])
                        ->where(['product.status'=>0])
                        ->andWhere(
                            [
                                'ilike',
                                "REPLACE(".ProductLang::tableName() . ".title, ' ', '')",
                                str_replace(' ', '',$word),
                            ]
                        );
                    break;
                default:
                    throw new HttpException(404, 'Page not found');
                    break;
            }

            $countQuery = clone $data;
            $pages = new Pagination(['totalCount' => $countQuery->count()]);
            $data->offset($pages->offset)
                ->limit($pages->limit);
            $productProvider =  new ActiveDataProvider([
                'query' => $data,
            ]);

            return $this->render('search', [
                'productProvider' => $productProvider,

                'pages' => $pages
            ]);
        }

        function findBySku($word){


            $url = 'http://91.203.25.219:8083/truckpost/hs/InSearchCode?sku=05975';

            $checkLogin = file_get_contents($url);

            for ($i = 0; $i <= 31; ++$i) {
                $checkLogin = str_replace(chr($i), "", $checkLogin);
            }
            $checkLogin = str_replace(chr(127), "", $checkLogin);
            if (0 === strpos(bin2hex($checkLogin), 'efbbbf')) {
                $checkLogin = substr($checkLogin, 3);
            }

            return json_decode( $checkLogin );
        }

    }