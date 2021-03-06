<?php
    namespace frontend\models;
    
    use artweb\artbox\ecommerce\models\Delivery;
    use artweb\artbox\ecommerce\models\Label;
    use artweb\artbox\ecommerce\models\Order;
    use artweb\artbox\ecommerce\models\OrderLabelHistory;
    use artweb\artbox\ecommerce\models\OrderPayment;
    use artweb\artbox\ecommerce\models\OrderProduct;
    use artweb\artbox\ecommerce\models\ProductVariant;
    use artweb\artbox\models\Customer;
    use common\behaviors\DefaultLabelBehavior;
    use Yii;
    use yii\behaviors\TimestampBehavior;
    use yii\db\ActiveQuery;
    use yii\db\ActiveRecord;
    use yii\helpers\ArrayHelper;

    /**
     * Class Order
     *
     * @property int    $id
     * @property int    $user_id
     * @property string $name
     * @property string $phone
     * @property string $phone2
     * @property string $email
     * @property string $adress
     * @property string $body
     * @property double $total
     * @property string $created_at
     * @property string $updated_at
     * @property string $date_dedline
     * @property string $reserve
     * @property string $status
     * @property string $comment
     * @property string $remote_id
     * @property int    $label
     * @property int    $pay
     * @property double    $discount_total
     * @property int    $numbercard
     * @property string    $delivery
     * @property string $declaration
     * @property string $stock
     * @property string $consignment
     * @property string $payment
     * @property string $insurance
     * @property double $amount_imposed
     * @property string $shipping_by
     * @property string $city
     * @property float  $credit_sum
     * @property int    $credit_month
     * @property Label  $labelModel
     */
    class OrderFrontend extends ActiveRecord
    {
        
        const SCENARIO_QUICK = 'quick';
        const SCENARIO_FAST = 'fast';
        const SCENARIO_CUSTOMER = 'customer';
        const SCENARIO_GUEST = 'guest';
        const SCENARIO_INFO = 'info';
        
        //        public $subscribe;
        
        //        public $notRegister;
        
        public $confirm;
        public $variant_id;
        
        public static function tableName()
        {
            return 'order';
        }

    
        public function scenarios()
        {
            $scenarios = array_merge(
                parent::scenarios(),
                [
                    self::SCENARIO_FAST => [
                        'variant_id',
                        'name',
                        'phone',
                    ],
                    self::SCENARIO_QUICK    => [ 'phone' ],
                    self::SCENARIO_CUSTOMER => [
                        'phone',
                        'email',
                        'adress',
                        'comment',
                        'city',
                        'delivery',
                        'payment',
                        'confirm',
                        'credit_sum',
                        'credit_month',
                    ],
                    self::SCENARIO_GUEST    => [
                        'name',
                        //                        'subscribe',
                        //                        'notRegister',
                        'phone',
                        'email',
                        'adress',
                        'comment',
                        'city',
                        'delivery',
                        'payment',
                        'confirm',
                        'credit_sum',
                        'credit_month',
                    ],
                    self::SCENARIO_INFO     => [
                        'id',
                    ],
                ]
            );
            return $scenarios;
        }
        
        public function behaviors()
        {
            return [
                [
                    'class'              => TimestampBehavior::className(),
                    'createdAtAttribute' => 'created_at',
                    'updatedAtAttribute' => false,
                ]
            ];
        }
        
        public function rules()
        {
            return [
                [
                    [
                        'id',
                    ],
                    'integer',
                ],
                [
                    [
                        'vaiant_id',
                    ],
                    'integer',
                    'on' => self::SCENARIO_FAST,
                ],
                [
                    [
                        'id',
                    ],
                    'required',
                ],
                [
                    [
                        'delivery',
                        'payment',
                    ],
                    'required',
                    'enableClientValidation' => false,
                ],
                [
                    [
                        'name',
                        'phone',
                        'email'
                    ],
                    'required',
                ],
                [
                    [
                        'variant_id',
                    ],
                    'required',
                    'on' => self::SCENARIO_FAST,
                ],
                [
                    [
                        'variant_id',
                    ],
                    'exist',
                    'targetClass' => ProductVariant::className(),
                    'targetAttribute' => 'id',
                    'allowArray' => false,
                    'filter' => function($query) {
                        /**
                         * @var ActiveQuery $query
                         */
                        $query->andWhere(['>', 'stock', 0]);
                    }
                ],
                [
                    [
                        'phone',
                        'phone2',
                    ],
                    'match',
                    'pattern' => '/^\+38\(\d{3}\)\d{3}-\d{2}-\d{2}$/',
                ],
                [
                    [ 'email' ],
                    'email',
                ],
                [
                    [
                        'adress',
                        'email',
                        'city',
                        'name',
                        'remote_id'
                    ],
                    'string',
                    'max' => 255,
                ],
                ['discount_total', 'safe'],
                [
                    [ 'comment' ],
                    'string',
                ],
                [
                    [ 'credit_month' ],
                    'integer',
                    'min' => 3,
                    'max' => 36,
                ],
                [
                    [ 'credit_sum' ],
                    'number',
                    'min' => 0,
                ],
                [
                    [
                        'credit_month',
                        'credit_sum',
                    ],
                    'filter',
                    'filter' => function ($value) {
                        if ($this->payment == 10) {
                            return $value;
                        } else {
                            return null;
                        }
                    },
                ],
                [
                    [
                        'confirm',
                    ],
                    'in',
                    'range'      => [ 1 ],
                    'allowArray' => false,
                ],
            ];
        }
        
        public function attributeLabels()
        {
            return [
                'name'         => Yii::t('app', 'orderf1'),
                'phone'        => Yii::t('app', 'orderf2'),
                'phone2'       => Yii::t('app', 'orderf3'),
                'email'        => Yii::t('app', 'orderf4'),
                'city'         => Yii::t('app', 'orderf5'),
                'adress'       => Yii::t('app', 'orderf6'),
                'comment'      => Yii::t('app', 'orderf7'),
                //                'subscribe' => Yii::t('app', 'orderf8'),
                //                'notRegister'  => Yii::t('app', 'orderf9'),
                'confirm'      => Yii::t('app', 'orderf10'),
                'credit_month' => Yii::t('app', 'orderf11'),
                'credit_sum'   => Yii::t('app', 'orderf12'),
            ];
        }
        


        public function getUser()
        {
            return $this->hasOne(Customer::className(), [ 'id' => 'user_id' ]);
        }
        
        public function getProducts()
        {
            return $this->hasMany(OrderProduct::className(), [ 'order_id' => 'id' ]);
        }

        public function sync($analogs)
        {
            /**
             * @var $data Order
             */
            $data = Order::find()->where(['order.id'=> $this->id])->joinWith('products')->one();
            $array = ArrayHelper::toArray($data);
            $array['items'] = ArrayHelper::toArray($data->products);
            $order = json_encode($array,JSON_UNESCAPED_UNICODE);


            $ch = curl_init('http://91.203.25.219:8083/truckpost/hs/InOrders');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $order);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($order))
            );
            $result = curl_exec($ch);
            for ($i = 0; $i <= 31; ++$i) {
                $result = str_replace(chr($i), "", $result);
            }
            $result = str_replace(chr(127), "", $result);
            if (0 === strpos(bin2hex($result), 'efbbbf')) {
                $result = substr($result, 3);
            }
            $result = json_decode( $result );
            if(isset($result->id)){
                $this->remote_id = $result->id;

            }
            $this->save();
        }
        

    }
    