<?php

namespace common\models;

use artweb\artbox\models\Customer;
use Yii;

/**
 * This is the model class for table "customer_payment_history".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property double $coming
 * @property double $consumption
 * @property integer $date
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
            [['customer_id', 'date'], 'integer'],
            [['coming', 'consumption'], 'number'],
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
            'coming' => 'Coming',
            'consumption' => 'Consumption',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }
}
