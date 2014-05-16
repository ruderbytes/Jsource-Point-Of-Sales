<?php
/* @var $this SoDetailsController */
/* @var $model SoDetails */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SoDetails', 'url'=>array('index')),
	array('label'=>'Create SoDetails', 'url'=>array('create')),
	array('label'=>'View SoDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SoDetails', 'url'=>array('admin')),
);
?>

<h1>Update SoDetails <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>