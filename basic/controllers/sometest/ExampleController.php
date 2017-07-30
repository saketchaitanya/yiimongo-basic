<?php
namespace app\controllers\sometest;
use yii\web\Controller;

//example for using $context, the third parameter of action to provide path for another view
class ExampleController extends Controller {
 public function actionIndex() { 
         $message = "index action of the ExampleController"; 
         return $this->render("example",[ 
            'message' => $message 
         ],"@app/views/"); 
   }
}