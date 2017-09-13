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


if(isset($category->parentAR)){
    if(isset($category->parentAR->parentAR)){
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
$this->registerJsFile(
    Yii::getAlias('@web/js/filter.js'),
    [
        'position' => View::POS_END,
        'depends'  => [ 'yii\web\JqueryAsset' ],
    ]
);

?>
<?php
    Pjax::begin(
        [
            'timeout' => 20000,
            'id'      => 'list-container',
            'scrollTo' => false
        ]
    )
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



            </div>
        </div>
    </div>
</div>
<?php Pjax::end() ?>