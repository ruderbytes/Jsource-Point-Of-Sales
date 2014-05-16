<?php
$this->breadcrumbs=array(
	'Pengaturan / Setting'=>array('/site/page', 'view'=>'setting'),
	'Metadata SEO',
);

?>

<h3>Halaman Home</h3>

<?php if(Yii::app()->user->hasFlash('phome')): ?>

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::app()->user->getFlash('phome'); ?>
</div>
<?php endif;?>
<?php echo $this->renderPartial('_form_home', array('model'=>$model)); ?>