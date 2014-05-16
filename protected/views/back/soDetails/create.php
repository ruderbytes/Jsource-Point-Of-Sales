<?php
/* @var $this SoDetailsController */
/* @var $model SoDetails */

$this->breadcrumbs=array(
	'So Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SoDetails', 'url'=>array('index')),
	array('label'=>'Manage SoDetails', 'url'=>array('admin')),
);
?>

<h1>Create SoDetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>