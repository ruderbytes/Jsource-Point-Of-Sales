<?php
$this->breadcrumbs=array(
	'Gambar'=>array('index'),
	$model->judu_gbr,
);
?>

<h3>Ubah Gambar <?php echo $model->judu_gbr; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>