<?php

namespace common\models;


use Yii;

/**
 * This is the model class for table "search_history".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $user_remote_id
 * @property string $word
 * @property string $action
 * @property string $date
 */
class SearchHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'search_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['user_remote_id', 'word', 'action', 'date'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'user_remote_id' => 'User Remote ID',
            'word' => 'Word',
            'action' => 'Action',
            'date' => 'Date',
        ];
    }
}
