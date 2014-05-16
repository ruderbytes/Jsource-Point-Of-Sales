<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);
?>

<h3>Tambah Users</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>