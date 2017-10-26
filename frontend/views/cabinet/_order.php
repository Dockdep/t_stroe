<?php
    
    /**
     * @var Order $model
     */
    
    use artweb\artbox\components\artboximage\ArtboxImageHelper;
    use artweb\artbox\ecommerce\helpers\ProductHelper;
    use artweb\artbox\ecommerce\models\Order;
    use yii\bootstrap\Html;
    use yii\helpers\Url;

?>

<div class="style cab-history-">
    <table cellspacing="0" border="0" cellpadding="0" class="tb-cab-history-title">
        <tr>
            <td>№<?= $model->id ?></td>
            <td><?= date('d.m.Y H:i:s',$model->created_at) ?></td>
        </tr>
    </table>

        <table cellpadding="0" cellspacing="0" border="0" class="tb-cab-history">
            <?php foreach ($model->products as $product) { ?>
                <?php if (isset($product->productVariant) && !empty($product->productVariant)){?>
                    <tr>
                        <td class="cab-history-img">
                            <a href="#">
                                <?= Html::a(
                                    ArtboxImageHelper::getImage(
                                        $product->productVariant->image->imageUrl,
                                        'category_item',
                                        [
                                            'alt'   => $product->productVariant->product->lang->title,
                                            'title' => $product->productVariant->product->lang->title,
                                        ],
                                        90,
                                        true
                                    ),
                                    [
                                        'catalog/product',
                                        'product' => $product->productVariant->product->lang->alias,
                                        'variant' => urlencode($product->productVariant->sku),
                                    ],
                                    [
                                        "width"  => "100",
                                        "height" => "100",
                                    ]
                                ); ?>
                            </a>
                        </td>
                        <td class="cab-history-name">
                            <!--название выводить или в "a" или в "<p></p>" если нету ссылки-->
                            <a href="#"><?= $product->productVariant->product->lang->title ?></a>
                            <span><?= round($product->discount_price,2) ?> грн.</span>
                        </td>
                        <td class="cab-history-num"><?= $product->count ?> шт.</td>
                        <td class="cab-history-price"><?= round(($product->count * $product->discount_price),2) ?> грн.</td>
                    </tr>
                    <?php } else {?>
                    <tr>
                        <td class="cab-history-img">

                        </td>
                        <td class="cab-history-name">
                            <!--название выводить или в "a" или в "<p></p>" если нету ссылки-->
                            <a href="#"><?= $product->remote_id ?></a>
                            <span><?= round($product->discount_price,2) ?> грн.</span>
                        </td>
                        <td class="cab-history-num"><?= $product->count ?> шт.</td>
                        <td class="cab-history-price"><?= round(($product->count * $product->discount_price),2) ?> грн.</td>
                    </tr>
                    <?php } ?>
            <?php } ?>
        </table>



    <table cellpadding="0" cellspacing="0" border="0" class="td-cab-all-price">
        <tr>
            <td align="right">
                <div class="style">Итого: <?= round($model->discount_total,2) ?> грн.</div>
            </td>
        </tr>
    </table>

</div>