<tr>
    <td class="img-analogs">
        <img src="/images/no-img-80.png" alt="">
    </td>
    <td class="title-analog-td">
        <p><?= $model->GADES; ?></p>
        <span>Код: <?= $model->KOD_TOVARA ?></span>
    </td>
    <td><?= $model->amount ?> шт.</td>
    <?php if($model->price > 0) {?>
    <td class="analog-price-td"><?= round(((100-25)/100) * $model->price,2); ?></td>
    <?php }else {?>
    <td class="analog-price-td">цену и наличие уточняйте у менеджера</td>
    <?php } ?>

    <td>
        <?php if($discountData['price']> 0) {?>
            <a class="analogs-buy modal-link btn_buy_analog_cat" data-discount="25" data-price="<?= round( $model->price,2); ?>" data-discount_price="<?= round(((100-25)/100) * $model->price,2); ?>" data-name="<?= $model->GADES; ?>"  data-productcode="<?= $model->KOD_TOVARA; ?>" data-priceid="<?= $model->ID_Prices; ?>"  data-variant="<?= !empty($model->KOD_TOVARA) ?$model->KOD_TOVARA: $model->ID_Prices?>"  data-form="basket_modal" title="Купить"></a>
        <?php }else {?>
            <a class="analogs-buy" title="Купить"></a>
        <?php } ?>

    </td>
</tr>
