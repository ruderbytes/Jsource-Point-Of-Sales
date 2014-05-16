<?php
$this->breadcrumbs=array(
	'Partners'=>array('index'),
	'Create',
);
?>

<h3>Create Partner</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>