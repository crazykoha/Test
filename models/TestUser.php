<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_user".
 *
 * @property int $id
 * @property string $first_name
 * @property string $second_name
 * @property string $email
 */
class TestUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'second_name', 'email'], 'required'],
            [['first_name', 'second_name', 'email'], 'string', 'max' => 255],
            [['email'], 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'second_name' => 'Second Name',
            'email' => 'Email',
        ];
    }
}
