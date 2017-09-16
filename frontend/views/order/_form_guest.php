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
                        <form action="#">
                            <form id="w2" action="" method="post">

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 input-wr medium-label">
                                        <div class="form-group required">
                                            <label class="control-label">Email</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 input-wr medium-label">
                                        <div class="form-group required">
                                            <label class="control-label">Пароль</label>
                                            <input type="password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 input-wr sidebar_checks">
                                        <div class="form-group field-loginform-rememberme">
                                            <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
                                            <label class="control-label" for="loginform-rememberme"><a>Запомнить меня</a></label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 button-wr button-left">

                                        <button type="submit">Войти</button>
                                        <div class="btns_reg">
                                            <a class="restore_password_" href="restore.html">Забыли пароль?</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------>

</div>