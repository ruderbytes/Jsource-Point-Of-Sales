<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle(2000);
	return false;
});
$('.search-form form').submit(function(){
	$('#employee-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Employees</h3>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Buat Employee','url'=>array('employee/create')),
       array('label'=>'Admin','url'=>array('employee/admin')),
    ),
));
    ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'NIP',
		'employee_name',
		'email',
		'no_telp',
		'addess',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
