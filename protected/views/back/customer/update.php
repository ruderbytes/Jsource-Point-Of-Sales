<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->id_cus=>array('view','id'=>$model->id_cus),
	'Update',
);
?>

<h1>Update Customer <?php echo $model->id_cus; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>