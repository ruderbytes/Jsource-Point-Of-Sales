<?php
$this->breadcrumbs=array(
	'Users'=>array('manage'),
	$model->username,
);
?>

<h3>View <?php echo $model->username."'s"; ?> profile</h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fname',
		'lname',
		'username',
	//	'password',
		'email',
		'joinDate',
	//	'level_id',
		'last_login_time',
	),
)); ?>
