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
<div class="style desk_delivery">
    <div class="forms_ form-register">
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
            <?php
                echo $form->field(
                    $order,
                    'email',
                    [
                        'errorOptions' => [
                            'encode' => false,
                        ],
                        'options'      => [
                            'class' => 'col-xs-12 col-sm-5 col-md-3 input-wr medium-label',
                        ],
                    ]
                )
                          ->textInput();
            ?>
        </div>
        <?php
            if (\Yii::$app->user->isGuest) {
                ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 input-wr emails_txt">
                        <?= \Yii::t('app', 'ordform1') ?><br/>
                        <?= \Yii::t('app', 'ordform2') ?>
                        <a class="terms_of_use" href="#"><?= \Yii::t('app', 'ordform3') ?></a>
                    </div>
                </div>
                <?php /*
            <div class="row">
                <?php
                    echo $form->field(
                        $order,
                        'subscribe',
                        [
                            'options'  => [
                                'class' => 'col-xs-12 col-sm-12 input-wr check-box-form',
                            ],
                            'template' => "{input}\n{label}\n{hint}\n{error}",
                        ]
                    )
                              ->checkbox([ 'class' => 'custom-check' ], false)
                              ->label(
                                  Html::tag('span') . Html::a(
                                      $order->getAttributeLabel('subscribe'),
                                      [
                                          '',
                                          '#' => '',
                                      ]
                                  )
                              );
                    echo $form->field(
                        $order,
                        'notRegister',
                        [
                            'options'  => [
                                'class' => 'col-xs-12 col-sm-12 input-wr check-box-form',
                            ],
                            'template' => "{input}\n{label}\n{hint}\n{error}",
                        ]
                    )
                              ->checkbox([ 'class' => 'custom-check' ], false)
                              ->label(
                                  Html::tag('span') . Html::a(
                                      $order->getAttributeLabel('notRegister'),
                                      [
                                          '',
                                          '#' => '',
                                      ]
                                  )
                              );
                ?>
            </div> */
                ?>
                <?php
            }
        ?>
        <div class="row">
            <?php
                echo $form->field(
                    $order,
                    'phone',
                    [
                        'options' => [
                            'class' => 'col-xs-12 col-sm-5 col-md-3 input-wr medium-label',
                        ],
                    ]
                )
                          ->textInput(
                              [
                                  "placeholder" => "+38(_ _ _) _ _ _- _ _ - _ _",
                              ]
                          );
            ?>
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
                    <input type="radio" id="radio-1-1" name="group-1">
                    <label for="radio-1-1">Доставка по Киеву и области</label>

                </div>

                <div class="style radio_custom">
                    <input type="radio" id="radio-1-2"  name="group-1">
                    <label for="radio-1-2">Доставка по Украине</label>
                </div>

                <div class="style radio_custom">
                    <input type="radio" id="radio-1-3"  name="group-1">
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
                    <input type="radio" id="radio-2-1" name="group-2">
                    <label for="radio-2-1">Оплата наличными</label>
                </div>

                <div class="style radio_custom">
                    <input type="radio" id="radio-2-2"  name="group-2">
                    <label for="radio-2-2">Оплата по безналичному расчету</label>
                </div>

            </div>
        </div>

        <div class="row">
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
            <div class="col-xs-12 col-sm-12 add_inform"><?= \Yii::t('app', 'dopinfo') ?></div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 input-wr check-box-form check-box-black plus_txt">
                <?php
                    echo $form->field(
                        $order,
                        'confirm',
                        [
                            'options'  => [
                                'class' => 'form-group',
                            ],
                            'template' => "{input}\n{label}\n{hint}\n{error}",
                        ]
                    )
                              ->checkbox(
                                  [
                                      'class' => 'custom-check',
                                  ],
                                  false
                              )
                              ->label(
                                  Html::tag('span') . Html::a(
                                      $order->getAttributeLabel('confirm'),
                                      [
                                          '',
                                          '#' => '',
                                      ]
                                  )
                              );
                ?>
                <a class="rules_of" href="#"><?= \Yii::t('app', 'rules1') ?></a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 input-wr">
                <button type="submit"><?= \Yii::t('app', 'makeorder') ?></button>
            </div>
        </div>
        <?php
            $form::end();
        ?>
    </div>
</div>
<?php
    $js = "

$('#orderfrontend-phone').mask('+38(000)000-00-00');";
    $this->registerJs($js, View::POS_READY);

?>
