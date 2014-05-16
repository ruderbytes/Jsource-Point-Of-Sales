<?php

$this->breadcrumbs=array(
	'Config'=>array('index'),
	'Update',
);
$scon_f=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($scon_f as $_form): 
    $this->pageTitle=$_form->namaapp . ' - Update Config '. $model->id_app;
endforeach;
?>

<h2>Update Config</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>