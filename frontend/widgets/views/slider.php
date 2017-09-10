<?php
    /* @var $slider Slider */
    use artweb\artbox\components\artboximage\ArtboxImageHelper;
    use artweb\artbox\design\models\Slider;
    use yii\helpers\Html;
    use yii\web\View;

?>
<div class="slider-first row">
        <?php if ($slider instanceof Slider) {
            foreach ($slider->sliderImages as $image) {
                
                ?>

                <div class="col-xs-12 col-sm-12">
                    <div class="slider-first-items">
                        <?= Html::a(
                            ArtboxImageHelper::getImage($image->imageUrl, 'slider_img', [], 40),
                            $image->url,
                            [
                                'rel' => 'nofollow',
                            ]
                        ) ?>
                    </div>
                </div>
            
            <?php };
        }
        ?>
</div>
