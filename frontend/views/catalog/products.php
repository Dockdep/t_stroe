<?php
use artweb\artbox\ecommerce\models\Category;
use frontend\widgets\FilterWidget;
use artweb\artbox\seo\widgets\Seo;
use yii\bootstrap\Html;
use yii\web\View;
use yii\widgets\LinkSorter;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/**
 * @var            $productProvider \yii\data\ActiveDataProvider
 * @var View       $this
 * @var Category   $category
 * @var Category[] $siblings
 */
$this->title = !empty( $category->lang->meta_title ) ? $category->lang->meta_title : $category->lang->title;

$this->params[ 'seo' ][ 'fields' ]['name'] = $category->lang->title;
$this->params[ 'seo' ][ 'h1' ] = !empty( $category->lang->h1 ) ? $category->lang->h1 : $category->lang->title;
$this->params[ 'seo' ][ 'title' ] = !empty( $category->lang->meta_title ) ? $category->lang->meta_title : '';
$this->params[ 'seo' ][ 'seo_text' ] = $category->lang->seo_text;
$this->params[ 'seo' ][ 'description' ] = $category->lang->meta_description;
$this->params[ 'seo' ][ 'meta' ] = $category->lang->meta_robots;
$this->params[ 'seo' ][ 'category_name' ] = $category->lang->title;
$this->params['seo']['meta'] = $category->lang->meta_robots;


if(isset($category->parent_id)){
    if(isset($category->parentAR->parent_id)){
        $this->params[ 'breadcrumbs' ][] = [
            'label' => $category->parentAR->parentAR->lang->title,
            'url'   => [

                'category/index',
                'slug' => $category->parentAR->parentAR->lang->alias,

            ],
        ];
    }
    $this->params[ 'breadcrumbs' ][] = [
        'label' => $category->parentAR->lang->title,
        'url'   => [

            'category/index',
            'slug' => $category->parentAR->lang->alias,

        ],
    ];
}


$this->params[ 'breadcrumbs' ][] = [
    'label' => Html::tag(
        'span',
        $category->lang->title,
        [
            'itemprop' => 'name',
        ]
    ),
    'template' => "<li itemscope itemprop='itemListElement' itemtype='http://schema.org/ListItem'>{link}<meta itemprop='position' content='2' /></li>\n",
];


?>
<div class="row">


    <div class="col-md-3 col-lg-3 mob_filters_wr">

        <div class="close_mob_filters" style="display: none"></div>



        <div class="style filters-wr">

            <?= FilterWidget::widget(
                [
                    'category'    => $category,
                    'groups'      => $groups,
                    'filter'      => $filter,
                    'priceLimits' => $priceLimits,
                    'productProvider' => $productProvider
                ]
            ) ?>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

        <div class="row">

            <div class="col-xs-12 col-sm-12 sort-cat-wr-line">
                <div class="sort-cat-wr">
                    <p>Сортировать по</p>
                    <div class="sort-cat">
                        <?php
                        $order = array_keys($productProvider->sort->attributes)[ 0 ];
                        $order_url = \Yii::$app->request->get($productProvider->sort->sortParam, $order);
                        if (strpos($order_url, '-') === 0) {
                            $order_url = substr($order_url, 1);
                        }
                        if(in_array($order_url, array_keys($productProvider->sort->attributes))) {
                            $order = $order_url;
                        }
                        echo Html::a(
                            $productProvider->sort->attributes[ $order ][ 'label' ],
                            '#',
                            [
                                'id' => 'category-sort',
                                'class'=>"category-sort"
                            ]
                        );
                        ?>
                        <?= LinkSorter::widget(
                            [
                                'sort'       => $productProvider->sort,
                                'attributes' => [
                                    'price_desc',
                                    'price_asc',
                                    'name_asc',
                                    'name_desc',
                                ],
                            ]
                        ); ?>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 cat_it_wr">
                <div class=" row">
                    <?= ListView::widget(
                        [
                            'dataProvider' => $productProvider,
                            'layout'       => "{items}  {pager}",
                            'options'      => [
                                'class' => 'list-view style catalog-wrapp-all',
                            ],
                            'itemOptions'  => [
                                'class' => 'col-xs-6 col-sm-4',
                            ],
                            'itemView'     => '_product_item',
                            'pager' => [
                                'maxButtonCount' => 5,
                            ],
                        ]
                    ) ?>

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

            </div>
        </div>
    </div>
</div>