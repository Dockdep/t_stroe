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
            switch ($action){
                case 0:
                    $bases = [];
                    $stock = [];
                    $tecdoc = [];
                    $analogs = $this->findBySku(urlencode($word));


                    if(isset($analogs->bases)){
                        $bases = $analogs->bases;
                    }
                    $data = Product::find()
                        ->joinWith(['lang','variants','variants.lang'])
                        ->where(['product.status'=>0,'product.remote_id' => $bases])
                        ->orderBy('product_variant.price');
                    $countQuery = clone $data;
                    $pages = new Pagination(['totalCount' => $countQuery->count()]);
                    $data->offset($pages->offset)
                        ->limit($pages->limit);


                    if(isset($analogs->stock)){
                        $stock = $analogs->stock;
                    }
                    if(isset($analogs->tecdoc)){
                        $tecdoc = $analogs->tecdoc;
                    }
                    $siteProvider =  new ActiveDataProvider([
                        'query' => $data,
                    ]);

                    $stockProvider = new ArrayDataProvider([
                        'allModels' => $stock,
                    ]);
                    $tecdocProvider = new ArrayDataProvider([
                        'allModels' => $tecdoc,
                    ]);

                    return $this->render('tecdoc_search', [
                        'siteProvider' => $siteProvider,
                        'stockProvider' => $stockProvider,
                        'tecdocProvider' => $tecdocProvider,
                        'pages' => $pages
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
                'action' => $action,
                'word' => $word,
                'pages' => $pages
            ]);
        }

        function findBySku($word){


            $url = "http://91.203.25.219:8083/truckpost/hs/InSearchCode?sku=$word";

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