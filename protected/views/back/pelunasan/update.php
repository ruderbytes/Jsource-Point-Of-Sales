<?php
/* @var $this PelunasanController */
/* @var $model Pelunasan */

$this->breadcrumbs=array(
	'Pelunasans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pelunasan', 'url'=>array('index')),
	array('label'=>'Create Pelunasan', 'url'=>array('create')),
	array('label'=>'View Pelunasan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pelunasan', 'url'=>array('admin')),
);
?>

<h1>Update Pelunasan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>