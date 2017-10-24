<?php

namespace common\models;

use artweb\artbox\ecommerce\models\Order;
use artweb\artbox\models\Customer;
use Yii;

/**
 * This is the model class for table "customer_payment_history".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property integer $order_id
 * @property double $remainder
 * @property integer $action_date
 * @property integer $date_of_delay
 * @property integer $days_of_delay
 * @property integer $date
 * @property double $order_remainder
 *
 * @property Customer $customer
 */
class CustomerPaymentHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer_payment_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'order_id', 'action_date', 'date_of_delay', 'days_of_delay', 'date'], 'integer'],
            [['remainder', 'order_remainder'], 'number'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'order_id' => 'Order ID',
            'remainder' => 'Remainder',
            'action_date' => 'Action Date',
            'date_of_delay' => 'Date Of Delay',
            'days_of_delay' => 'Days Of Delay',
            'date' => 'Date',
            'order_remainder' => 'Order Remainder',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }
}
