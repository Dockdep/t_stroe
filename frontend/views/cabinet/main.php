<?php
use yii\helpers\Html;
use yii\helpers\Url;
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
                <form action="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 input-wr">
                            <div class="form-group required">
                                <label class="control-label" for="">Имя</label>
                                <input type="text" id="">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 input-wr">
                            <div class="form-group required">
                                <label class="control-label" for="">Фамилия</label>
                                <input type="text" id="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12 col-md-5 input-wr">
                            <div class="form-group field-signupform-email required">
                                <label class="control-label" for="signupform-email">Ваш e-mail</label>
                                <input type="text" id="signupform-email" class="form-control" name="SignupForm[email]">


                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12 col-md-5 input-wr  phones_mask">
                            <div class="form-group ">
                                <label>Ваш мобильный телефон</label>
                                <input type="text" id="signupform-phone" class="form-control" name="SignupForm[phone]" placeholder="+38(_ _ _) _ _ _- _ _ - _ _">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12 col-md-5 input-wr ">
                            <div class="form-group">
                                <label>Город</label>
                                <input type="text">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12 col-md-5 input-wr ">
                            <div class="form-group">
                                <label>Ваш адрес</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 sm-12  ">
                            <a class="cab-restore-pass" href="#">Сменить пароль</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 button-wr button-left">
                            <button type="submit">Сохранить</button>
                        </div>
                    </div>
                </form>
            </li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-history.html"><span>История заказов</span></a></li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-history-payment.html"><span>Платежи</span></a></li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-discount.html"><span>Персональные скидки</span></a></li>
            <li style="display: none;"><a class="cab-mob-link exit-cab" href="#"><span>Выход</span></a></li>
        </ul>
    </div>
</div>