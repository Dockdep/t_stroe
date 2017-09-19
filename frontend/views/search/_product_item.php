<?php
use artweb\artbox\components\artboximage\ArtboxImageHelper;
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
        <p><?= $model->lang->title ?></p>
        <span>Код: <?= $model->variant->lang->title ?></span>
    </td>
    <td><?= $model->variant->stock ?> шт.</td>
    <td class="analog-price-td">2000 грн.</td>
    <td><a class="analogs-buy modal-link" data-form="basket_modal" href="#" title="Купить"></a></td>
</tr>