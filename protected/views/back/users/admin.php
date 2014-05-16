<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
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

<h1>Manage Users</h1>



<?php
$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
			'model'=>$model,
			'attribute'=>'username',
			'source'=>$this->createUrl('/users/userAutoComplete'),
			'options'=>array(
                                        'showAnim'=>'fold',
					'minLength'=>'0',
					'focus'=> 'js:function( event, ui ) {
					$("#'.CHtml::activeId($model,'username').'").val(ui.item.label);
					return false;
					}',
					'select'=> 'js:function( event, ui ) {
					$("#searchForm").submit();
					return false;
					}',
			),
			'htmlOptions'=>array(
					'class'=>'span3',
					'placeholder'=>'Search Items',
			),
	));

	?>
<?php
$this->widget('bootstrap.widgets.TbTypeahead', array(
    'model'=>$model, 
    'attribute'=>'username', 
    'options'=>array(
        'source'=>$this->createUrl('/users/userAutoComplete'),
        'valueAttribute'=>'id',
        'displayAttribute'=>'username',
        'items'=>4,
        'matcher'=>"js:function(item) {return ~item.toLowerCase().indexOf(this.query.toLowerCase());}",
        
        )
    )
);
?>
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-but\ton')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fname',
		'lname',
		'username',
		'password',
		'email',
		/*
		'joinDate',
		'level_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
