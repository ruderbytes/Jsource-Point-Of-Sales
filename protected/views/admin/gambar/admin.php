<?php
$this->breadcrumbs=array(
	'File Manager',
);
?>

<h3>File Manager</h3>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

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
                        'template'=>'{delete}'
		),
	),
)); ?>
