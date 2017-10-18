<?php
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var $categories \common\models\CustomerCategoryDiscount[]
 */
?>
<div class="row cabinet-row">
    <div class="hidden-xs col-xs-12 col-sm-3 cabinet-list-wrapper">
        <ul class="cabinet-list">
            <li>
                <?= Html::a("<span>Личные данные</span>", Url::to(['cabinet/main']));?>
            </li>
            <li>
                <?= Html::a("<span>История заказов</span>", Url::to(['cabinet/my-orders']));?>
            </li>
            <li>
                <?= Html::a("<span>Платежи</span>", Url::to(['cabinet/payment']));?>
            </li>
            <li class="active">
                <?= Html::a("<span>Персональные скидки</span>", Url::to(['cabinet/discount']));?>
            </li>
            <li>
                <?= Html::a("<span>Выход</span>", Url::to(['site/logout']));?>
            </li>
        </ul>
    </div>
    <div class="col-xs-12 col-sm-9">
        <ul class="cabinet-forms-list">
            <li style="display: none;">
                <a class="cab-mob-link"><span>Личные данные</span></a>
            </li>
            <li style="display: none;">
                <a class="cab-mob-link" href="cabinet-history.html"><span>История заказов</span></a>
            </li>
            <li style="display: none;"><a class="cab-mob-link" href="cabinet-history-payment.html"><span>Платежи</span></a></li>
            <li class="active" style="display: none;">
                <a class="cab-mob-link" href="cabinet-discount.html"><span>Персональные скидки</span></a>

                <div class="style cab-discount-wrapp">
                    <?php if(!empty(\Yii::$app->user->identity->discount_rate)){?>
                        <div class="cab-disc-txt">
                            Ваша персональная скидка на все категории <?= \Yii::$app->user->identity->discount_rate ?>
                        </div>
                    <?php } ?>
                    <div class="cab-disc-txt">
                        Ваши скидки в категориях
                    </div>

                    <table cellspacing="0" border="0" cellpadding="0" class="tb-cab-history-title tb-cab-discount-title ">
                        <tr>
                            <td>Категория</td>
                            <td>Скидка</td>
                        </tr>
                    </table>

                    <table cellpadding="0" cellspacing="0" border="0" class="cab-tb-discount">
                        <?php foreach ($categories as $category){?>
                            <tr>
                                <td>
                                    <?php
                                    $children = $category->category->getChildren()->count();

                                    if($children > 0){
                                        $url   = [

                                            'category/index',
                                            'slug' => $category->category->lang->alias,

                                        ];
                                    } else {
                                        $url   = [
                                            'catalog/category',
                                            'category' => $category->category->lang->alias,
                                        ];
                                    }


                                    ?>
                                    <?=
                                    Html::a(
                                        $category->category->lang->title,
                                        $url
                                    )?>
                                </td>
                                <td>-<?= $category->discount ?>%</td>
                            </tr>
                        <?php }?>
                    </table>
                </div>
            </li>
            <li style="display: none;"><a class="cab-mob-link exit-cab" href="#"><span>Выход</span></a></li>
        </ul>
    </div>
</div>