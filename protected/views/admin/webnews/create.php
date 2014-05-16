<?php
$this->breadcrumbs=array(
	'News'=>array('manage'),
	'Add New',
);
?>

<h2>Create News</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>