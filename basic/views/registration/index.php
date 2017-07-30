<?php

use yii\bootstrap\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RegistrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-form-index">
    <h1><?= Html::encode($this->title) ?></h1>
<div class='row'>
    <div class="col-xs-9 col-sm-10">
        
        <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <div class="col-xs-9 col-sm-6">
        <?= Html::a('Create Registration Form', ['create'], ['class' => 'btn btn-success']) ?>
    </div>
</div>
    
<?php Pjax::begin(); ?>
  <?= Html::beginTag('div',['class'=>'table-responsive']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class'=>'yii\grid\SerialColumn'],
           // '_id',
            'username',
            'email',
            [
                'class'=> 'yii\grid\DataColumn',
                'label'=> 'Subscription',
                'value'=> function ($data)
                    {
                        $arr = $data->subscriptions;
                        $str=$arr[0];
                        for ($i=1; $i<count($arr); $i++)
                        {
                            $str=$str.", ".$arr[$i];
                        }
                        return $str;
                    }
            ],
            'created_date',
            'type',
            'active:boolean',

            [
                'class' => 'yii\grid\CheckboxColumn',
                'name'=>'active'

            ],
            [

                'class' => 'yii\grid\ActionColumn',
                'template'=> '{view}{update}{delete}'
                /*'buttons'=>['view' => function ($url, $model, $key) {
                                    return Html::a('<span class="glyphicon glyphicon-eye-open">View</span>', $url, [
                                            'title' => Yii::t('yii', 'View'),
                                    ]);
                            },
                            'update'=>function ($url, $model, $key) {
                                    return Html::a('<span class="glyphicon glyphicon-pencil">Update</span>', $url, [
                                            'title' => Yii::t('yii', 'Update'),
                                    ]);
                            },
                            'delete'=>function ($url, $model, $key) {
                                    return Html::a('<span class="glyphicon glyphicon-trash">Delete</span>', $url, [
                                            'title' => Yii::t('yii', 'Delete'),
                                            'data-confirm' => Yii::t('yii', 'Are you sure to delete this item?'),
                                            'data-method' => 'post',
                                    ]);
                            }
                            ]*/
                    
            ]

        ],
    ]); ?>
     <?= Html::endTag('div') ?>
<?php Pjax::end(); ?></div>
<p>
        
    </p>