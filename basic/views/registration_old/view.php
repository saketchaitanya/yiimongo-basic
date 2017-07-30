<?php

use yii\bootstrap\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationForm */

$this->title = $model->_id;
$this->params['breadcrumbs'][] = ['label' => 'Registration Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-form-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => (string)$model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => (string)$model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'username',
            'password',
            'email',
             'photos',
             'subscriptions',
        ],
    ]) ?>

</div>
