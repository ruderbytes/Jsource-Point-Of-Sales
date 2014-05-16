<?php
$this->breadcrumbs=array(
	'Type Payments'=>array('index'),
	$model->tp_payment,
);

?>

<h3>Ubah Type Payment <?php echo $model->tp_payment; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>