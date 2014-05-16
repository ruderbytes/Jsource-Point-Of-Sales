<?php
/* @var $this KasMasukController */
/* @var $model KasMasuk */

$this->breadcrumbs=array(
	'Kas Masuks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<h1>Update KasMasuk <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>