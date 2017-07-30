<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
     <p align="center"><h1 align="center"><?= Html::encode($this->title) ?></h1></p>

    <p align="center">Please fill out the following fields to login:</p>

    <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
    			<?php echo $this->render('_login_form', ['model' => $model]); ?>
    		</div>
    		<div class="col-md-2">
            </div>
    </div>	
    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>
