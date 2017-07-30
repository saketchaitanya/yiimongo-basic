<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationForm */

$this->title = 'Update Registration Form: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Registration', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="registration-form-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update_form', [
        'model' => $model,
    ]) ?>

</div>
