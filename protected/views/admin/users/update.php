<?php
$this->breadcrumbs=array(
	'Users'=>array('manage'),
	$model->username=>array('view','id'=>$model->id),
	'Update',
);
?>

<h3>Update <?php echo $model->username."'s"; ?> profile</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>