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
                      $this->findBySku($word);
//                    var_dump($data[0]);
//                    var_dump($data[1]);
//                    var_dump($data);
                    die();
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
// This will remove unwanted characters.
// Check http://www.php.net/chr for details
            for ($i = 0; $i <= 31; ++$i) {
                $checkLogin = str_replace(chr($i), "", $checkLogin);
            }
            $checkLogin = str_replace(chr(127), "", $checkLogin);

// This is the most common part
// Some file begins with 'efbbbf' to mark the beginning of the file. (binary level)
// here we detect it and we remove it, basically it's the first 3 characters
            if (0 === strpos(bin2hex($checkLogin), 'efbbbf')) {
                $checkLogin = substr($checkLogin, 3);
            }

            $checkLogin = json_decode( $checkLogin );
            print_r($checkLogin);
        }

    }