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
                <?= \artweb\artbox\ecommerce\widgets\specialProducts::widget(['title'=>'Новинки', 'type' => 'new'])?>
            </div>

            <div  class="row">
                <?= \artweb\artbox\ecommerce\widgets\specialProducts::widget(['title'=>'Акции', 'type' => 'promo'])?>
            </div>

            <div class="row">
                <?= \artweb\artbox\ecommerce\widgets\lastProducts::widget()?>
            </div>

            <div class="row" style="height: 60px"></div>

        </div>
    </div>
</div>
