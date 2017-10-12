<?php
    namespace frontend\widgets;
    
    use artweb\artbox\ecommerce\models\Category;
    use yii\base\Widget;
    
    class MenuWidget extends Widget
    {
        public $type;
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
            $categories = Category::find()
                ->joinWith('lang')
                ->asArray()
                ->where(['status' => false])
                ->orderBy('category_lang.title')
                ->indexBy('id')
                ->all();
            print_r(\GuzzleHttp\json_encode($categories,JSON_UNESCAPED_UNICODE));
            die();
            switch ($this->type){
                case 'full':
                   return $this->renderFull($categories);
                case 'mobile':
                    return $this->renderMobile($categories);
            }



            
        }

        private function renderFull($categories){
            foreach ($categories as $category) {
                if ($category['depth'] > 2) {
                    unset($categories[ $category[ 'id' ] ]);
                }
                if ($category[ 'parent_id' ] != 0 && $category['depth'] == 2) {
                    $categories[ $category[ 'parent_id' ] ][ 'children' ][] = $categories[$category[ 'id' ]];
                    unset($categories[ $category[ 'id' ] ]);
                }


            }

            foreach ($categories as $category) {

                if(!isset($category[ 'parent_id' ])){
                    print_r($category);
                    die();
                }
                if ($category[ 'parent_id' ] != 0 && $category['depth'] == 1) {
                    $categories[ $category[ 'parent_id' ] ][ 'children' ][] = $categories[$category[ 'id' ]];
                    unset($categories[ $category[ 'id' ] ]);
                }
            }

            return $this->render(
                '_full_menu_view',
                [
                    'categories' => $categories,
                ]
            );
        }

        private function renderMobile($categories){

            foreach ($categories as $category) {
                if ($category[ 'parent_id' ] != 0 ) {
                    unset($categories[ $category[ 'id' ] ]);
                }
            }

            return $this->render(
                '_mobile_menu_view',
                [
                    'categories' => $categories,
                ]
            );
        }
        
    }

?>
