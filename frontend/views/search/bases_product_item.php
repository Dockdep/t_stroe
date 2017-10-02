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

        <a class="analogs-buy modal-link btn_buy_analog_cat" data-KOD_TOVARA="<?= $model->KOD_TOVARA; ?>" data-priceId="<?= $model->ID_Prices; ?>"  data-variant="<?= $model->ArtikulBS; ?>"  data-form="basket_modal" title="Купить"></a>
    </td>
</tr>