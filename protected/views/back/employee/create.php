<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Create',
);
?>

<h2>New Employee</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>