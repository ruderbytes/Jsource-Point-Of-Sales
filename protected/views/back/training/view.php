<?php
/* @var $this TrainingController */
/* @var $model Training */

$this->breadcrumbs=array(
	'Trainings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Training', 'url'=>array('index')),
	array('label'=>'Create Training', 'url'=>array('create')),
	array('label'=>'Update Training', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Training', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Training', 'url'=>array('admin')),
);
?>

<h1>View Training #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'start',
		'finish',
	),
)); ?>
