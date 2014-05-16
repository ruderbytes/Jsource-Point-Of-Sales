<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username,
);
?>

<h3>Ubah <?php echo $model->username; ?></h3>

<?php echo $this->renderPartial('_edit', array('model'=>$model)); ?>