<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "mongoUser".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $id
 * @property mixed $name
 * @property mixed $email
 */
class MongoUser extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['yiiBasic', 'mongoUser'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',            
            'name',
            'email',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'name', 'email'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
        ];
    }
}
