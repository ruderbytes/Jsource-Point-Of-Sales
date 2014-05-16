<?php
$this->breadcrumbs=array(
	'News'
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});
$('.search-form form').submit(function(){
	$('#webnews-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/news.png" width="87"> News</h3>
<?php if(Yii::app()->user->hasFlash('upnews')): ?>

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::app()->user->getFlash('upnews'); ?>
</div>
<?php endif;?>

<?php if(Yii::app()->user->hasFlash('crnews')): ?>

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::app()->user->getFlash('crnews'); ?>
</div>
<?php endif;?>


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
       array('label'=>'Buat Berita','url'=>  array('webnews/create')),
    //  array('label'=>'Excel Report','url'=>  array('kasmasuk/reportXls')),
    //   array('label'=>'Advanced Search'),
    ),
));
    ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'webnews-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'webnews_title',
                /*
		'webnews_content',
                 */
		'webnews_created_at',
		'webnews_updated_at',
		'webnews_created_by',
		'webnews_updated_by',
		
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{delete}{update}'
		),
	),
)); ?>
