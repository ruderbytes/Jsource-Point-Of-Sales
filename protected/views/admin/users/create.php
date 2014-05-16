<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Add',
);
?>

<h2>Add User</h2>

<?php echo $this->renderPartial('_formAdd', array('model'=>$model)); ?>