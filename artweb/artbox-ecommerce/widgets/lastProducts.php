<?php
    
    namespace artweb\artbox\ecommerce\widgets;
    
    use artweb\artbox\ecommerce\helpers\ProductHelper;
    use yii\base\Widget;
    
    class lastProducts extends Widget
    {
        
        public function init()
        {
            parent::init();
        }
        
        public function run()
        {
            die('here');
            return $this->render(
                'products_block',
                [
                    'title'    => 'Недавно просмотренные',
                    'class'    => 'last-products',
                    'products' => ProductHelper::getLastProducts(true),
                ]
            );
        }
    }
    