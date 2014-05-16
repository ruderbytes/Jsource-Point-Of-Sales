<?php
/* @var $this WebseoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Webseos',
);

$this->menu=array(
	array('label'=>'Create Webseo', 'url'=>array('create')),
	array('label'=>'Manage Webseo', 'url'=>array('admin')),
);
?>

<h1>Webseos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
