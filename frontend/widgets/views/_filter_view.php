<?php

use artweb\artbox\ecommerce\helpers\FilterHelper;
use yii\data\ArrayDataProvider;
use yii\helpers\Url;
?>
<form action="">
    <?php foreach($groups as $group_name => $group) {?>
        <?php
        $active = false;
        foreach($group as $option) {



            if( isset($filter[$option['group_alias']]) && in_array($option['option_alias'], $filter[$option['group_alias']])){
                $active = true;
            }



        }
        ?>
        <div class="col-sm-12 col-md-12 col-lg-12 input-blocks-wrapper">
            <div class="input-blocks">

                <label for="_"><?= $group_name?></label>


                <?php foreach($group as $option){

                    $checked = (isset($filter[$option['group_alias']]) && in_array($option['option_alias'], $filter[$option['group_alias']]));

                    $option_url = Url::to(['catalog/category', 'category' => $category, 'filters' => FilterHelper::getFilterForOption($filter, $option['group_alias'], $option['option_alias'], $checked)]);
                    ?>
                    <div class="sidebar_checks" data-checked="<?= $checked ? ' true' : 'false'?>">
                        <input <?= isset($option['count']) && $option['count'] == 0 ? 'disabled' : ''  ?>  id="<?= $option['tax_option_id']?>"  class="custom-check" type="checkbox" <?= $checked ? ' checked' : ''?>  value="1">
                        <label class="features-option" for="<?= $option['tax_option_id']?>">
                            <a  class="filter-link"  href="<?= $option_url?>">
                                <?= $option['value']?>
                            </a>
                        </label>
                    </div>
                <?php } ?>


                <div class="filter-status" style="display: none"></div>
            </div>
        </div>
    <?php } ?>
</form>
