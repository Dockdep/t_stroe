<?php
use frontend\widgets\MenuWidget;
use frontend\widgets\Slider;
?>
<div class="container">
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-3 col-lg-3">
            <!--если каталог всплываюший добавлять для main-menu класс "menu_all_page"-->
            <div class="style main-menu">
                <?php echo MenuWidget::widget(['type'=>'full']); ?>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

            <div class="row hidden-xs">
                <div class="col-xs-12 col-sm-12">
                    <?= Slider::widget([ "title" => "main" ]); ?>

                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <h3 class="title-blocks-home">Новинки</h3>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="row">

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
                                            <img src="/images/img/img-1.jpg" alt="">
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

                                        <div><p class="staus_sale">сКидка -25%<span></span></p></div>

                                    </div>


                                    <div class="img_items">
                                        <a href="#">
                                            <!---картинка 232x160--->
                                            <img src="/images/img/img-2.jpg" alt="">
                                        </a>
                                    </div>

                                    <a href="#" class="name_items">
                                        Захист гальмівного барабана еще текст и еще и еще еще еще 70856CNT
                                    </a>

                                    <div class="in_stock_wr">
                                        <div class="title-sku">
                                            <span>Код: 69225/31/16</span>
                                        </div>
                                    </div>
                                    <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                                    <div class="cat-price-more cat_new_price">
                                        <div class="cat_old_price">4372.8<span class="currency"> грн.</span></div>
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
                                            <img src="/images/img/img-1.jpg" alt="">
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

                                        <div><p class="staus_sale">сКидка -25%<span></span></p></div>

                                    </div>


                                    <div class="img_items">
                                        <a href="#">
                                            <!---картинка 232x160--->
                                            <img src="/images/img/img-2.jpg" alt="">
                                        </a>
                                    </div>

                                    <a href="#" class="name_items">
                                        Захист гальмівного барабана еще текст и еще и еще еще еще 70856CNT
                                    </a>

                                    <div class="in_stock_wr">
                                        <div class="title-sku">
                                            <span>Код: 69225/31/16</span>
                                        </div>
                                    </div>
                                    <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                                    <div class="cat-price-more cat_new_price">
                                        <div class="cat_old_price">4372.8<span class="currency"> грн.</span></div>
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
                                            <img src="/images/img/img-1.jpg" alt="">
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

                                        <div><p class="staus_sale">сКидка -25%<span></span></p></div>

                                    </div>


                                    <div class="img_items">
                                        <a href="#">
                                            <!---картинка 232x160--->
                                            <img src="/images/img/img-2.jpg" alt="">
                                        </a>
                                    </div>

                                    <a href="#" class="name_items">
                                        Захист гальмівного барабана еще текст и еще и еще еще еще 70856CNT
                                    </a>

                                    <div class="in_stock_wr">
                                        <div class="title-sku">
                                            <span>Код: 69225/31/16</span>
                                        </div>
                                    </div>
                                    <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                                    <div class="cat-price-more cat_new_price">
                                        <div class="cat_old_price">4372.8<span class="currency"> грн.</span></div>
                                        <div class="cat_price">2186.4<span class="currency"> грн.</span></div>
                                        <div class="btn_buy_basket-fix"><a class="read_more_card" href="#">подробнее</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div  class="row">
                <div class="col-xs-12 col-sm-12">
                    <h3 class="title-blocks-home">Акции</h3>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <div class="row">

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
                                            <img src="/images/img/img-1.jpg" alt="">
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

                                        <div><p class="staus_sale">сКидка -25%<span></span></p></div>

                                    </div>


                                    <div class="img_items">
                                        <a href="#">
                                            <!---картинка 232x160--->
                                            <img src="/images/img/img-2.jpg" alt="">
                                        </a>
                                    </div>

                                    <a href="#" class="name_items">
                                        Захист гальмівного барабана еще текст и еще и еще еще еще 70856CNT
                                    </a>

                                    <div class="in_stock_wr">
                                        <div class="title-sku">
                                            <span>Код: 69225/31/16</span>
                                        </div>
                                    </div>
                                    <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                                    <div class="cat-price-more cat_new_price">
                                        <div class="cat_old_price">4372.8<span class="currency"> грн.</span></div>
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
                                            <img src="/images/img/img-1.jpg" alt="">
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

                                        <div><p class="staus_sale">сКидка -25%<span></span></p></div>

                                    </div>


                                    <div class="img_items">
                                        <a href="#">
                                            <!---картинка 232x160--->
                                            <img src="/images/img/img-2.jpg" alt="">
                                        </a>
                                    </div>

                                    <a href="#" class="name_items">
                                        Захист гальмівного барабана еще текст и еще и еще еще еще 70856CNT
                                    </a>

                                    <div class="in_stock_wr">
                                        <div class="title-sku">
                                            <span>Код: 69225/31/16</span>
                                        </div>
                                    </div>
                                    <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                                    <div class="cat-price-more cat_new_price">
                                        <div class="cat_old_price">4372.8<span class="currency"> грн.</span></div>
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
                                            <img src="/images/img/img-1.jpg" alt="">
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

                                        <div><p class="staus_sale">сКидка -25%<span></span></p></div>

                                    </div>


                                    <div class="img_items">
                                        <a href="#">
                                            <!---картинка 232x160--->
                                            <img src="/images/img/img-2.jpg" alt="">
                                        </a>
                                    </div>

                                    <a href="#" class="name_items">
                                        Захист гальмівного барабана еще текст и еще и еще еще еще 70856CNT
                                    </a>

                                    <div class="in_stock_wr">
                                        <div class="title-sku">
                                            <span>Код: 69225/31/16</span>
                                        </div>
                                    </div>
                                    <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
                                    <div class="cat-price-more cat_new_price">
                                        <div class="cat_old_price">4372.8<span class="currency"> грн.</span></div>
                                        <div class="cat_price">2186.4<span class="currency"> грн.</span></div>
                                        <div class="btn_buy_basket-fix"><a class="read_more_card" href="#">подробнее</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

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
                                            <img src="/images/img/img-1.jpg" alt="">
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
                                            <img src="/images/img/img-1.jpg" alt="">
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
                                            <img src="/images/img/img-1.jpg" alt="">
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
                                            <img src="/images/img/img-1.jpg" alt="">
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
                                            <img src="/images/img/img-1.jpg" alt="">
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
                                            <img src="/images/img/img-1.jpg" alt="">
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

            <div class="row" style="height: 60px"></div>

        </div>
    </div>
</div>

<div class="section-box-slider-brands">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="style slider-brands">
                    <!--если нету картинки выводить /images/no-img.png-->
                    <!--<a href="#"><img src="/images/no-img.png" alt=""></a>-->
                    <div class="brands-img"><img src="/images/brands/img-brand-2.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-3.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-4.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-5.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-6.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-7.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-8.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-9.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-10.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-11.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-12.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-13.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-14.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-15.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-16.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-17.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-18.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-19.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-20.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-21.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-22.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-23.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-24.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-25.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-26.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-27.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-28.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-29.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-30.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-31.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-32.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-33.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-34.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-35.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-36.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-37.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-38.jpg" alt=""></div>
                    <div class="brands-img"><img src="/images/brands/img-brand-39.jpg" alt=""></div>
                </div>
                <div style="display: none;" class="btn-l_"></div>
                <div style="display: none;" class="btn-r_"></div>
            </div>
        </div>
    </div>
</div>