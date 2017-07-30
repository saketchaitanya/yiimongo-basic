<?php

use yii\bootstrap\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RegistrationForm */

$this->title = 'Register';
$this->params['breadcrumbs'][] = ['label' => 'Registration', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-form-create">
<div align="center">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
