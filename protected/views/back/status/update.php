<?php
$this->breadcrumbs=array(
	'Status'=>array('index'),
	$model->status_name
);
?>

<h3>Update <?php echo $model->status_name; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>