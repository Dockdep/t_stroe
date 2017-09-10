<?php
/**
 * @var \artweb\artbox\ecommerce\models\Brand[] $brands
 */
?>
<div class="style slider-brands">
    <?php foreach ($brands as $brand) { ?>
    <div class="brands-img"><img src="images/brands/img-brand-2.jpg" alt="<?php echo $brand->lang->title; ?>"></div>
    <?php } ?>
</div>
<div style="display: none;" class="btn-l_"></div>
<div style="display: none;" class="btn-r_"></div>