<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>
<div class="row cabinet-row">
    <div class="hidden-xs col-xs-12 col-sm-3 cabinet-list-wrapper">
        <ul class="cabinet-list">
            <li class="active">
                <?= Html::a("<span>Личные данные</span>", Url::to(['cabinet/main']));?>
            </li>
            <li>
                <?= Html::a("<span>История заказов</span>", Url::to(['cabinet/my-orders']));?>
            </li>
            <li>
                <?= Html::a("<span>Платежи</span>", Url::to(['cabinet/payment']));?>
            </li>
            <li>
                <?= Html::a("<span>Персональные скидки</span>", Url::to(['cabinet/discount']));?>
            </li>
            <li>
                <?= Html::a("<span>Выход</span>", Url::to(['site/logout']));?>
            </li>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-9">
        <ul class="cabinet-forms-list">
            <li style="display: none;" class="active">
                <a class="cab-mob-link"><span>Личные данные</span></a>
                <?php $form = ActiveForm::begin([]); ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 input-wr">
                            <?= $form->field($model, 'username')->textInput() ?>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 input-wr">
                            <?= $form->field($model, 'surname')->textInput() ?>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12 col-md-5 input-wr">
                            <?= $form->field($model, 'email')->textInput() ?>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12 col-md-5 input-wr  phones_mask">
                            <?= $form->field($model, 'phone')->textInput() ?>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12 col-md-5 input-wr ">
                            <?= $form->field($model, 'city')->textInput() ?>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12 col-md-5 input-wr ">
                            <?= $form->field($model, 'address')->textInput() ?>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12 col-md-5 input-wr ">
                            <?= $form->field($model, 'password')->passwordInput() ?>
                        </div>
                        <div class="col-xs-12 sm-12 col-md-5 input-wr ">
                            <?= $form->field($model, 'password_repeat')->passwordInput() ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 button-wr button-left">
                            <button type="submit">Сохранить</button>
                        </div>
                    </div>
                <?php
                ActiveForm::end();
                ?>
            </li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-history.html"><span>История заказов</span></a></li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-history-payment.html"><span>Платежи</span></a></li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-discount.html"><span>Персональные скидки</span></a></li>
            <li style="display: none;"><a class="cab-mob-link exit-cab" href="#"><span>Выход</span></a></li>
        </ul>
    </div>
</div>