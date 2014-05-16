<?php
$this->breadcrumbs=array(
	'Users',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Users</h3>

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
       array('label'=>'Buat User','url'=>  array('users/create')),
    //  array('label'=>'Excel Report','url'=>  array('kasmasuk/reportXls')),
    //   array('label'=>'Advanced Search'),
    ),
));
    ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		/*'fname',
		'lname',*/
		'username',
		'email',
		'joinDate',
                /*
		'level_id',
		*/
                'last_login_time',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{delete} {view}',
		),
	),
)); ?>