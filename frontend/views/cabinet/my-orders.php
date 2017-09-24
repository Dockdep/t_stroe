<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

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
                    <?= ListView::widget(
                        [
                            'dataProvider' => $dataProvider,
                            'summary' =>false,
                            'itemView'     => '_order',
                        ]
                    ) ?>

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