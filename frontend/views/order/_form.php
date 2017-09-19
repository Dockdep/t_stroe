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
                        'id' => 'city',
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
                        'id' => 'adress',
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
                    <input type="radio" id="radio-1-0" value="Доставка новой почтой"  name="OrderFrontend[delivery]">
                    <label for="radio-1-0">Доставка новой почтой</label>
                </div>
                <div class="style radio_custom">
                    <input type="radio" id="radio-1-1" value="Доставка по Киеву и области" name="OrderFrontend[delivery]">
                    <label for="radio-1-1">Доставка по Киеву и области</label>

                </div>

                <div class="style radio_custom">
                    <input type="radio" id="radio-1-2" value="Доставка по Украине"  name="OrderFrontend[delivery]">
                    <label for="radio-1-2">Доставка по Украине</label>
                </div>

                <div class="style radio_custom">
                    <input type="radio" id="radio-1-3" value="Самовывоз" name="OrderFrontend[delivery]">
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





<?php



$js = <<< JS
        $(function() {
            function getNpNum(arr){
                $('#orderfrontend-adress').val('');
                $('#orderfrontend-adress').autocomplete({
                    delay: 100,
                    source: arr
                });
            }
            $('#orderfrontend-city').autocomplete({
                delay: 100,
                source: function (request, response) {
                    var query = {
                        "apiKey": "b6aa4ad6135db0bcaa01777fd9ce039b",
                        "modelName": "Address",
                        "calledMethod":"searchSettlements",
                        "methodProperties": {
                            "CityName": request.term,
                            "Limit": "5"
                        }

                    };
                    $.ajax({
                        url: 'https://api.novaposhta.ua/v2.0/json/',// json data
                        data:query,
                        contentType: 'application/json',
                        dataType: 'jsonp', // jsonp only beause it is a cross org. req.
                        contentType: 'json',
                        success: function(json) {
                            //console.log(json);
                            // console.log(json);
                            console.log(json.data[0].Addresses)

                            var array = $.map(json.data[0].Addresses, function(m) {
                                console.log(m)
                                return {
                                    label: m.MainDescription,
                                    ref: m.Ref,
                                };
                            });
                            return response(array);
                        }
                    });
                },
                select: function(event, ui) {
                    $('#orderfrontend-city').val(ui.item.label); // display the selected text
                    var query = {
                        "apiKey": "b6aa4ad6135db0bcaa01777fd9ce039b",
                        "modelName": "AddressGeneral",
                        "calledMethod": "getWarehouses",
                        "methodProperties": {
                            "CityName": ui.item.label,
                        }
                    };

                    $.ajax({
                        url: 'https://api.novaposhta.ua/v2.0/json/',// json data
                        data:query,
                        contentType: 'application/json',
                        dataType: 'jsonp', // Киjsonp only beause it is a cross org. req.
                        contentType: 'json',
                        success: function(json) {
                            var array = $.map(json.data, function(m) {
                                return {
                                    label: m.Description,
                                };
                            });
                            getNpNum(array);
                        }

                    });
                    return false;
                }
            });
        });
JS;
$this->registerJs(
    $js,
    View::POS_READY
);
?>

    <style type="text/css">
        input {
            border:1px solid #cccccc;
            border-radius: 3px 3px 3px 3px;
            width: 370px;
            padding: 9px 9px 9px 9px;
            margin: 3px 0px 3px 3px;
            color: #e1e1e1;
        }

        input:focus {
            border-color:#00cc33;
            box-shadow:0 0 10px #d5d5d9;
            -webkit-box-shadow:outset 0 1px 9px #d5d5d9;
            -moz-box-shadow:outset 0 1px 9px #d5d5d9;
            color:  #676767;
        }

        /* min Jquery CSS elements for autocomplete */
        .ui-autocomplete { position: absolute; cursor: default; }
        .ui-menu { list-style:none; padding: 2px; margin: 0; display:block; float: left; background-color:#f9f9f9; border: 1px solid #efefef; border-radius: 3px 3px 3px 3px; }

        .ui-menu .ui-menu {
            margin-top: -3px;
        }
        .ui-menu .ui-menu-item {
            margin:0;
            padding: 0;
            zoom: 1;
            float: left;
            clear: left;
            width: 100%;
            font-family:arial;
        }
        .ui-menu .ui-menu-item a {
            text-decoration:none;
            display:block;
            padding:.1em .3em;
            line-height:1.5;
            zoom:1;
        }
        .ui-menu .ui-menu-item a.ui-state-hover, .ui-menu .ui-menu-item a.ui-state-active {
            font-weight: bold;
        }
    </style>

</div>