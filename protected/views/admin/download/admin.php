<?php

$this->breadcrumbs=array(
	'Downloads'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});
$('.search-form form').submit(function(){
	$('#download-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/download-128.png" width="87">Download</h3>

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
       array('label'=>'Buat File','url'=>  array('download/create')),
    ),
));
    ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'download-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'path',
		'desc',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
