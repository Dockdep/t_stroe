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
                    <div>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            // 'filterModel' => $searchModel,
                            'tableOptions' => ['class' => 'tb-cab-payment tb-cab-payment_new'],
                            'columns' => [
                                'order_id',
                                [
                                    'attribute'=>'date',
                                    'content'=>function($data){
                                        return date ( 'd-m-Y', $data->date );
                                    }
                                ],
                                [
                                    'attribute'=>'action_date',
                                    'content'=>function($data){
                                        return date ( 'd-m-Y', $data->action_date );
                                    }
                                ],
                                [
                                    'attribute'=>'date_of_delay',
                                    'content'=>function($data){
                                        if($data->date_of_delay > 0) {
                                            return date ( 'd-m-Y', $data->date_of_delay );
                                        } else {
                                            return '';
                                        }

                                    }
                                ],
                                'days_of_delay',
                                [
                                    'attribute'=>'shipment',
                                    'contentOptions' =>['class' => 'payment-red'],
                                ],
                                [
                                    'attribute'=>'payment',
                                    'contentOptions' =>['class' => 'payment-green'],
                                ],
                                'amount',
                                'order_remainder'
                            ],
                        ]); ?>
                    </div>

                    <table cellpadding="0" cellspacing="0" border="0" class="td-cab-all-price td-cab-all-price-payment td-cab-all-price-payment_new">
                        <tr>
                            <td align="right">
                                <div class="style">Итого: <?= round(( $payment->remainder),2) ?>  грн.</div>
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