<?php
    namespace frontend\widgets;
    
    use Yii;
    use yii\base\Widget;
    use yii\db\ActiveQuery;
    
    class Search extends Widget
    {
        public $title;
        
        public function init()
        {
            
            parent::init();
            
        }
        
        public function run()
        {
            $word = Yii::$app->request->get('word');
            $action = Yii::$app->request->get('action');
            print_r($word);
            print_r($action);
            die();
            return $this->render(
                'search',
                [

                ]
            );
                

            
        }
        
    }
