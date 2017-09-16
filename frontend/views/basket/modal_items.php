<?php
use artweb\artbox\ecommerce\models\Basket;
use artweb\artbox\ecommerce\models\ProductVariant;
use frontend\models\OrderCredit;
use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;

/**
 * @var View             $this
 * @var ProductVariant[] $models
 * @var Basket           $basket
 * @var array            $data
 */
$data = $basket->getData();
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="style basket-modal-bg">
                <span id="modal_close"></span>
                <div class="style model-name-test">ТОВАР В КОРЗИНЕ</div>
                <?php
                echo $this->render(
                    '@frontend/views/basket/basket_table',
                    [
                        'models' => $models,
                        'basket' => $basket,
                        'data'   => $data,
                    ]
                );
                ?>



                <div class="col-xs-12 col-sm-12">
                    <div class="style price-total-wr">
                        <div class="hidden-xs col-sm-6"><span class="total_txt">итого</span></div>
                        <div class="col-sm-12 col-sm-6 price-total"><span id="simpleCart_grandTotal" class="simpleCart_grandTotal"></span></div>
                    </div>
                </div>

                <div class="style">
                    <form id="basket-modal-form" action="/ru/order/basket" method="POST">
                        <a class="btn_ btn_link_basket" href="/ru/order/basket">оформить заказ</a>
                        <span id="modal_close-2">продолжить покупки</span>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>