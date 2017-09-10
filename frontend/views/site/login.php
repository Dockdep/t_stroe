<?php
use frontend\models\LoginForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/**
 *@var LoginForm $model
 */
?>
<div class="row">

    <div class="col-xs-12 col-sm-12">

        <div class="row">
            <h1 class="col-xs-12 col-sm-12 title-card">Вход в личный кабинет</h1>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-6">
                <?php $form = ActiveForm::begin([
                    "action" =>  Url::to(['site/login'])
                ]); ?>


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 input-wr medium-label">
                            <div class="form-group field-loginform-email required">
                                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 input-wr medium-label">
                            <div class="form-group field-loginform-password required">
                                <?= $form->field($model, 'password')->passwordInput() ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 input-wr sidebar_checks">
                            <div class="form-group field-loginform-rememberme">
                                <?= $form->field($model, 'rememberMe', [ 'template' => "{input}\n{label}\n{error}" ])
                                    ->label('<a>Запомнить меня</a>')
                                    ->checkbox([
                                        'class'    => 'custom-check',
                                        'checked' => 'checked',
                                    ],false) ?>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 button-wr button-left">
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