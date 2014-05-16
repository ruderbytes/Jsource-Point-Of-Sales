<?php
/* @var $this SoDetailsController */
/* @var $model SoDetails */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SoDetails', 'url'=>array('index')),
	array('label'=>'Create SoDetails', 'url'=>array('create')),
	array('label'=>'Update SoDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SoDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SoDetails', 'url'=>array('admin')),
);
?>

<h1>View SoDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_code',
		'item_name',
		'so_id',
		'c_price',
		'qty',
		'total',
	),
)); ?>
