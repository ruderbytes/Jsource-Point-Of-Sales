<?php
$this->breadcrumbs=array(
	'Pengaturan / Setting'=>array('/site/page', 'view'=>'setting'),
	'Metadata SEO',
);

?>

<h2>Metadata SEO</h2>

<?php if(Yii::app()->user->hasFlash('pseo')): ?>

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::app()->user->getFlash('pseo'); ?>
</div>
<?php endif;?>
<?php echo $this->renderPartial('_form_seo', array('model'=>$model)); ?>