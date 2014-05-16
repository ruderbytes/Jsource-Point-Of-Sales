<?php
$this->breadcrumbs=array(
	'Sales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h3>Update Sales <?php echo $model->sales_name; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>