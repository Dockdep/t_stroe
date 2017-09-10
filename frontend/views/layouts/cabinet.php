<?php
use frontend\widgets\MenuWidget;
use frontend\widgets\BrandWidget;
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
    <div id="list-container" class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="/"><span>Интернет-магазин запчастей</span></a></li>
                    <li><span>ДВИГУН</span></li>
                </ul>
            </div>
        </div>

        <?= $content ?>
    </div>


<?php $this->endContent() ?>