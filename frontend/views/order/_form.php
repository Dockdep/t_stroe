<?php
/**
 * @var View          $this
 * @var OrderFrontend $order
 * @var Delivery[]    $deliveries
 */
use artweb\artbox\ecommerce\models\Delivery;
use artweb\artbox\ecommerce\models\OrderPayment;
use common\components\CreditHelper;
use frontend\models\OrderFrontend;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
use yii\helpers\ArrayHelper;
use yii\web\View;

?>
<div class="forms_pages form-new-customer">
    <?php
    $form = ActiveForm::begin(
        [
            'id' => 'basket-form',
        ]
    );
    ?>

    <?php
    if (\Yii::$app->user->isGuest) {
        ?>
        <div class="row">
            <?php
            echo $form->field(
                $order,
                'name',
                [
                    'options' => [
                        'class' => 'col-xs-12 col-sm-6 col-md-6 input-wr medium-label',
                    ],
                ]
            )
                ->textInput();
            ?>
        </div>
        <?php
    }
    ?>

    <div class="row">
            <div class="col-xs-12 col-sm-5 col-md-3 input-wr">
                <?php
                echo $form->field(
                    $order,
                    'email'
                )
                    ->textInput();
                ?>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-3 input-wr phones_mask">
                <?php
                echo $form->field(
                    $order,
                    'phone'
                )
                    ->textInput(
                        [
                            "placeholder" => "+38(_ _ _) _ _ _- _ _ - _ _",
                        ]
                    );
                ?>
            </div>
        </div>




        <div class="row">
            <?php
            echo $form->field(
                $order,
                'city',
                [
                    'options' => [
                        'class' => 'col-xs-12 col-sm-5 col-md-3 input-wr medium-label',
                    ],
                ]
            )
                ->textInput();
            echo $form->field(
                $order,
                'adress',
                [
                    'options' => [
                        'class' => 'col-xs-12 col-sm-5 col-md-3 input-wr medium-label',
                    ],
                ]
            )
                ->textInput();
            ?>
        </div>

        <div class="row delivery-wrapper">
            <div class="col-xs-12 col-sm-12 input-wr required">
                <label for="">Вариант доставки</label>
            </div>

            <div class="col-xs-12">
                <div class="style radio_custom">
                    <input type="radio" id="radio-1-1" name="OrderFrontend[delivery]">
                    <label for="radio-1-1">Доставка по Киеву и области</label>

                </div>

                <div class="style radio_custom">
                    <input type="radio" id="radio-1-2"  name="OrderFrontend[delivery]">
                    <label for="radio-1-2">Доставка по Украине</label>
                </div>

                <div class="style radio_custom">
                    <input type="radio" id="radio-1-3"  name="OrderFrontend[delivery]">
                    <label for="radio-1-3">Самовывоз</label>
                </div>

            </div>
        </div>

        <div class="row payment-wrapper">
            <div class="col-xs-12 col-sm-12 input-wr required">
                <label for="">Способы оплаты</label>
            </div>

            <div class="col-xs-12">
                <div class="style radio_custom">
                    <input type="radio" id="radio-2-1" name="OrderFrontend[payment]">
                    <label for="radio-2-1">Оплата наличными</label>
                </div>

                <div class="style radio_custom">
                    <input type="radio" id="radio-2-2"  name="OrderFrontend[payment]">
                    <label for="radio-2-2">Оплата по безналичному расчету</label>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 input-wr">
                <?php
                echo $form->field(
                    $order,
                    'comment',
                    [
                        'options' => [
                            'class' => 'col-xs-12 col-sm-10 col-md-6 input-wr medium-label _area_',
                        ],
                    ]
                )
                    ->textarea(
                        [
                            'cols' => 30,
                            'rows' => 10,
                        ]
                    );
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 button-wr button-left">
                <button type="submit">ОФОРМИТЬ ЗАКАЗ</button>
            </div>
        </div>
    <?php
    $form::end();
    ?>
</div>