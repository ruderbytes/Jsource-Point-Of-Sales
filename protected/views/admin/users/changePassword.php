<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username=>array('view','id'=>$model->id),
	'Update',
);
?>

<h3>Update <?php echo $model->username."'s"; ?> password</h3>

<?php echo $this->renderPartial('_formChange', array('model'=>$model)); ?>