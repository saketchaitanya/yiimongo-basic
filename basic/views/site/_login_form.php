
<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\Models\User;
use yii\helpers\Url;

    if (Yii::$app->session->has('session'))
    {
        $cookies = Yii::$app->request->cookies; 
        //user has initated a session. so now logout option
        $form = ActiveForm::begin(
                [ 
                    'id' => 'logout-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "<div class=\'container\'>{label}\n<div>{input}</div>\n<div>{error}</div></div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
             ]); 
            echo Html::beginTag('div');
            echo Html::encode(' You are logged in as ');
            echo Html::encode ($cookies->getValue('username')); 
            echo Html::endTag('div');
            echo Html::a(Html::submitButton('Logout', ['submit'=>'index', 'value'=>'logout', 'class' => 'btn btn-primary', 'name' => 'logout-button']), Url::to('site/logout'));
          
        ActiveForm::end();   
    }
    else
    {
        $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "<div class=\'container\'>{label}\n<div>{input}</div>\n<div>{error}</div></div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
        ]); 
        ?>
        <div class="card-block">
            <div class="widget-wrapper">
                <div class="md-form ">
                    <!-- <i class="fa fa-user prefix"></i> -->
                        <?= $form->field($model, 'username' )->textInput(['autofocus' => true,'placeholder'=>'Username'])->label(false) ?>
                </div>          
                <div class="md-form ">
                       <!--  <i class="fa fa-envelope prefix"></i> -->
                            <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false)  ?>
                </div> 
                <div class="md-form ">                   
                        <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => 
                        "<div class=\"row\"><div class=\"col-lg-offset-1 col-lg-9\">{input}{label}</div></div>\n<div> {error}</div>",
                         ])
                        ?>
                </div>
                <div class="form-group">
                <?php
                    echo Html::submitButton('Login', ['submit'=>'index', 'value'=>'login', 'class' => 'btn btn-primary', 'name' => 'login-button']);
                ?>
                </div>
            </div>  
        </div>
        <?php ActiveForm::end(); 
    } 
