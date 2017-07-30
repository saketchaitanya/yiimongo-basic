<?php

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registration-form-form">

    <?php $form = ActiveForm::begin(['id' => 'registration-form','layout' => 'horizontal']); ?>

    <?= $form->field($model, 'username',['enableAjaxValidation' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'email')->input('email') ?>

    <?= $form->field($model, 'photos')->fileInput(['multiple'=>'multiple'])  ?>

    <?= $form->field($model, 'subscriptions')->checkboxList(
               [  'a' => 'Item A',
                  'b' => 'Item B', 
                  'c' => 'Item C'
               ]
            ); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
