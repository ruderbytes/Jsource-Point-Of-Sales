<?php
$this->breadcrumbs=array(
	'News'=>array('manage'),
	$model->webnews_title,
);

?>

<h3>Ubah #<?php echo $model->webnews_title; ?></h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>