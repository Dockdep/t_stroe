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
                       // 'filterModel' => $searchModel,
                        'tableOptions' => ['class' => 'tb-cab-payment'],
                        'columns' => [
                            [
                                'attribute'=>'date',
                                'content'=>function($data){
                                    return date ( 'd-m-Y', $data->date );
                                }
                            ],
                            [
                                'attribute'=>'coming',
                                'contentOptions' =>['class' => 'payment-red'],
                                'content'=>function($data){
                                    return $data->coming > 0 ? "-".$data->coming : 0 ;
                                }
                            ],
                            [
                                'attribute'=>'consumption',
                                'contentOptions' =>['class' => 'payment-green'],
                                'content'=>function($data){
                                    return $data->consumption > 0 ? "+".$data->consumption : 0;
                                }
                            ]
                        ],
                    ]); ?>

                    <table cellpadding="0" cellspacing="0" border="0" class="td-cab-all-price td-cab-all-price-payment">
                        <tr>
                            <td align="right">
                                <div class="style">Отгрузка: <?= round($payment->coming,2) ?> грн.</div>
                            </td>
                            <td align="right">
                                <div class="style">Оплата: <?= round($payment->consumption,2) ?> грн.</div>
                            </td>
                            <td align="right">
                                <div class="style">Итого: <?= round(( $payment->consumption - $payment->coming),2) ?>  грн.</div>
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