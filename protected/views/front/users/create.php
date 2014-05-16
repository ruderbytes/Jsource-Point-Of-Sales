<?php
$this->breadcrumbs=array(
	'Sign Up',
);
?>

<h2>Sign Up</h2>
<div class="form-input">
<?php if(Yii::app()->user->hasFlash('pusernametaken')): ?>

<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::app()->user->getFlash('pusernametaken'); ?>
</div>
<?php elseif(Yii::app()->user->hasFlash('pusernameok')): ?>
    
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::app()->user->getFlash('pusernameok'); ?>
</div>
    
<?php endif;?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
