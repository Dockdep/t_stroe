<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchCustomerPaymentHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-payment-history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'order') ?>

    <?= $form->field($model, 'remainder') ?>

    <?= $form->field($model, 'action_date') ?>

    <?php // echo $form->field($model, 'date_of_delay') ?>

    <?php // echo $form->field($model, 'days_of_delay') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'order_remainder') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
