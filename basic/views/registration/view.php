<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RegistrationForm */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Registration', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-form-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo var_dump($model); 
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'username',
            'password',
            'email',
            'created_date',
        ],
    ]) ?>
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


    

</div>
