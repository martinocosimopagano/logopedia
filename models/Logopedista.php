<?php

namespace app\models;

use Yii;
use Yii\db\Query;

/**
 * This is the model class for table "logopedista".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 */
class Logopedista extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'logopedista';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required'],
            [['username'], 'string', 'max' => 55],
            [['password', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }
}
