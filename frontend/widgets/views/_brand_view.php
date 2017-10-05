<?php
use artweb\artbox\components\artboximage\ArtboxImageHelper;
/**
 * @var \artweb\artbox\ecommerce\models\Brand[] $brands
 */
?>
<div class="style slider-brands">
    <?php foreach ($brands as $brand) { ?>
    <div class="brands-img">
        <?=
        ArtboxImageHelper::getImage(
            $brand->imageUrl,
            'brand_list',
            [
                'alt'   => $brand->lang->title,
                'title' => $brand->lang->title,
            ],
            90,
            true
        )
        ?>
    </div>
    <?php } ?>
</div>
<div style="display: none;" class="btn-l_"></div>
<div style="display: none;" class="btn-r_"></div>