<?php
    namespace frontend\widgets;
    
    use artweb\artbox\ecommerce\models\Brand;
use artweb\artbox\ecommerce\models\Category;
    use yii\base\Widget;
    
    class BrandWidget extends Widget
    {
        /**
         * @inheritdoc
         */
        public function init()
        {
            
            parent::init();
            
        }
        
        /**
         * @return string
         */
        public function run()
        {
            $brands = Brand::find()
                                  ->joinWith('lang')
                                  ->indexBy('id')
                                  ->limit(20)
                                  ->all();



            return $this->render(
                '_brand_view',
                [
                    'brands' => $brands,
                ]
            );
            
        }
        
    }

?>
