<?php
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var $categories \common\models\CustomerCategoryDiscount
 */
?>
<div class="row cabinet-row">
    <div class="hidden-xs col-xs-12 col-sm-3 cabinet-list-wrapper">
        <ul class="cabinet-list">
            <li>
                <?= Html::a("<span>Личные данные</span>", Url::to(['cabinet/main']));?>
            </li>
            <li>
                <?= Html::a("<span>История заказов</span>", Url::to(['cabinet/my-orders']));?>
            </li>
            <li>
                <?= Html::a("<span>Платежи</span>", Url::to(['cabinet/payment']));?>
            </li>
            <li class="active">
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
            <li style="display: none;">
                <a class="cab-mob-link" href="cabinet-history.html"><span>История заказов</span></a>
            </li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-history-payment.html"><span>Платежи</span></a></li>
            <li class="active" style="display: none;">
                <a class="cab-mob-link" href="cabinet-discount.html"><span>Персональные скидки</span></a>

                <div class="style cab-discount-wrapp">

                    <div class="cab-disc-txt">
                        Ваши скидки в категориях
                    </div>

                    <table cellspacing="0" border="0" cellpadding="0" class="tb-cab-history-title tb-cab-discount-title ">
                        <tr>
                            <td>Категория</td>
                            <td>Скидка</td>
                        </tr>
                    </table>

                    <table cellpadding="0" cellspacing="0" border="0" class="cab-tb-discount">
                        <?php foreach ($categories as $category){?>
                            <tr>
                                <td><a href="#">Пневмосистема</a></td>
                                <td>-<?= $category->discount ?>%</td>
                            </tr>
                        <?php }?>


                        <tr>
                            <td><a href="#">Двигатель</a></td>
                            <td>-45%</td>
                        </tr>

                        <tr>
                            <td>Тормоза</td>
                            <td>-28%</td>
                        </tr>

                        <tr>
                            <td>Пневмосистема</td>
                            <td>-35%</td>
                        </tr>

                        <tr>
                            <td>Пневмосистема</td>
                            <td>-35%</td>
                        </tr>

                        <tr>
                            <td>Двигатель</td>
                            <td>-45%</td>
                        </tr>

                        <tr>
                            <td>Тормоза</td>
                            <td>-28%</td>
                        </tr>

                        <tr>
                            <td>Пневмосистема</td>
                            <td>-35%</td>
                        </tr>
                    </table>
                </div>
            </li>
            <li style="display: none;"><a class="cab-mob-link exit-cab" href="#"><span>Выход</span></a></li>
        </ul>
    </div>
</div>