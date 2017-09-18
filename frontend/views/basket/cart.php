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
                                            <?php echo $count; ?>
                                        </i>
                                    </span>
            </td>
            <td>
                <!--если пустая то по нулям(0грн) -->
                <div class="price-header-basket"></div>

            </td>
        </tr>
    </table>
</a>
