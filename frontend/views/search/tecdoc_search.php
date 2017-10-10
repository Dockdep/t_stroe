<?php

use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\widgets\ListView;

?>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <h3 class="title-blocks-home title-block-analogs">Результат поиска</h3>
    </div>

    <div class="col-xs-12 col-sm-12">
        <div class="tables_analogs">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th class="img-analogs-title">Фото</th>
                    <th class="title-analog-th">Название</th>
                    <th>Наличие</th>
                    <th>Цена</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                    <?= ListView::widget(
                        [
                            'dataProvider' => $siteProvider,
                            'layout'       => "{items}",
                            'itemView'     => '../search/_product_item',
                        ]
                    ) ?>

                    <?= ListView::widget(
                        [
                            'dataProvider' => $stockProvider,
                            'layout'       => "{items}",
                            'itemView'     => '../search/stock_product_item',
                        ]
                    ) ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12">
        <h3 class="title-blocks-home title-block-analogs">Уточнить наличие и цену</h3>
    </div>

    <div class="col-xs-12 col-sm-12">
        <div class="tables_analogs tables_analogs3">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th class="img-analogs-title">Фото</th>
                    <th class="title-analog-th">Название</th>
                    <th>Наличие</th>
                    <th>Цена</th>
                </tr>
                </thead>

                <tbody>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="analog-modal-td">
                        <a href="#" class="modal-link modal-callback" data-form="analog-callback"><span>узнать подробней</span></a>
                    </td>
                </tr>
                <?= ListView::widget(
                    [
                        'dataProvider' => $tecdocProvider,
                        'layout'       => "{items}",
                        'itemView'     => '../search/tecdoc_product_item',
                    ]
                ) ?>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="analog-modal-td">
                        <a href="#" class="modal-link modal-callback" data-form="analog-callback"><span>узнать подробней</span></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
