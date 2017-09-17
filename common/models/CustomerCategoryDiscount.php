<?php

namespace common\models;

use artweb\artbox\ecommerce\models\Category;
use artweb\artbox\models\Customer;
use Yii;

/**
 * This is the model class for table "customer_category_discount".
 *
 * @property integer $id
 * @property integer $discount
 * @property integer $customer_id
 * @property integer $category_id
 *
 * @property Category $category
 * @property Customer $customer
 */
class CustomerCategoryDiscount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer_category_discount';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['discount', 'customer_id', 'category_id'], 'integer'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'discount' => 'Discount',
            'customer_id' => 'Customer ID',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }
}
