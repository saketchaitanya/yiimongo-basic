<?php
use yii\mongodb\Connection;

class m170704_100650_create_user_registration_collection extends \yii\mongodb\Migration
{
    public function up()
    {
    	$collection= Yii::$app->mongodb->getCollection("registrationForm");
    	$collection->batchInsert(
    		[
	    		["username"=>"testuser1",
	    		"password"=>Yii::$app->getSecurity()->generatePasswordHash("testuser1"),
	    		"subscriptions"=>['a']
	    		],
	    		["username"=>"testuser2",
	    		"password"=>Yii::$app->getSecurity()->generatePasswordHash("testuser2"),
	    		"subscriptions"=>['b']
	    		],
	    		["username"=>"testuser3",
	    		"password"=>Yii::$app->getSecurity()->generatePasswordHash("testuser3"),
	    		"subscriptions"=>['c']
	    		]
    		]
    	);
    }

    public function down()
    {
        echo "m170704_100650_create_user_registration_collection cannot be reverted.\n";
        return false;
    }
}
