<?php
$this->breadcrumbs=array(
	'About Us'=>array('/site/page', 'view'=>'about'),
	'Company Profile',
);

?>

<h2>Contact Us</h2>

<?php if(Yii::app()->user->hasFlash('pcontact')): ?>

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::app()->user->getFlash('pcontact'); ?>
</div>
<?php endif;?>
<?php echo $this->renderPartial('_form_contact', array('model'=>$model)); ?>