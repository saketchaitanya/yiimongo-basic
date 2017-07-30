<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MongoUser */

$this->title = 'Create Mongo User';
$this->params['breadcrumbs'][] = ['label' => 'Mongo Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mongo-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
