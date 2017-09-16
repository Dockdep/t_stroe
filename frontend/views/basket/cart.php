<?php
    use yii\helpers\Url;
    use yii\web\View;
    
    /**
     * @var View  $this
     * @var int   $count
     */
?>
<a href="<?php echo Url::to(['order/basket']); ?>" class="header-basket-wr">
    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
                                    <span class="header-basket-ico">
                                        <i class="proucts-num-header-basket">
                                            <span class="simpleCart_quantity"><?php echo $count; ?></span>
                                        </i>
                                    </span>
            </td>
            <td>
                <!--если пустая то по нулям(0грн) -->
                <div class="price-header-basket"><span id="simpleCart_grandTotal" class="simpleCart_grandTotal"></span></div>

            </td>
        </tr>
    </table>
</a>