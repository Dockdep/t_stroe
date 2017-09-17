<?php
namespace frontend\widgets;

use artweb\artbox\models\Customer;
use common\models\CustomerCategoryDiscount;
use yii\base\Widget;
use yii\web\User;

class PriceWidget extends Widget
{
    public $price;
    public $discount;
    public $category;
    /**
     * @var $discountCategory CustomerCategoryDiscount
     */
    public $discountCategory;

    public function init(){
        if(!\Yii::$app->user->isGuest){
            if(isset($this->category->parentAR->parentAR)){
                $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$this->category->parentAR->parentAR->id,'customer_id'=>\Yii::$app->user->identity->id])->one();
                if(!$discountCategory instanceof CustomerCategoryDiscount && isset($this->category->parentAR))
                {
                    $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$this->category->parentAR->id,'customer_id'=>\Yii::$app->user->identity->id])->one();
                    if(!$discountCategory instanceof CustomerCategoryDiscount ){
                        $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$this->category->id,'customer_id'=>\Yii::$app->user->identity->id])->one();
                    }

                }
            }

        } else {
            $discountCategory = null;
        }

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


                if($this->discountCategory != null){
                    $percent = $this->discount > $this->discountCategory->discount ? $this->discount : $this->discountCategory->discount;
                }

            }

            if($percent > 0){
                $this->price = ((100-$percent)/100) * $this->price;
            }
        }
        return $this->price;


    }

}
?>
