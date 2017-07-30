<?php

use yii\bootstrap\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationForm */

$this->title = 'Update Registration Form: ' . $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Registration Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->_id, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="registration-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
