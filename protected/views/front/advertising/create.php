<?php
$this->breadcrumbs=array(
	'Advertising'=>array('index'),
	'Pasang Iklan',
);

?>

<h3>Pasang Iklan</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>