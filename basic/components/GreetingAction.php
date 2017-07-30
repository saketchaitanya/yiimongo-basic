<?php 
namespace app\components;
use yii\base\Action;
use Yii;

class GreetingAction extends Action {

	public function run()
	{
		return "Greetings. No action specified";
		//$params = array("greeting"=>"greeting from example");
		//Yii::$app->controller->renderPartial('@app/views/example/example',['greeting'=>"greeting from example"]);
		
	}
}