<?php
/* @var $this SoDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'So Details',
);

$this->menu=array(
	array('label'=>'Create SoDetails', 'url'=>array('create')),
	array('label'=>'Manage SoDetails', 'url'=>array('admin')),
);
?>

<h1>So Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
