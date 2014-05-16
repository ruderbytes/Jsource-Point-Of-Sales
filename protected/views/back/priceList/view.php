<?php
$this->breadcrumbs=array(
	'Price Lists'=>array('index'),
	$model->id,
);
?>

<h1>View PriceList #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
                array(
                    'name'=>'price',
                    'value'=>'Rp.'.number_format($model->price).',-',
                ),
                array(
                    'name'=>'item_id',
                    'value'=>  Item::model()->findByPk($model->item_id)->ITEM_NAME,
                ),
		'created_at',
                array(
                    'name'=>'created_by',
                    'value'=>  Users::model()->findByPk($model->created_by)->username,
                ),
		'updated_at',
                array(
                    'name'=>'updated_by',
                    'value'=>Users::model()->findByPk($model->updated_by)->username,
                ),
	),
)); ?>
