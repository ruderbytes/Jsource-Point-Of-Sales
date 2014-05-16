<?php
$this->breadcrumbs=array(
	'Status',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#status-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Status</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'status-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'status_name',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
