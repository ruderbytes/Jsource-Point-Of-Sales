<?php
/* @var $this PelunasanController */
/* @var $model Pelunasan */

$this->breadcrumbs=array(
	'Pelunasans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pelunasan', 'url'=>array('index')),
	array('label'=>'Manage Pelunasan', 'url'=>array('admin')),
);
?>

<h1>Create Pelunasan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>