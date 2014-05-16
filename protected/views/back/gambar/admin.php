<?php
$this->breadcrumbs=array(
	'Gambars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Gambar', 'url'=>array('index')),
	array('label'=>'Create Gambar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});
$('.search-form form').submit(function(){
	$('#gambar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Gambars</h3>
<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Config','url'=>  array('setapp/index')),
       array('label'=>'Upload','url'=>array('gambar/index')),
    ),
));
    ?>
</div>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gambar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_gbr',
		'judu_gbr',
		'file_gbr',
		'uploaded',
		array(
			'class'=>'CButtonColumn',
                    'template'=>'{update}{delete}',
		),
	),
)); ?>
