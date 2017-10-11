<?php
    
    namespace artweb\artbox\models;
    
    use artweb\artbox\ecommerce\models\Category;
    use common\models\CustomerCategoryDiscount;
    use common\models\User;
    use Yii;
    use yii\web\IdentityInterface;
    
    /**
     * This is the model class for table "customer".
     *
     * @property integer $id
     * @property string  $username
     * @property string  $password_hash
     * @property string  $surname
     * @property string  $phone
     * @property string  $gender
     * @property integer $birthday
     * @property string  $body
     * @property integer $group_id
     * @property string  $email
     * @property string  $auth_key
     * @property string  $password_reset_token
     * @property integer $status
     * @property integer $created_at
     * @property integer $updated_at
     * @property string $remote_id
     * @property integer $discount_rate
     */
    class Customer extends User implements IdentityInterface
    {

        public $password_repeat;
        public $password;
        const SCENARIO_CHANGE = 'change';


        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'customer';
        }
        
        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [
                    [
                        'username',
                        'password_hash',
                    ],
                    'required',
                ],
                [
                    [ 'password' ],
                    'safe',
                ],
                [
                    [
                        'group_id',
                        'status',
                        'created_at',
                        'updated_at',

                        'discount_rate'
                    ],
                    'integer',
                ],
                [
                    [ 'body' ],
                    'string',
                ],
                [
                    [ 'status' ],
                    'default',
                    'value' => '10',
                ],
                [
                    [
                        'birthday',
                        'username',
                        'surname',
                        'phone',
                        'email',
                        'password_reset_token',
                        'city',
                        'address',
                        'remote_id',
                    ],
                    'string',
                    'max' => 255,
                ],
                [
                    [
                        'phone',
                        'email',
                    ],
                    'unique'
                ],
                [
                    [
                        'gender',
                        'auth_key',
                    ],
                    'string',
                    'max' => 32,
                ],

                ['password', 'string', 'min' => 6,'on'=>[Customer::SCENARIO_CHANGE]],

                ['password', 'validatePasswordCompare', 'on'=>[Customer::SCENARIO_CHANGE]],

                ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=> Yii::t('app', 'message_match_password'),'on'=>[Customer::SCENARIO_CHANGE] ],



            ];
        }


        public function validatePasswordCompare($attribute, $params)
        {
            if(!empty($this->password) && empty($this->password_repeat)){
                $this->addError('password_repeat', \Yii::t('app', 'message_match_password'));
            }
        }




        /**
         * @inheritdoc
         */
        public function attributeLabels()
        {
            return [
                'id'                   => Yii::t('app', 'id'),
                'username'             => Yii::t('app', 'Ф.И.О'),
                'surname'              => Yii::t('app', 'Фамилия'),
                'phone'                => Yii::t('app', 'Мобильный телефон'),
                'gender'               => Yii::t('app', 'Пол'),
                'birthday'             => Yii::t('app', 'Дата рождения'),
                'body'                 => Yii::t('app', 'body'),
                'group_id'             => Yii::t('app', 'group_id'),
                'email'                => Yii::t('app', 'Ваш e-mail'),
                'auth_key'             => Yii::t('app', 'auth_key'),
                'password_reset_token' => Yii::t('app', 'password_reset_token'),
                'status'               => Yii::t('app', 'status'),
                'created_at'           => Yii::t('app', 'created_at'),
                'updated_at'           => Yii::t('app', 'updated_at'),
                'city'                 => Yii::t('app', 'Город'),
                'address'              => Yii::t('app', 'Адрес'),
                'password'             => Yii::t('app', 'Пароль'),
                'password_repeat'      => Yii::t('app', 'Пароль повторно'),
            ];
        }
        
        /**
         * Finds user by email
         *
         * @param string $email
         *
         * @return static|null
         */
        public static function findByEmail($email)
        {
            return static::findOne(
                [
                    'email'  => $email,
                    'status' => self::STATUS_ACTIVE,
                ]
            );
        }
    
        /**
         * Get full name
         *
         * @return string
         */
        public function getName()
        {
            return $this->username;
        }


        public function afterFind()
        {
            parent::afterFind();
            $this->birthday = !empty($this->birthday) ? date('d.m.Y',$this->birthday) : '';

        }

        public function beforeSave($insert)
        {
            if (parent::beforeSave($insert)) {

                $this->convertBirthday();


                return true;
            }
            return false;

        }

        public function sync(){
            $data = \GuzzleHttp\json_encode($this->toArray());


            $ch = curl_init('http://91.203.25.219:8083/truckpost/hs/InCounterparties');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data))
            );

            //$result = json_decode(curl_exec($ch));
            $result = curl_exec($ch);
            for ($i = 0; $i <= 31; ++$i) {
                $result = str_replace(chr($i), "", $result);
            }
            $result = str_replace(chr(127), "", $result);
            if (0 === strpos(bin2hex($result), 'efbbbf')) {
                $result = substr($result, 3);
            }
            $result = json_decode( $result );
            if(isset($result->remote_id)){
                $this->remote_id = $result->remote_id;
            }
            $this->save();
        }

        public function convertBirthday(){
            if(!empty($this->birthday)){
                $birthday = new \DateTime($this->birthday);
                $birthday->format("d.m.Y");
                $this->birthday = $birthday->getTimestamp();

            }

        }

        /**
         * Get all user who has discount on this category
         *
         * @return \yii\db\ActiveQuery
         */
        public function getCategoryDiscount()
        {
            return $this->hasMany(CustomerCategoryDiscount::className(), ['customer_id' => 'id']);
        }
        
        public function getPassword()
        {
            return false;
        }

        
    }
