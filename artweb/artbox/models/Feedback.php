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
    }
