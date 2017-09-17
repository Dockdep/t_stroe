<?php
/**
 * @var $model  Category
 */
use artweb\artbox\components\artboximage\ArtboxImageHelper;
use artweb\artbox\ecommerce\models\Category;
use yii\bootstrap\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

?>
<div class="items_wr">
    <div class="items_">

        <div class="img_items">
            <?php if($model->children ){?>
                <?= Html::a(
                    ArtboxImageHelper::getImage(
                        $model->imageUrl,
                        'category_item',
                        [
                            'alt'   => $model->lang->title,
                            'title' => $model->lang->title,
                        ],
                        90,
                        true
                    ),
                    [
                        'category/index',
                        'slug' => $model->lang->alias,
                    ],
                    [
                        'data-pjax' => 0,
                        'title'     => $model->lang->title,
                    ]
                );
                ?>
            <?php } else {?>
                <?= Html::a(
                    ArtboxImageHelper::getImage(
                        $model->imageUrl,
                        'category_item',
                        [
                            'alt'   => $model->lang->title,
                            'title' => $model->lang->title,
                        ],
                        90,
                        true
                    ),
                    [
                        'catalog/category',
                        'category' => $model->lang->alias,
                    ],
                    [
                        'data-pjax' => 0,
                        'title'     => $model->lang->title,
                    ]
                );
                ?>
            <?php } ?>
        </div>
        <?php if($model->children ){?>
            <a  class="name_items" title="<?php echo $model->lang->title ?>" href="<?php echo Url::to(
                [
                    'category/index',
                    'slug' => $model->lang->alias,
                ]
            ); ?>">
                <?php echo $model->lang->title ?>
            </a>
        <?php } else {?>
            <a  class="name_items" title="<?php echo $model->lang->title ?>" href="<?php echo Url::to(
                [
                    'catalog/category',
                    'category' => $model->lang->alias,
                ]
            ); ?>">
                <?php echo $model->lang->title ?>
            </a>
        <?php } ?>

    </div>
</div>