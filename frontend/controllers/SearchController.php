<?php
    
    namespace frontend\controllers;

    use artweb\artbox\language\models\Language;
    use frontend\models\SearchForm;
    use yii\helpers\Url;
    use yii\data\ArrayDataProvider;
    use yii\data\Pagination;

    class SearchController extends \yii\web\Controller
    {
        public function actionMain($word,$action)
        {
            print_r($word);
            print_r($action);
            die();
        }

    }