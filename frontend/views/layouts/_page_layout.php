<?php
use frontend\widgets\MenuWidget;
use frontend\widgets\BrandWidget;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->beginContent('@app/views/layouts/main.php');

?>

    <div class="container hidden-xs hidden-sm">
        <div class="row">
            <div class="col-md-3 col-lg-3" style="min-height: 0 !important;">
                <!--если каталог всплываюший добавлять для main-menu класс "menu_all_page"-->
                <div class="style main-menu menu_all_page" style="display: none;">
                    <?php echo MenuWidget::widget(['type'=>'full']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <?php

                echo Breadcrumbs::widget(
                    [
                        'encodeLabels'       => false,
                        'homeLink'           => [
                            'label'    => Html::tag(
                                'span',
                                'Главная',
                                [
                                    'itemprop' => 'name',
                                ]
                            ),
                            'url'      => [ 'site/index' ],
                            'itemprop' => 'item',
                            'template' => "<li itemscope itemprop='itemListElement' itemtype='http://schema.org/ListItem'>{link}<meta itemprop='position' content='1' /></li>\n",
                        ],
                        'links'              => isset( $this->params[ 'breadcrumbs' ] ) ? $this->params[ 'breadcrumbs' ] : [],
                        'options'            => [
                            'class'     => 'breadcrumb',
                            'itemscope' => true,
                            'itemtype'  => 'http://schema.org/BreadcrumbList',
                        ],
                        'itemTemplate'       => "<li itemscope itemprop='itemListElement' itemtype='http://schema.org/ListItem'>{link}</li>\n",
                        'activeItemTemplate' => "<li class='active' itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>{link}</li>\n",
                    ]
                );
                ?>
            </div>
        </div>

        <?= $content ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h3 class="title-blocks-home">Недавно просмотренные</h3>
            </div>
            <div class="col-xs-12 col-sm-12">
                <div class="slider-news sliders row">

                    <div class="col-xs-12 col-sm-4">
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

                    <div class="col-xs-12 col-sm-4">
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

                    <div class="col-xs-12 col-sm-4">
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

                    <div class="col-xs-12 col-sm-4">
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

                    <div class="col-xs-12 col-sm-4">
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

                    <div class="col-xs-12 col-sm-4">
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
        <div class="section-box-slider-brands">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php echo BrandWidget::widget(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->endContent() ?>