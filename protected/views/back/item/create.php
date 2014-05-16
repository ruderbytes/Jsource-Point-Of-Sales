<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Create',
);

?>

<h1>Create Item</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>