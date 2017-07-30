<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MongoUser */

$this->title = 'Update Mongo User: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mongo Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mongo-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
