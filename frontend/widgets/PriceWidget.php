<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\web\User;

class PriceWidget extends Widget
{
    public $user;


    public function init(){

        parent::init();

    }


    public function run()
    {
        /**
         * @var $user User
         */
        $user = \Yii::$app->user;
        if($user->isGuest){
            return  200;
        } else {
            $identity = $user->identity;
            return 300;
        }


    }

}
?>
