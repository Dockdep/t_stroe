<?php
    
    namespace frontend\controllers;
    
    use artweb\artbox\ecommerce\models\Basket;
    use yii\web\Controller;
    use yii\web\Response;
    
    class BasketController extends Controller
    {
        
        public $enableCsrfValidation = false;
        
        public $defaultAction = 'main';
        
        public function actionMain()
        {
            $response = \Yii::$app->response;
            $response->format = Response::FORMAT_JSON;
            /**
             * @var Basket $basket
             */
            $basket = \Yii::$app->basket;


            $result = [
                'basket' => $basket->getData(),
                'modal'  => $this->getModal($basket),
                'cart'   => $this->getCart($basket),
            ];
            return $result;
        }
        
        public function actionAdd(string $product_variant_id, int $count)
        {
            $additionalData = \GuzzleHttp\json_decode(\Yii::$app->request->post("additionalData"));
            $response = \Yii::$app->response;
            $response->format = Response::FORMAT_JSON;
            /**
             * @var Basket $basket
             */
            $basket = \Yii::$app->basket;

            if(!empty($additionalData)
                && isset($additionalData[0])
                && isset($additionalData[1])
            ){
                if(count($additionalData) == 3 && $additionalData[2] == 'analog'){
                    $basket->addChangeAnalogs($additionalData);
                } else if($additionalData[2] == 'base') {
                    $basket->add($product_variant_id, $count);
                } else {
                    $basket->addAnalogs($additionalData);
                }
            } else {
                $basket->add($product_variant_id, $count);
            }

            $result = [
                'basket' => $basket->getData(),
                'modal'  => $this->getModal($basket),
                'cart'   => $this->getCart($basket),
            ];

            return $result;
        }
        
        public function actionSet(string $product_variant_id, int $count)
        {
            $response = \Yii::$app->response;
            $response->format = Response::FORMAT_JSON;
            /**
             * @var Basket $basket
             */
            $basket = \Yii::$app->basket;
            $basket->set($product_variant_id, $count);
            $result = [
                'basket' => $basket->getData(),
                'modal'  => $this->getModal($basket),
                'cart'   => $this->getCart($basket),
            ];
            return $result;
        }
        
        public function actionRemove(string $product_variant_id) {
            return $this->actionSet($product_variant_id, 0);
        }
        
        public function actionTest()
        {
            /**
             * @var Basket $basket
             */
            $basket = \Yii::$app->basket;
            $modal = $this->getModal($basket);
            return $modal;
        }
        
        /**
         * @var $basket Basket
         * @return string modal_items
         */
        public function getModal($basket): string
        {

            \Yii::$app->getAssetManager()->bundles['yii\web\JqueryAsset']['js'] =[];
            $output = '';
            $data = $basket->getData();
            if(isset($data['analogs'])){
                $analogs = $data['analogs'];
                unset($data['analogs']);
            }
            $models = $basket->findModels(array_keys($data));
            if(!empty( $models ) || isset($analogs)) {
                $output = $this->renderPartial('modal_items', [
                    'models' => $models,
                    'basket' => $basket,
                ]);
            }

            return $output;
        }
        
        /**
         * @param Basket $basket
         *
         * @return string
         */
        public function getCart($basket): string
        {
            $count = $basket->getCount();
            $output = $this->renderPartial('cart', [
                'count' => $count,
            ]);
            return $output;
        }
    }
