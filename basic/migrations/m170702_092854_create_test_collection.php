<?php
use yii\mongodb\Connection;

class m170702_092854_create_test_collection extends \yii\mongodb\Migration
{
        
    public function up()
    {	
    	 $collection= Yii::$app->mongodb->getCollection("mongoUser");
         /*$collection->batchInsert(
                [
                    ["name" => "user1", "email" => "user1@gmail.com"],
                    ["name" => "user2", "email" => "user2@gmail.com"],
                    ["name" => "user3", "email" => "user3@gmail.com"],
                    ["name" => "user4", "email" => "user4@gmail.com"],
                    ["name" => "user5", "email" => "user5@gmail.com"],
                    ["name" => "user6", "email" => "user6@gmail.com"],
                    ["name" => "user7", "email" => "user7@gmail.com"],
                ]
          );*/

    }

    public function down()
    {
        echo "m170702_092854_create_test_collection cannot be reverted.\n";
            Yii::$app->mongodb->dropCollection("mongoUser");
        return false;
    }
}
