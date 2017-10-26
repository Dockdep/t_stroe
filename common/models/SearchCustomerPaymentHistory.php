<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CustomerPaymentHistory;

/**
 * SearchCustomerPaymentHistory represents the model behind the search form about `app\models\CustomerPaymentHistory`.
 */
class SearchCustomerPaymentHistory extends CustomerPaymentHistory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'order_id', 'action_date', 'date_of_delay', 'days_of_delay', 'date'], 'integer'],
            [['shipment', 'payment', 'order_remainder','amount'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CustomerPaymentHistory::find()->where(['customer_id' => Yii::$app->user->identity->id ]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'order_id' =>  $this->order_id,
            'payment' =>  $this->payment,
            'shipment' =>  $this->shipment,
            'action_date' =>  $this->action_date,
            'date_of_delay' =>  $this->date_of_delay,
            'days_of_delay' => $this->days_of_delay,
            'date' =>  $this->date,
            'order_remainder' =>  $this->order_remainder,
            'amount' =>  $this->amount,
        ])->orderBy(['date'=>SORT_ASC, 'id'=>SORT_DESC]);

        return $dataProvider;
    }
}
