<?php
$this->breadcrumbs=array(
	'Language',
);
?>

<h3>Language</h3>

    <?php if(Yii::app()->user->hasFlash('plang')): ?>

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::app()->user->getFlash('plang'); ?>
</div>
<?php endif;?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'language-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'langid',
		'langdesc',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{delete}'
		),
	),
)); ?>
