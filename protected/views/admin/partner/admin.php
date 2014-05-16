<?php
$this->breadcrumbs=array(
	'Partners',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#partner-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Partners</h3>

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
       array('label'=>'Tambah Partner','url'=>  array('partner/addnew')),
    ),
));
    ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'partner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id_sup',
		'No_Account',
		'Perusahaan',
		'fname',
		'lname',
		'email',
		/*
		'alamat1',
		'alamat2',
		'kode_pos',
		'kota',
		'provinsi',
		'deskripsi',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
