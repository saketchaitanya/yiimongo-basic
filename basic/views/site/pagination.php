<?php
   use yii\widgets\LinkPager;
   use yii\helpers\ArrayHelper;
?>
<?php 
$arrlength=count($models);
for($i = 0; $i < $arrlength; $i++){
 $name = ArrayHelper::getValue($models[$i], 'name');
 $email= ArrayHelper::getValue($models[$i], 'email');
 ?>
 <?= $name; ?>
 <?= "&nbsp;&nbsp;";?>
 <?= $email;?>
 <?= "<br/>";?>
<?php
}
   // display pagination
   echo LinkPager::widget([
      'pagination' => $pagination,
   ]);
?>