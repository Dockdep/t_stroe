<?php
/**
 * @var Product           $product
 * @var View       $this
 * @var Category   $category
 */
use artweb\artbox\ecommerce\models\Category;
use artweb\artbox\ecommerce\models\Product;

$this->title = $product->lang->title;

$this->params[ 'seo' ][ 'fields' ][ 'name' ] =  $product->lang->title;
$this->params[ 'seo' ][ 'title' ] = $product->lang->meta_title;
$this->params[ 'seo' ][  'h1' ] =  $product->lang->title;


//if($category->parent_id){
//    $this->params[ 'breadcrumbs' ][] = [
//        'label' => $category->parentAR->lang->title,
//        'url'   => [
//            [
//                'category/index',
//                'slug' => $category->parentAR->lang->alias,
//            ],
//        ],
//    ];
//}

$this->params[ 'breadcrumbs' ][] = [
    'label' => $category->lang->title,
    'url'   => [
        'catalog/category',
        'category' => $category->lang->alias,
    ],
];

$this->params[ 'breadcrumbs' ][] = [
    'label' => $category->lang->title,
    'url'   => [
        'catalog/category',
        'category' => $category->lang->alias,
    ],
];

$this->params[ 'breadcrumbs' ][] =  $product->lang->title;
/**
 * @var $product Product
 */

