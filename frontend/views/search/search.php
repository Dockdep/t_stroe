<?php

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
                        'itemView'     => '../search/_product_item',
                    ]
                ) ?>

                </tbody>
            </table>
        </div>
    </div>
<!--    <div class="col-xs-12 col-sm-12">-->
<!--        <h3 class="title-blocks-home title-block-analogs">Аналоги</h3>-->
<!--    </div>-->
<!---->
<!--    <div class="col-xs-12 col-sm-12">-->
<!--        <div class="tables_analogs">-->
<!--            <table cellpadding="0" cellspacing="0" border="0">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th class="img-analogs-title">Фото</th>-->
<!--                    <th class="title-analog-th">Название</th>-->
<!--                    <th>Наличие</th>-->
<!--                    <th>Цена</th>-->
<!--                    <th></th>-->
<!--                </tr>-->
<!--                </thead>-->
<!---->
<!--                <tbody>-->
<!---->
<!--                <tr>-->
<!--                    <td class="img-analogs">-->
<!--                        <!--100x100-->-->
<!--                        <!--если нет картинки выводить <img src="/images/no-img-80.png" alt="">-->-->
<!--                        <img class="gallery-analog" src="/images/img/analog-min-1.png" alt="">-->
<!--                    </td>-->
<!--                    <td class="title-analog-td">-->
<!--                        <p>Аварійне з'єднання тройник пласт.SP10101012</p>-->
<!--                        <span>Код: 12345678910</span>-->
<!--                    </td>-->
<!--                    <td>10 шт.</td>-->
<!--                    <td class="analog-price-td">2000 грн.</td>-->
<!--                    <td><a class="analogs-buy modal-link" data-form="basket_modal" href="#" title="Купить"></a></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td class="img-analogs">-->
<!--                        <img src="/images/no-img-80.png" alt="">-->
<!--                    </td>-->
<!--                    <td class="title-analog-td">-->
<!--                        <p>Аварійне з'єднання тройник пласт</p>-->
<!--                        <span>Код: 12345678910</span>-->
<!--                    </td>-->
<!--                    <td>1000 шт.</td>-->
<!--                    <td class="analog-price-td">956090 грн.</td>-->
<!--                    <td><a class="analogs-buy modal-link" data-form="basket_modal" href="#" title="Купить"></a></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td class="img-analogs">-->
<!--                        <!--100x100-->-->
<!--                        <!--если нет картинки выводить <img src="/images/no-img-80.png" alt="">-->-->
<!--                        <img class="gallery-analog" src="/images/img/analog-min-1.png" alt="">-->
<!--                    </td>-->
<!--                    <td class="title-analog-td">-->
<!--                        <p>Аварійне з'єднання</p>-->
<!--                        <p>Код: 12345678910</p>-->
<!--                    </td>-->
<!--                    <td>10 шт.</td>-->
<!--                    <td class="analog-price-td">999 грн.</td>-->
<!--                    <td><a class="analogs-buy" href="#" title="Купить"></a></td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                    <td class="img-analogs">-->
<!--                        <img class="gallery-analog" src="/images/img/analog-min-1.png" alt="">-->
<!--                    </td>-->
<!--                    <td class="title-analog-td">-->
<!--                        <p> Аварійне з'єднання тройник пласт Аварійне з'єднання тройник пласт </p>-->
<!--                        <span>Код: 123456780</span>-->
<!--                    </td>-->
<!--                    <td>5 шт.</td>-->
<!--                    <td class="analog-price-td">890 грн.</td>-->
<!--                    <td><a class="analogs-buy modal-link" data-form="basket_modal" href="#" title="Купить"></a></td>-->
<!--                </tr>-->
<!---->
<!---->
<!--                </tbody>-->
<!--            </table>-->
<!--        </div>-->
<!--    </div>-->

    <div class="col-xs-12 col-sm-12">
        <h3 class="title-blocks-home title-block-analogs">Аналоги 3</h3>
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
                        <a href="#" class="modal-link analog_call" data-form="analog-callback"><span>узнать подробней</span></a>
                    </td>
                </tr>

                <tr>
                    <td class="img-analogs">
                        <!--100x100-->
                        <!--если нет картинки выводить <img src="/images/no-img-80.png" alt="">-->
                        <img class="gallery-analog" src="/images/img/analog-min-1.png" alt="">
                    </td>
                    <td class="title-analog-td">
                        <p>Аварійне з'єднання тройник пласт.SP10101012</p>
                        <span>Код: 12345678910</span>
                    </td>
                    <td>10 шт.</td>
                    <td class="analog-price-td">2000 грн.</td>
                </tr>

                <tr>
                    <td class="img-analogs">
                        <!--100x100-->
                        <!--если нет картинки выводить <img src="/images/no-img-80.png" alt="">-->
                        <img class="gallery-analog" src="/images/img/analog-min-1.png" alt="">
                    </td>
                    <td class="title-analog-td">
                        <p>Аварійне з'єднання тройник пласт.SP10101012</p>
                        <span>Код: 12345678910</span>
                    </td>
                    <td>10 шт.</td>
                    <td class="analog-price-td">2000 грн.</td>
                </tr>

                <tr>
                    <td class="img-analogs">
                        <!--100x100-->
                        <!--если нет картинки выводить <img src="/images/no-img-80.png" alt="">-->
                        <img class="gallery-analog" src="/images/img/analog-min-1.png" alt="">
                    </td>
                    <td class="title-analog-td">
                        <p>Аварійне з'єднання тройник пласт.SP10101012</p>
                        <span>Код: 12345678910</span>
                    </td>
                    <td>10 шт.</td>
                    <td class="analog-price-td">2000 грн.</td>
                </tr>

                <tr>
                    <td class="img-analogs">
                        <!--100x100-->
                        <!--если нет картинки выводить <img src="/images/no-img-80.png" alt="">-->
                        <img class="gallery-analog" src="/images/img/analog-min-1.png" alt="">
                    </td>
                    <td class="title-analog-td">
                        <p>Аварійне з'єднання тройник пласт.SP10101012</p>
                        <span>Код: 12345678910</span>
                    </td>
                    <td>10 шт.</td>
                    <td class="analog-price-td">2000 грн.</td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="analog-modal-td">
                        <a href="#" class="modal-link analog_call" data-form="analog-callback"><span>узнать подробней</span></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
