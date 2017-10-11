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
            $searchParams = [
                'по номеру товара',
                'по бренду',
                'по названию товара'
            ];
            $word = Yii::$app->request->get('word') ?Yii::$app->request->get('word') : 0;
            $action = Yii::$app->request->get('action') ?Yii::$app->request->get('action') :'';
            return $this->render(
                'search',
                [
                    'word' => $word,
                    'action' => $action,
                    'searchParams' => $searchParams
                ]
            );
                

            
        }
        
    }