?>
<div class="col-xs-12 col-sm-12">

    <div class="simpleCart_shelfItem">
        <div class="row">
            <h1 class="col-xs-12 col-sm-12 title-card item_name"><?= $product->enabledVariant->lang->title ?></h1>
        </div>

        <div class="row card-blocks-wr">

            <div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
                <div class="style big_small_img-wr">
                    <div class="style my-gallery">
                        <div class="status_items-wr">
                            <div><p class="staus_sale">сКидка -50%<span></span></p></div>
                        </div>
                        <!--в data-size выводить оригинальный размер картинки-->
                        <figure class="help_class">

                            <a style="display: none;" href="images/img/gallery/img-1-full.jpg" itemprop="contentUrl"
                               data-size="1920x1080">
                                <!--420x350-->
                                <img class="item_myimage" src="images/img/gallery/img-1.jpg" itemprop="thumbnail"
                                     alt=""/>
                            </a>
                            <a style="display: none;" href="images/img/gallery/img-2-full.jpg" itemprop="contentUrl"
                               data-size="1920x1080">
                                <!--420x350-->
                                <img src="images/img/gallery/img-2.jpg" itemprop="thumbnail" alt=""/>
                            </a>
                        </figure>

                    </div>

                    <div class="style gallery_min">
                        <!--миниатюры выводить в том же порядке что и большие картинки-->
                        <div class="row">
                            <div>
                                <a href="#">
                                    <!--143x88-->
                                    <img src="images/img/gallery/img-1-min.jpg" alt="">
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <!--143x88-->
                                    <img src="images/img/gallery/img-2-min.jpg" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 card-code-price-wr">
                <div class="style code-card-wr">
                    <div class="code-card"><span>Код: </span><?= $product->enabledVariant->sku ?></div>
                </div>

                <!--если овара нет в наличии для card-in-stock добавить класс "no-stock"-->
                <div class="style card-in-stock">
                    <!--нет в наличии-->
                    <span>есть в наличии</span>
                </div>

                <div class="card-quantity">(<?= $product->enabledVariant->quantity ?> <span>шт.)</span></div>

                <div class="cat-price-more cat_new_price item_price">
                    <?php if (!empty($product->enabledVariant->price_old)) { ?>
                        <div class="cat_old_price"><?= round($product->enabledVariant->price_old, 2) ?><span
                                    class="currency"> грн.</span></div>
                    <?php } ?>
                    <div class="cat_price item_price"><?= round($product->enabledVariant->price, 2) ?><span
                                class="currency"> грн.</span></div>
                </div>

                <div class="style card-buy-wrapper">
                    <!--если овара нет в наличии не выводить-->
                    <div class="card-num-wr">
                        <i class="min"></i>
                        <input type="text" value="1" max="999" class="item_Quantity">
                        <i class="pluse"></i>
                    </div>
                    <!----------------------------------------->

                    <!---если овара нет в наличии добавлять для card-btn-buy класс "disabled"-->
                    <div class="card-btn-buy">
                        <a class="modal-link item_add" data-form="basket_modal" href="javascript:;"><span>Купить</span></a>
                    </div>

                </div>

            </div>

            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4 card_sale-bl-wr">
                <div class="style delivery-card">
                    <div class="style title-del-card-big">Самовывоз</div>
                    <div class="style title-del-card">Вы можете забрать этот товар самостоятельно:</div>

                    <div class="style del-card-yourself-wr">
                        <div class="style del-card-yourself">
                            <span>Киев ул.Гната Хоткевича 22в</span>
                        </div>

                        <div class="style del-card-yourself">
                            <span>Бровары ул.Лесная 2 1этаж</span>
                        </div>
                    </div>
                </div>

                <div class="style delivery-card">
                    <div class="style title-del-card-big">Доставка</div>
                    <div class="style title-del-card">Способы доставки:</div>

                    <div class="style del-card-yourself-wr">
                        <div class="style del-card-yourself">
                            <span>Курьер нашей компании</span>
                        </div>

                        <div class="style del-card-yourself">
                            <span>Службой "Новая почта"</span>
                        </div>

                        <div class="style del-card-yourself">
                            <span>Транспортной компанией «САТ»</span>
                        </div>
                    </div>
                </div>

                <div class="style delivery-card">
                    <div class="style title-del-card-big">Оплата</div>
                    <div class="style title-del-card">Наличными, Безналичными</div>
                </div>

                <div class="style delivery-card">
                    <div class="style title-del-card-big">Обмен/возврат</div>
                    <div class="style title-del-card">Обмен/возврат в течение 14 дней после покупки</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h3 class="title-blocks-home title-block-analogs">Аналоги</h3>
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

                    <tr>
                        <td class="img-analogs">
                            <!--100x100-->
                            <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
                            <img class="gallery-analog" src="images/img/analog-min-1.png" alt="">
                        </td>
                        <td class="title-analog-td">
                            <p>Аварійне з'єднання тройник пласт.SP10101012</p>
                            <span>Код: 12345678910</span>
                        </td>
                        <td>10 шт.</td>
                        <td class="analog-price-td">2000 грн.</td>
                        <td><a class="analogs-buy modal-link" data-form="basket_modal" href="#" title="Купить"></a></td>
                    </tr>

                    <tr>
                        <td class="img-analogs">
                            <img src="images/no-img-80.png" alt="">
                        </td>
                        <td class="title-analog-td">
                            <p>Аварійне з'єднання тройник пласт</p>
                            <span>Код: 12345678910</span>
                        </td>
                        <td>1000 шт.</td>
                        <td class="analog-price-td">956090 грн.</td>
                        <td><a class="analogs-buy modal-link" data-form="basket_modal" href="#" title="Купить"></a></td>
                    </tr>

                    <tr>
                        <td class="img-analogs">
                            <!--100x100-->
                            <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
                            <img class="gallery-analog" src="images/img/analog-min-1.png" alt="">
                        </td>
                        <td class="title-analog-td">
                            <p>Аварійне з'єднання</p>
                            <p>Код: 12345678910</p>
                        </td>
                        <td>10 шт.</td>
                        <td class="analog-price-td">999 грн.</td>
                        <td><a class="analogs-buy" href="#" title="Купить"></a></td>
                    </tr>

                    <tr>
                        <td class="img-analogs">
                            <img class="gallery-analog" src="images/img/analog-min-1.png" alt="">
                        </td>
                        <td class="title-analog-td">
                            <p> Аварійне з'єднання тройник пласт Аварійне з'єднання тройник пласт </p>
                            <span>Код: 123456780</span>
                        </td>
                        <td>5 шт.</td>
                        <td class="analog-price-td">890 грн.</td>
                        <td><a class="analogs-buy modal-link" data-form="basket_modal" href="#" title="Купить"></a></td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>

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
                            <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
                            <img class="gallery-analog" src="images/img/analog-min-1.png" alt="">
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
                            <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
                            <img class="gallery-analog" src="images/img/analog-min-1.png" alt="">
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
                            <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
                            <img class="gallery-analog" src="images/img/analog-min-1.png" alt="">
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
                            <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
                            <img class="gallery-analog" src="images/img/analog-min-1.png" alt="">
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

    <div class="row">
        <div id="disqus_thread"></div>
        <script>


        </script>


    </div>
    <?php

    use yii\web\View;

    $js = "    /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

        var disqus_config = function () {
        this.page.url = window.location.toString(); // Replace PAGE_URL with your page's canonical URL variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://dev-truckpost-com-ua.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();";
    $this->registerJs(
        $js,
        View::POS_READY
    );
    ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h3 class="title-blocks-home">Недавно просмотренные</h3>
        </div>
        <div class="col-xs-12 col-sm-12">
            <div class="slider-news sliders row">

                <div class="col-xs-12 col-sm-3">
                    <div class="items_wr">
                        <div class="items_">
                            <div class="status_items-wr">
                                <!--порядок вывода если несколько статусов оставить как тут-->
                                <div><p class="staus_sale">сКидка -25%<span></span></p></div>
                                <div><p class="staus_hit">custom name<span></span></p></div>
                                <!----------------------------------->
                            </div>


                            <div class="img_items">
                                <a href="#">
                                    <!---картинка 232x160--->
                                    <img src="images/img/img-1.jpg" alt="">
                                </a>
                            </div>

                            <a href="#" class="name_items">
                                Переключатель подрулевой TEQ-01.031
                            </a>

                            <div class="in_stock_wr">
                                <div class="title-sku">
                                    <span>Код: 69225/31/16</span>
                                </div>
                            </div>
                            <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                            <div class="cat-price-more cat_new_price">
                                <div class="cat_price">2186.4<span class="currency"> грн.</span></div>
                                <div class="btn_buy_basket-fix"><a class="read_more_card" href="#">подробнее</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <div class="items_wr">
                        <div class="items_">
                            <div class="status_items-wr">
                                <!--порядок вывода если несколько статусов оставить как тут-->
                                <div><p class="staus_sale">сКидка -25%<span></span></p></div>
                                <div><p class="staus_hit">custom name<span></span></p></div>
                                <!----------------------------------->
                            </div>


                            <div class="img_items">
                                <a href="#">
                                    <!---картинка 232x160--->
                                    <img src="images/img/img-1.jpg" alt="">
                                </a>
                            </div>

                            <a href="#" class="name_items">
                                Переключатель подрулевой TEQ-01.031
                            </a>

                            <div class="in_stock_wr">
                                <div class="title-sku">
                                    <span>Код: 69225/31/16</span>
                                </div>
                            </div>
                            <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                            <div class="cat-price-more cat_new_price">
                                <div class="cat_price">2186.4<span class="currency"> грн.</span></div>
                                <div class="btn_buy_basket-fix"><a class="read_more_card" href="#">подробнее</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <div class="items_wr">
                        <div class="items_">
                            <div class="status_items-wr">
                                <!--порядок вывода если несколько статусов оставить как тут-->
                                <div><p class="staus_sale">сКидка -25%<span></span></p></div>
                                <div><p class="staus_hit">custom name<span></span></p></div>
                                <!----------------------------------->
                            </div>


                            <div class="img_items">
                                <a href="#">
                                    <!---картинка 232x160--->
                                    <img src="images/img/img-1.jpg" alt="">
                                </a>
                            </div>

                            <a href="#" class="name_items">
                                Переключатель подрулевой TEQ-01.031
                            </a>

                            <div class="in_stock_wr">
                                <div class="title-sku">
                                    <span>Код: 69225/31/16</span>
                                </div>
                            </div>
                            <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                            <div class="cat-price-more cat_new_price">
                                <div class="cat_price">2186.4<span class="currency"> грн.</span></div>
                                <div class="btn_buy_basket-fix"><a class="read_more_card" href="#">подробнее</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <div class="items_wr">
                        <div class="items_">
                            <div class="status_items-wr">
                                <!--порядок вывода если несколько статусов оставить как тут-->
                                <div><p class="staus_sale">сКидка -25%<span></span></p></div>
                                <div><p class="staus_hit">custom name<span></span></p></div>
                                <!----------------------------------->
                            </div>


                            <div class="img_items">
                                <a href="#">
                                    <!---картинка 232x160--->
                                    <img src="images/img/img-1.jpg" alt="">
                                </a>
                            </div>

                            <a href="#" class="name_items">
                                Переключатель подрулевой TEQ-01.031
                            </a>

                            <div class="in_stock_wr">
                                <div class="title-sku">
                                    <span>Код: 69225/31/16</span>
                                </div>
                            </div>
                            <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                            <div class="cat-price-more cat_new_price">
                                <div class="cat_price">2186.4<span class="currency"> грн.</span></div>
                                <div class="btn_buy_basket-fix"><a class="read_more_card" href="#">подробнее</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <div class="items_wr">
                        <div class="items_">
                            <div class="status_items-wr">
                                <!--порядок вывода если несколько статусов оставить как тут-->
                                <div><p class="staus_sale">сКидка -25%<span></span></p></div>
                                <div><p class="staus_hit">custom name<span></span></p></div>
                                <!----------------------------------->
                            </div>


                            <div class="img_items">
                                <a href="#">
                                    <!---картинка 232x160--->
                                    <img src="images/img/img-1.jpg" alt="">
                                </a>
                            </div>

                            <a href="#" class="name_items">
                                Переключатель подрулевой TEQ-01.031
                            </a>

                            <div class="in_stock_wr">
                                <div class="title-sku">
                                    <span>Код: 69225/31/16</span>
                                </div>
                            </div>
                            <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                            <div class="cat-price-more cat_new_price">
                                <div class="cat_price">2186.4<span class="currency"> грн.</span></div>
                                <div class="btn_buy_basket-fix"><a class="read_more_card" href="#">подробнее</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3">
                    <div class="items_wr">
                        <div class="items_">
                            <div class="status_items-wr">
                                <!--порядок вывода если несколько статусов оставить как тут-->
                                <div><p class="staus_sale">сКидка -25%<span></span></p></div>
                                <div><p class="staus_hit">custom name<span></span></p></div>
                                <!----------------------------------->
                            </div>


                            <div class="img_items">
                                <a href="#">
                                    <!---картинка 232x160--->
                                    <img src="images/img/img-1.jpg" alt="">
                                </a>
                            </div>

                            <a href="#" class="name_items">
                                Переключатель подрулевой TEQ-01.031
                            </a>

                            <div class="in_stock_wr">
                                <div class="title-sku">
                                    <span>Код: 69225/31/16</span>
                                </div>
                            </div>
                            <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                            <div class="cat-price-more cat_new_price">
                                <div class="cat_price">2186.4<span class="currency"> грн.</span></div>
                                <div class="btn_buy_basket-fix"><a class="read_more_card" href="#">подробнее</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div style="display: none;" class="btn-l_"></div>
            <div style="display: none;" class="btn-r_"></div>
        </div>
    </div>

</div>