<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "registrationForm".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $username
 * @property mixed $password
 * @property mixed $email
 * @property mixed $photos
 * @property mixed $subscriptions
 * @property string $created_date
 */
class RegistrationForm extends \yii\mongodb\ActiveRecord
{
   
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['yiiBasic', 'registrationForm'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'username',
            'password',
            'email',
            'photos',
            'subscriptions',
            'created_date',
            'type',
            'active'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ //these values will automatically be created by massive assignment
                ['username', 'password', 'email', 'subscriptions','created_date','type','active'], 'safe'
            ],
            ['email','email'],
            [['username','password','email'],'required'],
            ['username','unique', 'targetAttribute'=>'username', 'message'=>'Username already exists'],
            ['email','unique', 'targetAttribute'=>'email', 'message'=>'Email already exists']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'photos' => 'Photos',
            'subscriptions' => 'Subscriptions',
            'created_date'=> 'Created Date'
        ];
    }

    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
        

    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
         $this->setPassword($this->password);
         $this->created_date =Yii::$app->formatter->asDatetime(date('d-M-Y h:i:s'));
        return true;
        }
        
       return false;
    }

}
