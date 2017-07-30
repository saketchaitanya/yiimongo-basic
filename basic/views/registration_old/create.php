<?php

use yii\bootstrap\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RegistrationForm */

$this->title = 'Create Registration Form';
$this->params['breadcrumbs'][] = ['label' => 'Registration Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-form-create">

   <!--  <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
