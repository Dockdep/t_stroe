<?php
    use frontend\models\OrderFrontend;
    use yii\web\View;
    
    /**
     * @var View          $this
     * @var OrderFrontend $model
     */
?>
<h3><?php echo \Yii::t('app', 'order_success'); ?></h3>
<p>
    <?php
        echo \Yii::t(
            'app',
            'order_success2',
            [
                'order_id' => $model->id,
            ]
        );
    ?>
</p>
