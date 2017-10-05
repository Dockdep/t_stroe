<?php
/**
 * @var $model \artweb\artbox\ecommerce\models\Product
 */
use artweb\artbox\components\artboximage\ArtboxImageHelper;
use common\models\CustomerCategoryDiscount;
use yii\helpers\Html;

if(!\Yii::$app->user->isGuest){
    $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$model->category->id,'customer_id'=>\Yii::$app->user->identity->id])->one();
    if(!$discountCategory instanceof CustomerCategoryDiscount && isset($model->parentAR))
    {
        $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$model->parentAR->id,'customer_id'=>\Yii::$app->user->identity->id])->one();
        if(!$discountCategory instanceof CustomerCategoryDiscount && isset($model->parentAR->parentAR)){
            $discountCategory = CustomerCategoryDiscount::find()->where(['category_id'=>$model->parentAR->parentAR->id,'customer_id'=>\Yii::$app->user->identity->id])->one();
        }

    }
} else {
    $discountCategory = null;
}
$discountData = $model->discountPrice($discountCategory);

?>
<tr>
    <td class="img-analogs">
        <!--100x100-->
        <!--если нет картинки выводить <img src="images/no-img-80.png" alt="">-->
        <?=


            ArtboxImageHelper::getImage(
                $model->imageUrl,
                'search_list',
                [
                    'alt'   => $model->lang->title,
                    'title' => $model->lang->title,
                    'class' => 'gallery-analog'
                ],
                90,
                true
            )
        ?>
    </td>
    <td class="title-analog-td">
        <p><?php
        echo Html::a(
            $model->lang->title,
            [
                'catalog/product',
                'product' => $model->lang->alias,
                'variant' => $model->enabledVariants[0]->sku,
            ],
            [
                'data-pjax' => 0,
                'title'     => $model->lang->title,
            ]
        );
            ?></p>
        <span>Код: <?= $model->variant->lang->title ?></span>
    </td>
    <td><?= $model->variant->stock ?> шт.</td>
    <?php if($discountData['price']> 0) {?>
        <td class="analog-price-td"><?= round(((100-25)/100) * $discountData['price'],2); ?></td>
    <?php }else {?>
        <td class="analog-price-td">цену и наличие уточняйте у менеджера</td>
    <?php } ?>
    <td>
        <?php if($discountData['price']> 0) {?>
            <a class="analogs-buy modal-link btn_buy_cat" data-variant="<?= $model->enabledVariant->id; ?>"  data-form="basket_modal" title="Купить"></a>
        <?php }else {?>
            <a class="analogs-buy" title="Купить"></a>
        <?php } ?>

    </td>
</tr>