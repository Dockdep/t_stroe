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
    <div id="list-container" class="container">
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
    </div>


<?php $this->endContent() ?>