<?php
/* @var $this KmDetailsController */
/* @var $model KmDetails */

$this->breadcrumbs=array(
	'Km Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List KmDetails', 'url'=>array('index')),
	array('label'=>'Create KmDetails', 'url'=>array('create')),
	array('label'=>'View KmDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage KmDetails', 'url'=>array('admin')),
);
?>

<h1>Update KmDetails <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>