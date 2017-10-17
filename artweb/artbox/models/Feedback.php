<?php
    
    namespace artweb\artbox\models;
    
    use Yii;
    use yii\behaviors\AttributeBehavior;
    use yii\behaviors\TimestampBehavior;
    use yii\db\ActiveRecord;
    
    /**
     * This is the model class for table "feedback".
     *
     * @property integer $id
     * @property string  $name
     * @property string  $phone
     * @property string $comment
     * @property integer $created_at
     * @property string  $ip
     */
    class Feedback extends ActiveRecord
    {
        
        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'feedback';
        }

        /**
         * @inheritdoc
         */
        public function behaviors()
        {
            return [
                [
                    'class'              => TimestampBehavior::className(),
                    'updatedAtAttribute' => false,
                ],
                [
                    'class'      => AttributeBehavior::className(),
                    'attributes' => [
                        ActiveRecord::EVENT_BEFORE_INSERT => 'ip',
                    ],
                    'value'      => function ($event) {
                        return \Yii::$app->request->userIP;
                    },
                ],
            ];
        }
        
        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [
                    [
                        'phone',
                        'name',
                    ],
                    'required',
                ],
                [
                    [
                        'name',
                        'phone',
                    ],
                    'string',
                    'max' => 255,
                ],
                ['comment', 'safe']
            ];
        }
        
        /**
         * @inheritdoc
         */
        public function attributeLabels()
        {
            return [
                'id'         => Yii::t('app', 'id'),
                'name'       => Yii::t('app', 'Имя'),
                'phone'      => Yii::t('app', 'Телефон'),
                'comment'      => Yii::t('app', 'Сообщение'),
                'created_at' => Yii::t('app', 'created_at'),
                'ip'         => Yii::t('app', 'ip'),
            ];
        }

        public function sync()
        {
            print_r($this);
            die();

            $order = json_encode($this,JSON_UNESCAPED_UNICODE);

            print_r($order);
            die();
            $ch = curl_init('http://91.203.25.219:8083/truckpost/hs/incomingcall');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $order);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($order))
            );
            $result = curl_exec($ch);

        }
    }
