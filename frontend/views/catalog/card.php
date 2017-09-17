<?php
/**
 * @var Product           $product
 * @var View       $this
 * @var Category   $category
 */
use artweb\artbox\components\artboximage\ArtboxImageHelper;
use artweb\artbox\ecommerce\models\Category;
use artweb\artbox\ecommerce\models\Product;
use yii\helpers\Html;
use yii\web\View;

$this->title = $product->lang->title;

$this->params[ 'seo' ][ 'fields' ][ 'name' ] =  $product->lang->title;
$this->params[ 'seo' ][ 'title' ] = $product->lang->meta_title;
$this->params[ 'seo' ][  'h1' ] =  $product->lang->title;


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

$this->registerCssFile(Yii::getAlias('@web/css/photoswipe.css'));
$this->registerCssFile(Yii::getAlias('@web/css/default-skin.css'));
$this->registerJsFile(
    Yii::getAlias('@web/js/photoswipe.min.js'),
    [
        'position' => View::POS_END,
        'depends'  => [ 'yii\web\JqueryAsset' ],
    ]
);

$this->registerJsFile(
    Yii::getAlias('@web/js/photoswipe-ui-default.min.js'),
    [
        'position' => View::POS_END,
        'depends'  => [ 'yii\web\JqueryAsset' ],
    ]
);

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
                            <a style="display: none;" href="<?= $product->imageUrl ?>" itemprop="contentUrl"
                               data-size="1920x1080">
                                <!--420x350-->
                                <?=
                                    ArtboxImageHelper::getImage(
                                        $product->imageUrl,
                                        'product',
                                        [
                                            'alt'   => $product->lang->title,
                                            'title' => $product->lang->title,
                                            'itemprop' =>'thumbnail',

                                        ],
                                        90,
                                        true
                                    )
                                ?>
                            </a>

                        </figure>

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
                    <div class="cat_price item_price"><?= round(\frontend\widgets\PriceWidget::widget([
                            'price' => $product->enabledVariants[0]->price,
                            'discount' => $product->discount_rate,
                            'category' => $product->category,
                            'discountCategory' =>$discountCategory
                        ]), 2)
                        ?><span
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
                        <a class="modal-link item_add btn_buy_cat" data-variant="<?= $product->enabledVariant->id; ?>"  data-form="basket_modal" href="javascript:;"><span>Купить</span></a>
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

</div>

<!-----------------gallery------------------>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
     It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
        PhotoSwipe keeps only 3 of them in the DOM to save memory.
        Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<?php



$js = <<< JS
(function($) {
            var indexMinimg = 0;

            var pswp = $('.pswp')[0];
            var image = [];

            $('.my-gallery').each(function() {
                var pic = $(this),
                    getItems = function() {
                        var items = [];
                        pic.find('a').each(function() {
                            var href = $(this).attr('href'),
                                size = $(this).data('size').split('x'),
                                width = size[0],
                                height = size[1];

                            if (!($(this).data('type') == 'video')) {
                                var item = {
                                    src: href,
                                    w: width,
                                    h: height
                                }
                            } else {
                                item = {
                                    html: '<div class=\"wrapper\">' + $(this).data('video') + '</div>'
                                };

                            }



                            items.push(item);
                        });
                        return items;
                    }

                var items = getItems();

                $.each(items, function(index, value) {
                    image[index] = new Image();
                    image[index].src = value['src'];
                });

                pic.on('click', 'figure', function(event) {
                    event.preventDefault();
                    var options = {
                        index: indexMinimg,
                        bgOpacity: 0.7,
                        showHideOpacity: true
                    }

                    var lightBox = new PhotoSwipe(pswp, PhotoSwipeUI_Default, items, options);
                    lightBox.init();
                });
            });

            $('body').on('click', '.gallery_min .row div', function(event) {
                event.preventDefault();
                indexMinimg = $(this).index();

                var showImg = $('.my-gallery figure a');
                showImg.css({
                    display: 'none'
                });
                $(showImg[indexMinimg]).animate({
                    opacity: 'toggle'
                }, {
                    duration: 400,
                    start: function() {
                        $(this).css('display', 'table-cell');
                    }
                });
                $('.help_class').removeClass('help_class')
            })


        })(jQuery);
JS;
$this->registerJs(
    $js,
    View::POS_READY
);
?>