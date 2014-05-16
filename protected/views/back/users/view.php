<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);
?>

<h1>View Users #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fname',
		'lname',
		'username',
/*		'password',*/
		'email',
		'joinDate',
		/*'level_id',*/
	),
)); ?>
