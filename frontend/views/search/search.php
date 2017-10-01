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
                        'dataProvider' => $productProvider,
                        'layout'       => "{items}",
                        'itemView'     => '../search/_product_item',
                    ]
                ) ?>

                </tbody>
            </table>
        </div>
        <?=
         LinkPager::widget([
            'pagination' => $pages,
             'maxButtonCount' => 5,
        ]);
        ?>
    </div>
</div>
