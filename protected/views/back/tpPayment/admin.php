<?php
$this->breadcrumbs=array(
	'Type Payment'
);
?>

<h3>Type Payments</h3>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tp-payment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tp_payment',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
