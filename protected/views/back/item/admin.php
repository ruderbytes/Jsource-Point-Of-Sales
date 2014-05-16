<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#item-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Items</h3>

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
       array('label'=>'Item','url'=>array('item/index')),
    ),
));
    ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'item-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ITEM_ID',
		'ITEM_CODE',
		'BARCODE',
                'ITEM_NAME',
                array(
                   'name'=>'C_PRICE',
                   'value' =>'number_format($data->C_PRICE)',
                ),
		/*
                'CREATED_BY',
		'CREATED_DATE',
		'LAST_UPDATE_DATE',
                'LAST_UPDATE_BY',
                'ITEM_DESCRIPTION',
                'UOM_CODE',
		'MIN_STOCK',
		'ACTIVE_FLAG',
		'GAMBAR',
		'NOTE',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
