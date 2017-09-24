<?php

use artweb\artbox\models\Page;
use frontend\assets\AppAsset;
use frontend\models\LoginForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use frontend\widgets\MenuWidget;
use artweb\artbox\seo\widgets\Seo;
use yii\widgets\ActiveForm;

AppAsset::register($this);
$pages = Page::find()
    ->with('lang')
    ->indexBy('id')
    ->all();
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?php echo \Yii::$app->language; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?= Seo::widget([ 'row' => 'title' ]) ?></title>
    <?= Seo::widget([ 'row' => Seo::DESCRIPTION ]) ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
    <link type="image/x-icon" href="./favicon.ico" rel="icon">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div id="header_" class="section-box-header">
    <div class="hidden-xs section-box first_menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <ul>
                        <?php
                            foreach ($pages as $page){
                        ?>
                        <li><?= Html::a(
                                $page->lang->title,
                                [
                                    'site/page',
                                    'slug' => $page->lang->alias,
                                ]
                            ); ?></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-box section-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2" style="max-width: 141px;">
                    <div class="logo-wr style">
                        <a href="/"><img src="/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="hidden-xs col-sm-3 col-md-2 col-lg-2 slogan">
                    <div>
                        Запчасти<br>для грузовых<br>и легковых авто
                    </div>
                </div>
                <div class="col-xs-8 col-sm-5 col-md-6 col-lg-6 header-phones-wrapper" style="display: table;">
                    <div class="style header-phones">
                        <p>(067) 440-95-00<span>,</span></p>
                        <p>(067) 442-15-50</p>
                        <p class="header-city">Киев, ул. Гната Хоткевича 22в</p>
                        <p class="header-city">Бровары, ул. Лесная 2</p>

                        <span class="modal-link modal-callback hidden-xs hidden-sm" data-form="callback"><i>заказать<br />звонок</i></span>
                    </div>
                </div>

                <div class="hidden-xs hidden-sm col-md-2 col-lg-2 header-last-column">
                    <div class="style login-wr">
                        <?php if (Yii::$app->user->isGuest): ?>
                            <a class="modal-link login_link" data-form="login_modal" rel="nofollow">
                                <div></div>
                                <span class="">Личный кабинет</span>
                            </a>

                        <?php else: ?>
                            <?= Html::a(
                                Html::img(
                                    "/images/ico-all/icologin.png",
                                    [
                                        'width'  => '14',
                                        "height" => "16",
                                        "title"  => \Yii::t("app", "lcab"),

                                    ]
                                ) . "<span>" . Yii::$app->user->identity->email . "</span>",
                                Url::to([ "cabinet/main" ]),
                                [
                                    "class" => "is_logged",
                                ]
                            ); ?>
                        <?php endif; ?>

                    </div>
                    <div class="basket-wrapper">
                        <?php
                            echo $this->render('@frontend/views/basket/cart', [ 'count' => 0, ]);
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="section-box-menu">
        <div class="container">
            <div class="row">
                <div class="hidden-xs hidden-sm col-md-3 catalog-link">
                    <!--если страница не главная добавить для span класс "arrow-catalog" -->
                    <span class="<?php echo isset( $this->params[ 'isHome' ] ) ? '' : 'arrow-catalog' ?>" >Каталог<i></i><i></i></span>
                </div>
                <div class="hidden-xs hidden-sm col-md-9 search-menu">
                    <form action="/search/main" method="get">
                        <div class="search_input_wr style">
                            <input value="" name="word" type="text">
                        </div>

                        <input type="hidden"  value="0" name="action">

                        <button type="submit" value=""></button>
                        <div class="search-list">
                            <span>по номеру товара</span>
                            <ul class="search-ul">
                                <li><i>по номеру товара</i></li>
                                <li><i>по бренду</i></li>
                                <li><i>по названию товара</i></li>
                            </ul>
                        </div>
                    </form>
                </div>

                <div style="display: none;" class="visible-xs visible-sm col-xs-12">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="menu_mob">
                                <div></div>
                                <div></div>
                            </div>
                            <div id="menu-mob-hidden">
                                <div class="style close-menu-mob">
                                    Меню
                                    <div class="close_mob"></div>
                                </div>
                                <?php echo MenuWidget::widget(['type'=>'mobile']); ?>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <div class="style btn-menu-mob">
                                <a class="basket-btn-menu-mob" href="#"><span></span></a>
                                <a class="login-btn-menu-mob modal-link" href="#" data-form="login_modal" rel="nofollow"><span></span></a>
                                <a class="search-btn-menu-mob" href="#"><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="content_" class="section-box-content">

    <?php echo $content; ?>

</div>
<div id="footer_" class="section-box-footer">
    <div class="section-box-footer-menu-wr">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="style phones-footer">
                        <p>(067) 440-95-00</p>
                        <p>(067) 442-15-50</p>
                    </div>
                    <div class="style menu-footer">
                        <ul>
                            <li><a href="#">Продукция и бренды</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Оплата и доставка</a></li>
                            <li><a href="#">Новости</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="hidden-xs col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <span class="footer-magaz-title-wrapp">Магазины:</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="style footer-magaz-title-">Киев, ул. Гната  Хоткевича 22в</div>
                            <div class="style  footer-magaz-phones">
                                <p>(067)442-15-50 Николай</p>
                                <p>(067)506-25-22 Игорь</p>
                                <p>(067)402-19-55 Александр</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="style footer-magaz-title-">Бровары, ул. Лесная 2</div>
                            <div class="style  footer-magaz-phones">
                                <p>(067)445-78-12 Виталий</p>
                                <p>(067)322-27-71 Сергей</p>
                                <p>(067)440-74-84 Орест</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
                    <div class="style seti-wrapper">
                        <p class="title_seti">Мы в соцсетях</p>
                        <p class="join-seti">Присоединяйтесь к нам в соц. сетях.</p>
                        <div class="style">
                            <a target="_blank" class="seti-link fb" href=""></a>
                            <a target="_blank" class="seti-link you" href=""></a>
                            <a target="_blank" class="seti-link gpluse" href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-box-copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="style copyright-txt">© 2017 «truckpost.com.ua» - интернет магазин запчастей для грузовых и легковых авто </div>
                </div>

            </div>
        </div>
    </div>
    <div style="display: none" class="btn_up"></div>
    <div style="display: none" class="btn_call">
        <div></div>
    </div>
</div>
<div class="call-mobile-wr" style="display: none;">
    <!--<div class="button-call-mob">-->
    <!--<div class="callback-footer modal-link" data-form="callback"><span></span>Обратный звонок</div>-->
    <!--</div>-->
    <div class="call-mobile">
        <div class="button-call-mob">
            <a class="button-call_" href="tel:044 303-90-10">
                <p>Позвонить</p>
                <div><span></span></div>
                <span>044 339-92-33</span>
            </a>
        </div>

        <div class="button-call-mob">
            <a class="button-call_" href="tel:067 440-95-00">
                <p>Позвонить</p>
                <div><span></span></div>
                <span>(067) 440-95-00</span>
            </a>
        </div>
        <!--new_phone-->
        <div class="button-call-mob">
            <a class="button-call_" href="tel:067 442-15-50">
                <p>Позвонить</p>
                <div><span></span></div>
                <span>(067) 442-15-50</span>
            </a>
        </div>
        <div class="button-call-mob"><a class="call-sms" href="sms:067 440-95-00">Отправить SMS</a>
        </div>
        <div class="button-call-mob">
            <a class="call-contact" href="contacts/truckpost.vcf">Добавить в контакты</a>        </div>
    </div>
</div>

<div id="overlay" style="display: none;"></div>
<div id="callback" class="forms_" style="display: none;">
    <span id="modal_close"></span>
    <div class="style form-title">Обратный звонок</div>
    <form action="">
        <div class="input-wr">
            <label for="inp-11">Имя</label>
            <input id="inp-11" type="text">
        </div>
        <div class="input-wr phones_mask">
            <label for="inp-22">Телефон</label>
            <input id="inp-22" type="text" placeholder="+38(000)000-00-00">
        </div>
        <div class="input-wr">
            <label for="inp-33">Сообщение</label>
            <textarea id="inp-33" name="" cols="30" rows="10"></textarea>
        </div>
        <div class="button-wr">
            <button type="submit">отправить</button>
        </div>
    </form>
</div>
<div id="success_form" style="display: none;">
    <span id="modal_close"></span>
    <div class="txt-success"><span>Спасибо за Ваш запрос!</span><p>Мы свяжемся с вами в ближайшее время.</p></div>
</div>

<div id="basket_modal" class="basket_modal" style="display: none;">

</div>

<?= $this->render('../partial/login_form', [ 'model' => new LoginForm(), ]) ?>

<?php $this->endBody(); ?>
<?php
$js = ' $(document).ready(function () {
        //первый слайдер
        $(".slider-first").owlCarousel({
            responsiveClass: true,
            navSpeed:150,
            dots:true,
            nav:false,
            items:1
        })


        //товары
        var owlArticles = $(".slider-news");
        owlArticles.owlCarousel({
//            loop:true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1
                },

                370: {
                    items: 1,
                    slideBy: 1
                },
                570: {
                    items: 2,
                    slideBy: 1
                },


                768: {
                    items: 3,
                    slideBy: 1
                }
            },
//            navSpeed:150,
            smartSpeed:150,
            nav:false,
            dots:false,
            onInitialized: function(){
                owlArticles.next().addClass(\'vis_ lock\');
                owlArticles.next().next().addClass(\'vis_\');
            }
        })

        $(".btn-r_ ").click(function(){
            if(!($(this).hasClass(\'lock\'))){
                $(this).parent().find(owlArticles).trigger(\'next.owl.carousel\');

            }

        })

        $(".btn-l_ ").click(function() {
            if(!($(this).hasClass(\'lock\'))){
                $(this).parent().find(owlArticles).trigger(\'prev.owl.carousel\');
            }
        })
        owlArticles.on(\'changed.owl.carousel\', function(event) {

            var index = event.item.index;
            var count = event.item.count;
            var size = event.page.size;
            if(index==(count-size)){
                $(this).parent().find(".btn-r_ ").addClass(\'lock\')

            } else {
                $(this).parent().find(".btn-r_ ").removeClass(\'lock\')
            }
            if (index==0){
                $(this).parent().find(".btn-l_ ").addClass(\'lock\')
            } else  {
                $(this).parent().find(".btn-l_ ").removeClass(\'lock\')

            }
        })

    })';

$this->registerJs($js, View::POS_READY);
?>

<?php

$livechat = "(function(){ var widget_id = '01bvplgFpa';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();";

//$this->registerJs(
//    $livechat ,
//    View::POS_END
//);

?>
<?php
if(isset( $this->params[ 'isHome' ] )){

}
?>


</body>
</html>
<?php $this->endPage(); ?>