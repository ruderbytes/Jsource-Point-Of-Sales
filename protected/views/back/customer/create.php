<?php
$welcome=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($welcome as $namaapp): 
    $this->pageTitle="Add New Customer | ".$namaapp->namaapp;
    $this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Add New',
    );
endforeach;
?>

<h2>Add New Customer</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>