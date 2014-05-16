<?php
$this->breadcrumbs=array(
	'Sales',
);
?>

<h3>Sales</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sales-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'sales_name',
		'posisi',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
