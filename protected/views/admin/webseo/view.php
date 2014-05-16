<?php
/* @var $this WebseoController */
/* @var $model Webseo */

$this->breadcrumbs=array(
	'Webseos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Webseo', 'url'=>array('index')),
	array('label'=>'Create Webseo', 'url'=>array('create')),
	array('label'=>'Update Webseo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Webseo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Webseo', 'url'=>array('admin')),
);
?>

<h1>View Webseo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name_of_website',
		'motto',
		'keywords',
		'author',
		'favicon',
		'website_desc',
		'language',
		'about',
		'contact',
	),
)); ?>
