<?php
$this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->Perusahaan=>array('view','id'=>$model->Id_sup),
	'Ubah',
);
?>

<h3>Ubah Partner <?php echo $model->Id_sup; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>