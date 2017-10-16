<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
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
            <li class="active">
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
            <li style="display: none;">
                <a class="cab-mob-link" href="cabinet-history.html"><span>История заказов</span></a>
            </li>
            <li class="active" style="display: none;">
                <a class="cab-mob-link" href="cabinet-history-payment.html"><span>Платежи</span></a>

                <div class="style cab-history-payment-wrapp">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'contentOptions' => ['class' => 'tb-cab-payment'],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'customer_id',
                            'coming',
                            'consumption',
                            'date',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                    <table cellspacing="0" border="0" cellpadding="0" class="tb-cab-payment">
                        <tr>
                            <td>Дата</td>
                            <td>Расход</td>
                            <td>Приход</td>
                        </tr>
                        <tr>
                            <td>02.09.2017</td>
                            <td class="payment-red">-1000</td>
                            <td class="payment-green">+1000</td>
                        </tr>
                        <tr>
                            <td>02.09.2017</td>
                            <td class="payment-red">-2000</td>
                            <td class="payment-green">+1000</td>
                        </tr>
                        <tr>
                            <td>02.09.2017</td>
                            <td class="payment-red"></td>
                            <td class="payment-green">+1000</td>
                        </tr>
                        <tr>
                            <td>02.09.2017</td>
                            <td class="payment-red">-500</td>
                            <td class="payment-green">+7000</td>
                        </tr>
                    </table>

                    <table cellpadding="0" cellspacing="0" border="0" class="td-cab-all-price td-cab-all-price-payment">
                        <tr>
                            <td align="right">
                                <div class="style">Итого: 5000 грн.</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-discount.html"><span>Персональные скидки</span></a></li>
            <li style="display: none;"><a class="cab-mob-link exit-cab" href="#"><span>Выход</span></a></li>
        </ul>
    </div>
</div>