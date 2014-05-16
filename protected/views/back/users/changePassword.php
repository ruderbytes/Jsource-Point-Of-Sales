<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username,
);
?>

<h3>Ganti Password</h3>

<?php echo $this->renderPartial('_formChange', array('model'=>$model)); ?>