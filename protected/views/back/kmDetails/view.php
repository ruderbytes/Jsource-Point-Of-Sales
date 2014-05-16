<?php
/* @var $this KmDetailsController */
/* @var $model KmDetails */

$this->breadcrumbs=array(
	'Km Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List KmDetails', 'url'=>array('index')),
	array('label'=>'Create KmDetails', 'url'=>array('create')),
	array('label'=>'Update KmDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete KmDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage KmDetails', 'url'=>array('admin')),
);
?>

<h1>View KmDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'km_id',
		'name_out',
		'amount_money_out',
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	),
)); ?>
