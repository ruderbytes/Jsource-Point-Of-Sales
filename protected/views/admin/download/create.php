<?php
$this->breadcrumbs=array(
	'Downloads'=>array('index'),
	'Create',
);
?>

<h1>Create Download</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>