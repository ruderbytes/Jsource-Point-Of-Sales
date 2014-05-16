<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->ITEM_ID=>array('view','id'=>$model->ITEM_ID),
	'Update',
);
?>

<h1>Update Item <?php echo $model->ITEM_ID; ?></h1>

<?php echo $this->renderPartial('_formPicture', array('model'=>$model)); ?>