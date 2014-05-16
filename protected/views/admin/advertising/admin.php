<?php
$this->breadcrumbs=array(
	'Advertising',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#advertising-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/banner_design.png" width="87">Advertising</h3>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'advertising-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'judul',
		'nama',
		/*
		'isi',
		'alamat',
		'no_telp',
		'avatar',
		
		*/
                'created_at',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{delete}{view}',
                        'viewButtonUrl' => 'Yii::app()->controller->createUrl("../advertising/view",array("id"=>$data->id,"iklan"=>$data->judul))',
		),
	),
)); ?>
