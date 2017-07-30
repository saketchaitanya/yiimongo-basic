<?php

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registration-form-form">

    <?php 
    	$form = ActiveForm::begin(
        [
          'id'=>'registration-form',
          'layout'=>'horizontal', 
          'enableAjaxValidation' => true
        ]
          ); 
      
    	echo $form->field($model, 'username',['enableAjaxValidation'=>true]);
		  echo $form->field($model, 'password')->passwordInput();
		  echo $form->field($model, 'email',['enableAjaxValidation'=>true])->input('email');
    	echo $form->field($model, 'photos')->fileInput(['multiple'=>'multiple']); 
    	echo $form->field($model, 'subscriptions')->checkboxList
    		(
               [  'a' => 'Item A',
                  'b' => 'Item B', 
                  'c' => 'Item C'
               ]
            ); 
        echo  Html::activeHiddenInput($model, 'created_date');
        $model->password = Yii::$app->getSecurity()->generatePasswordHash($model->password); 
    //	echo  Html::activeHiddenInput($model, 'created_date',['id'=>'created_date','value'=> Yii::$app->formatter->asDate('now', 'php:d/m/Y H:i:s')]);
    ?>
    <div class="form-group" align="center">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
