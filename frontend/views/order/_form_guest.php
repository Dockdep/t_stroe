<?php
    /**
     * @var OrderFrontend $order
     * @var View          $this
     * @var Delivery[]    $deliveries
     */
    use artweb\artbox\ecommerce\models\Delivery;
    use frontend\models\LoginForm;
    use frontend\models\OrderFrontend;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\web\View;
    use yii\widgets\ActiveForm;

?>
<div class="col-xs-12 col-sm-12">
    <div class="style basket-tabs_list-wr hidden-xs">
        <ul>
            <li class="active">
                <a href="#">Новый покупатель</a>
            </li>

            <li>
                <a href="#">Я уже зарегестрирован</a>
            </li>
        </ul>
    </div>

    <!------------------------>
    <div class="style tabs_basket-blocks">
        <div class="style tabs_basket-mobile active-mobile">
            <a class="btn_mobil_show_desk style hidden-sm hidden-md hidden-lg" href="#">Новый покупатель</a>
            <div class="style hidden_tabs">

            <?php
            echo $this->render(
                '_form',
                [
                    'order' => $order,
                ]
            );
        ?>

            </div>
        </div>

        <div class="style tabs_basket-mobile">
            <a class="btn_mobil_show_desk style hidden-sm hidden-md hidden-lg" href="#">Я уже зарегестрирован</a>
            <div class="style hidden_tabs">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <?php $form = ActiveForm::begin([
                            "action" =>  Url::to(['site/login'])
                        ]); ?>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 input-wr medium-label">
                                <div class="form-group field-loginform-email required">
                                    <?= $form->field(new LoginForm(), 'email')->textInput(['autofocus' => true]) ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 input-wr medium-label">
                                <div class="form-group field-loginform-password required">
                                    <?= $form->field(new LoginForm(), 'password')->passwordInput() ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 input-wr sidebar_checks">
                                <div class="form-group field-loginform-rememberme">
                                    <?= $form->field(new LoginForm(), 'rememberMe', [ 'template' => "{input}\n{label}\n{error}" ])
                                        ->label('<a>Запомнить меня</a>')
                                        ->checkbox([
                                            'class'    => 'custom-check',
                                            'checked' => 'checked',
                                        ],false) ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 button-wr button-left" >
                                <button type="submit">Войти</button>
                                <div class="btns_reg modal_login_reg_btns">

                                    <?=

                                    Html::a('Забыли пароль?', [ 'site/request-password-reset' ],
                                        [
                                            'class'=>'restore_password_'
                                        ]) ?>
                                    <?= Html::a('Зарегистрироваться', [ 'site/signup' ],[
                                        'class'=>'to-register-link'
                                    ]) ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        ActiveForm::end();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------>

</div>