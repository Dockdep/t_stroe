<?php
/**
 * @var $model  Product
 */
use artweb\artbox\components\artboximage\ArtboxImageHelper;
use artweb\artbox\ecommerce\models\Product;
use yii\bootstrap\Html;
use yii\helpers\ArrayHelper;
$discountCategory = null;
$PriceData = $model->discountPrice($discountCategory);

?>
<div class="items_wr">
    <div class="items_">

        <div class="status_items-wr">
            <!--порядок вывода если несколько статусов оставить как тут-->
            <?php if($PriceData['discount'] > 0){?>
                <div><p class="staus_sale">сКидка -<?=$PriceData['discount']?>%<span></span></p></div>
            <?php } ?>
            <!----------------------------------->
        </div>


        <div class="img_items">
            <?php
            echo Html::a(
                ArtboxImageHelper::getImage(
                    $model->imageUrl,
                    'list',
                    [
                        'alt'   => $model->lang->title,
                        'title' => $model->lang->title,
                    ],
                    90,
                    true
                ),
                [
                    'catalog/product',
                    'product' => $model->lang->alias,
                    'variant' => urlencode($model->enabledVariants[0]->sku),
                ],
                [
                    'data-pjax' => 0,
                    'title'     => $model->lang->title,
                ]
            );
            ?>
        </div>

        <?php
        echo Html::a(
            yii\helpers\StringHelper::truncate($model->lang->title, 41),
            [
                'catalog/product',
                'product' => $model->lang->alias,
                'variant' => urlencode($model->enabledVariants[0]->sku),
            ],
            [
                'class'     => 'name_items',
                'data-pjax' => 0,
                'title'     => $model->lang->title,
            ]
        );
        ?>

        <div class="in_stock_wr">
            <div class="title-sku">
                <?php if($model->enabledVariants[0]->sku){?>
                    <span>Код: <?=  $model->enabledVariants[0]->sku ?></span>
                <?php } ?>
            </div>
        </div>
        <!--если есть новая цена добавить для (.cat-price-more) класс cat_new_price-->
        <div class="cat-price-more cat_new_price">
            <?php
            if($PriceData['price']>0){?>

                <?php if($PriceData['discount'] > 0){?>
                    <div class="cat_old_price"><?= round($model->enabledVariants[0]->price) ?><span class="currency"> грн.</span></div>
                <?php } ?>
                <div class="cat_price"> <?=  //$model->enabledVariants[0]->price
                    round($PriceData['price'], 2)
                    ?><span class="currency"> грн.</span></div>
            <?php    } else {?>
                цену и наличие уточняйте у менеджера
            <?php } ?>

            <div class="btn_buy_basket-fix">
                <?php
                echo Html::a(
                    "подробнее",
                    [
                        'catalog/product',
                        'product' => $model->lang->alias,
                        'variant' => urlencode($model->enabledVariants[0]->sku),
                    ],
                    [
                        'class'     => 'read_more_card',
                        'data-pjax' => 0
                    ]
                );
                ?>
            </div>
        </div>
    </div>
</div>
