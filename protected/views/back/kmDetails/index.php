<?php
/* @var $this KmDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Km Details',
);

$this->menu=array(
	array('label'=>'Create KmDetails', 'url'=>array('create')),
	array('label'=>'Manage KmDetails', 'url'=>array('admin')),
);
?>

<h1>Km Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
