<?php
use artweb\artbox\ecommerce\models\Category;
use frontend\widgets\FilterWidget;
use artweb\artbox\seo\widgets\Seo;
use yii\bootstrap\Html;
use yii\web\View;
use yii\widgets\LinkSorter;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title = !empty( $model->lang->meta_title ) ? $model->lang->meta_title : $model->lang->title;

$this->params[ 'seo' ][ 'fields' ]['name'] = $model->lang->title;
$this->params[ 'seo' ][ 'h1' ] = !empty( $model->lang->h1 ) ? $model->lang->h1 : $model->lang->title;
$this->params[ 'seo' ][ 'title' ] = !empty( $model->lang->meta_title ) ? $model->lang->meta_title : '';
$this->params[ 'seo' ][ 'seo_text' ] = $model->lang->seo_text;
$this->params[ 'seo' ][ 'description' ] = $model->lang->meta_description;
$this->params[ 'seo' ][ 'meta' ] = $model->lang->meta_robots;
$this->params[ 'seo' ][ 'category_name' ] = $model->lang->title;
$this->params['seo']['meta'] = $model->lang->meta_robots;


if(isset($model->parentAR)){
    if(isset($model->parentAR->parentAR)){
        $this->params[ 'breadcrumbs' ][] = [
            'label' => $model->parentAR->parentAR->lang->title,
            'url'   => [

                'category/index',
                'slug' => $model->parentAR->parentAR->lang->alias,

            ],
        ];
    }
    $this->params[ 'breadcrumbs' ][] = [
        'label' => $model->parentAR->lang->title,
        'url'   => [

            'category/index',
            'slug' => $model->parentAR->lang->alias,

        ],
    ];
}


$this->params[ 'breadcrumbs' ][] = [
    'label' => Html::tag(
        'span',
        $model->lang->title,
        [
            'itemprop' => 'name',
        ]
    ),
    'template' => "<li itemscope itemprop='itemListElement' itemtype='http://schema.org/ListItem'>{link}<meta itemprop='position' content='2' /></li>\n",
];

?>
<div class="row">


    <div class="col-xs-12 col-sm-12">
        <div class=" row">
            <div class="col-xs-12 col-sm-12">
                <h3 class="title-blocks-home" style="margin-top: 20px"><?= $model->lang->title; ?></h3>
            </div>

            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <?= ListView::widget(
                        [
                            'dataProvider' => $childrenProvider,
                            'layout'       => "{items}",
                            'itemOptions'  => [
                                'class' => 'col-xs-6 col-sm-3 col-md-2 category-img',
                            ],
                            'itemView'     => '_list'
                        ]
                    ) ?>

                </div>
            </div>




        </div>

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
</div>