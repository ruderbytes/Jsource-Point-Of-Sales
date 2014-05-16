<?php
$this->breadcrumbs=array(
	'Advertising'=>array('index'),
	$model->judul=>array('view','id'=>$model->id),
);
?>

<h3>Ubah Gambar <br/>#<?php echo $model->judul; ?></h3>

<?php echo $this->renderPartial('_formPicture', array('model'=>$model)); ?>