<?php
$this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->fname,
);
?>

<h3>Partner #<?php echo $model->Id_sup; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id_sup',
		'No_Account',
		'Perusahaan',
		'fname',
		'lname',
		'email',
		'alamat1',
		'alamat2',
		'kode_pos',
		'kota',
		'provinsi',
		'deskripsi',
	),
)); ?>
