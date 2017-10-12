<?php
    namespace frontend\widgets;
    
    use common\models\SearchHistory;
    use Yii;
    use yii\base\Widget;
    use yii\db\ActiveQuery;
    use yii\web\NotFoundHttpException;

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

            $word = Yii::$app->request->get('word') ?Yii::$app->request->get('word') : '';
            $action = Yii::$app->request->get('action') ?Yii::$app->request->get('action') :0;
            if(!isset($searchParams[$action])){
                throw new NotFoundHttpException();
            }
            if($word && !Yii::$app->user->isGuest){
                $searchHistory = new SearchHistory();
                $date = new \DateTime('NOW');
                $searchHistory->date = (string)$date->getTimestamp();
                $searchHistory->word  = $word;
                $searchHistory->action = $searchParams[$action];
                $searchHistory->user_id = Yii::$app->user->identity->getId();
                $searchHistory->user_remote_id = Yii::$app->user->identity->remote_id;
                $searchHistory->validate();

                $searchHistory->save();
            }
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
