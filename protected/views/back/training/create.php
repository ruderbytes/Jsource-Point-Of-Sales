<?php
/* @var $this TrainingController */
/* @var $model Training */

$this->breadcrumbs=array(
	'Trainings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Training', 'url'=>array('index')),
	array('label'=>'Manage Training', 'url'=>array('admin')),
);
?>

<h1>Create Training</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>