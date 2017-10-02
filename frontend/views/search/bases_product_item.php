<tr>
    <td class="img-analogs">
        <img src="/images/no-img-80.png" alt="">
    </td>
    <td class="title-analog-td">
        <p><?= $model->GADES; ?></p>
        <span>Код: <?= $model->KOD_TOVARA ?></span>
    </td>
    <td></td>
    <td class="analog-price-td">цену и наличие уточняйте у менеджера</td>
    <td>

        <a class="analogs-buy modal-link btn_buy_analog_cat" data-productcode="<?= $model->KOD_TOVARA; ?>" data-priceid="<?= $model->ID_Prices; ?>"  data-variant="<?= !empty($model->KOD_TOVARA) ?$model->KOD_TOVARA: $model->ID_Prices?>"  data-form="basket_modal" title="Купить"></a>
    </td>
</tr>