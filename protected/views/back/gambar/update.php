<?php
$this->breadcrumbs=array(
	'Gambars'=>array('index'),
	$model->judu_gbr=>array('view','id'=>$model->id_gbr),
	'Update',
);

?>

<h3>Update Gambar <?php echo $model->judu_gbr; ?></h3>

<?php echo $this->renderPartial('_formUpdate', array('model'=>$model)); ?>