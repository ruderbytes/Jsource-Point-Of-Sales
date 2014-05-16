<?php
$this->breadcrumbs=array(
	'Sales Orders'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sales-order-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sales Orders</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sales-order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'customer_name',
		'location',
		'needed',
		'sales_name',
		'tp_payment',
		/*
		'keterangan',
		'created_by',
		'created_at',
		'updated_at',
		'updated_by',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
