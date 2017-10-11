<?php
use frontend\models\SignupForm;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<div class="row">
    <div class="col-xs-12 col-sm-12">

        <div class="row">
            <h1 class="col-xs-12 col-sm-12 title-card">Регистрация</h1>
        </div>

        <?php $form = ActiveForm::begin([
            "action" =>  Url::to(['/site/signup'])
        ]); ?>
            <div class="row">
                <div class="col-xs-24 col-sm-10 col-md-6 input-wr">
                    <div class="form-group required">
                        <?= $form->field($model, 'username')->textInput() ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-3 input-wr">
                    <div class="form-group field-signupform-email required">
                        <?= $form->field($model, 'email')->textInput() ?>


                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-3 input-wr  phones_mask">
                    <div class="form-group ">
                        <?= $form->field($model, 'phone')->textInput([
                            "placeholder" => "+38(_ _ _) _ _ _- _ _ - _ _"
                        ]) ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-3 input-wr ">
                    <div class="form-group">
                        <?= $form->field($model, 'city')->textInput() ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-3 input-wr ">
                    <div class="form-group">
                        <?= $form->field($model, 'address')->textInput() ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-3 input-wr ">
                    <div class="form-group">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-3 input-wr ">
                    <div class="form-group">
                        <?= $form->field($model, 'password_repeat')->passwordInput() ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 button-wr button-left">
                    <button type="submit">Зарегистрироваться</button>
                </div>
            </div>
        <?php
        ActiveForm::end();
        ?>

    </div>
</div>