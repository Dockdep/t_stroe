<tr>
    <td class="img-analogs">
        <img src="/images/no-img-80.png" alt="">
    </td>
    <td class="title-analog-td">
        <p><?= $model->GADES; ?></p>
        <span>Код: <?= $model->KOD_TOVARA ?></span>
    </td>
    <td><?= $model->amount ?> шт.</td>
    <td class="analog-price-td"><?= round(((100-25)/100) * $model->price,2); ?></td>
    <td>

        <a class="analogs-buy modal-link btn_buy_analog_cat" data-discount="25" data-price="<?= round(((100-25)/100) * $model->price,2); ?>" data-name="<?= $model->GADES; ?>"  data-productcode="<?= $model->KOD_TOVARA; ?>" data-priceid="<?= $model->ID_Prices; ?>"  data-variant="<?= !empty($model->KOD_TOVARA) ?$model->KOD_TOVARA: $model->ID_Prices?>"  data-form="basket_modal" title="Купить"></a>
    </td>
</tr>
