<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->id_cus,
);
?>

<h1>View Customer #<?php echo $model->id_cus; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cus',
		'noaccount',
		'cperusahaan',
		'cfname',
		'clname',
		'email',
		'calamat1',
		'calamat2',
		'ckode_pos',
		'ckota',
		'cprovinsi',
		'cdeskripsi',
	),
)); ?>
