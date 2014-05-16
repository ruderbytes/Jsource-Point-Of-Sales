<?php
/* @var $this PelunasanController */
/* @var $model Pelunasan */

$this->breadcrumbs=array(
	'Pelunasans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pelunasan', 'url'=>array('index')),
	array('label'=>'Create Pelunasan', 'url'=>array('create')),
	array('label'=>'Update Pelunasan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pelunasan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pelunasan', 'url'=>array('admin')),
);
?>

<h1>View Pelunasan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'no_so',
		'tgl_pelunasan',
		'total_bayar',
		'dibuat_oleh',
	),
)); ?>
