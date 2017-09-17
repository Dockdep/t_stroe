<?php
namespace frontend\widgets;

use artweb\artbox\models\Customer;
use yii\base\Widget;
use yii\web\User;

class PriceWidget extends Widget
{
    public $price;
    public $discount;
    public $category;


    public function init(){

        parent::init();

    }


    public function run()
    {
        /**
         * @var $user User
         */
        if($this->price != 0 ){
            $user = \Yii::$app->user;
            $percent = 0;
            if($this->discount){
                $percent = $this->discount;
            }


            if(!$user->isGuest){
                /**
                 * @var $identity Customer
                 */
                $identity = $user->identity;
                if(!empty($identity->discount_rate)){
                    $percent = $identity->discount_rate > $this->discount ? $identity->discount_rate : $this->discount;
                }


            }
        }
        return 1000;


    }

}
?>
