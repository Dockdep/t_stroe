<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="row cabinet-row">
    <div class="hidden-xs col-xs-12 col-sm-3 cabinet-list-wrapper">
        <ul class="cabinet-list">
            <li>
                <?= Html::a("<span>Личные данные</span>", Url::to(['cabinet/main']));?>
            </li>
            <li class="active">
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
            <li style="display: none;">
                <a class="cab-mob-link"><span>Личные данные</span></a>
            </li>
            <li class="active" style="display: none;">
                <a class="cab-mob-link" href="cabinet-history.html"><span>История заказов</span></a>

                <div class="style cab-history-wrapp">

                    <div class="style cab-history-">
                        <table cellspacing="0" border="0" cellpadding="0" class="tb-cab-history-title">
                            <tr>
                                <td>№461221235</td>
                                <td>31 дек. 2017 г.</td>
                            </tr>
                        </table>

                        <table cellpadding="0" cellspacing="0" border="0" class="tb-cab-history">
                            <tr>
                                <td class="cab-history-img">
                                    <a href="#">
                                        <!--100x100-->
                                        <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
                                        <img class="gallery-analog" src="images/img/analog-min-1.png" alt="">
                                    </a>
                                </td>
                                <td class="cab-history-name">
                                    <!--название выводить или в "a" или в "<p></p>" если нету ссылки-->
                                    <a href="#">АВАРІЙНЕ З'ЄДНАННЯ ТРОЙНИК ПЛАСТ.SP10101012</a>
                                    <span>2000 грн.</span>
                                </td>
                                <td class="cab-history-num">2 шт.</td>
                                <td class="cab-history-price">4000 грн.</td>
                            </tr>

                            <tr>
                                <td class="cab-history-img">
                                    <a href="#">
                                        <!--100x100-->
                                        <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
                                        <img src="images/no-img-80.png" alt="">
                                    </a>
                                </td>
                                <td class="cab-history-name">
                                    <!--название выводить или в "a" или в "<p></p>" если нету ссылки-->
                                    <p>АВАРІЙНЕ З'ЄДНАННЯ</p>
                                    <span>1000 грн.</span>
                                </td>
                                <td class="cab-history-num">1 шт.</td>
                                <td class="cab-history-price">1000 грн.</td>
                            </tr>
                        </table>

                        <table cellpadding="0" cellspacing="0" border="0" class="td-cab-all-price">
                            <tr>
                                <td align="right">
                                    <div class="style">Итого: 5000 грн.</div>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <div class="style cab-history-">
                        <table cellspacing="0" border="0" cellpadding="0" class="tb-cab-history-title">
                            <tr>
                                <td>№461221235</td>
                                <td>01 дек. 2017 г.</td>
                            </tr>
                        </table>

                        <table cellpadding="0" cellspacing="0" border="0" class="tb-cab-history">

                            <tr>
                                <td class="cab-history-img">
                                    <a href="#">
                                        <!--100x100-->
                                        <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
                                        <img src="images/no-img-80.png" alt="">
                                    </a>
                                </td>
                                <td class="cab-history-name">
                                    <!--название выводить или в "a" или в "<p></p>" если нету ссылки-->
                                    <p>АВАРІЙНЕ З'ЄДНАННЯ</p>
                                    <span>1000 грн.</span>
                                </td>
                                <td class="cab-history-num">1 шт.</td>
                                <td class="cab-history-price">1000 грн.</td>
                            </tr>
                        </table>

                        <table cellpadding="0" cellspacing="0" border="0" class="td-cab-all-price">
                            <tr>
                                <td align="right">
                                    <div class="style">Итого: 5000 грн.</div>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <!--выводить максимум 6-->
                    <ul class="pagination">
                        <li class="prev disabled"><span>«</span></li>
                        <li class="active"><a href="" data-page="0">1</a></li>
                        <li><a href="#" data-page="1">2</a></li>
                        <li><a href="#" data-page="2">3</a></li>
                        <li><a href="#" data-page="3">4</a></li>
                        <li><a href="#" data-page="4">5</a></li>
                        <li><a href="#" data-page="4">6</a></li>
                        <li class="next"><a href="#" data-page="1">»</a></li>
                    </ul>
                </div>
            </li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-history-payment.html"><span>Платежи</span></a></li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-discount.html"><span>Персональные скидки</span></a></li>
            <li style="display: none;"><a class="cab-mob-link exit-cab" href="#"><span>Выход</span></a></li>
        </ul>
    </div>
</div>