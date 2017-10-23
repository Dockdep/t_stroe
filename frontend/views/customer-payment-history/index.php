<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCustomerPaymentHistory */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer Payment Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-payment-history-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer Payment History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer_id',
            'order',
            'remainder',
            'action_date',
            // 'date_of_delay',
            // 'days_of_delay',
            // 'date',
            // 'order_remainder',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
