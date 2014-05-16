<?php
/* @var $this KmDetailsController */
/* @var $model KmDetails */

$this->breadcrumbs=array(
	'Km Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List KmDetails', 'url'=>array('index')),
	array('label'=>'Manage KmDetails', 'url'=>array('admin')),
);
?>

<h1>Create KmDetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>