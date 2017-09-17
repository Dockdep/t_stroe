<?php
namespace frontend\models;

use artweb\artbox\models\Customer;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $verifyCode;
    public $password_repeat;
    public $surname;
    public $phone;
    public $city;
    public $address;
    public $remote_id;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            [['username','surname'], 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            [['email','phone','city','address'], 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => 'artweb\artbox\models\Customer', 'message' =>  Yii::t('app','message',[
                'field' => 'Email'
            ])],

            [['phone'], 'unique', 'targetClass' => 'artweb\artbox\models\Customer', 'message' =>  Yii::t('app','message',[
                'field' => 'Телефон'
            ])],
            [
                [ 'phone' ],
                'match',
                'pattern' => '/^\+38\(\d{3}\)\d{3}-\d{2}-\d{2}$/'
            ],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=> Yii::t('app', 'message_match_password') ],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['remote_id', 'integer']
        ];
    }



    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username'             => Yii::t('app', 'Имя'),
            'surname'              => Yii::t('app', 'Фамилия'),
            'phone'                => Yii::t('app', 'Ваш мобильный телефон'),
            'group_id'             => Yii::t('app', 'group_id'),
            'email'                => Yii::t('app', 'Ваш e-mail'),
            'city'                 => Yii::t('app', 'Город'),
            'address'              => Yii::t('app', 'Ваш адрес'),
            'password'             => Yii::t('app', 'Пароль'),
            'password_repeat'      => Yii::t('app', 'Пароль повторно'),
            'remote_id'            => Yii::t('app', 'remote_id'),
        ];
    }

    /**
     * Signs user up.
     *
     * @return Customer|null the saved model or null if saving fails
     */
    public function signup()
    {

        if (!$this->validate()) {
            return null;
        }
        
        $user = new Customer();
        $user->username = $this->username;
        $user->surname = $this->surname;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->city = $this->city;
        $user->address = $this->address;
        $user->remote_id = $this->remote_id;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->status = 10;
        $user->validate();
        return $user->save() ? $user : null;
    }
}
