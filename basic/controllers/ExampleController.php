<?php
namespace app\controllers;
use yii\web\Controller;

class ExampleController extends Controller {

	public $defaultAction =  'greeting';

 public function actions()
	{
		return[
		'greeting' => 'app\components\GreetingAction'
		];

	}

 public function actionIndex() { 
         $message = "index action of the ExampleController"; 
         return $this->render("example",[ 
            'message' => $message 
         ]); 
   }

 public function actionHelloworld()
 	{
 		return 'Helloworld';
	}

	public function actionTestParams($first, $second) {
   		return "$first $second";
	}


}