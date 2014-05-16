<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="Ganti Password | ".$files->name_of_website;
    $this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username=>array('view','id'=>$model->id),
	'Ubah',
    );

endforeach;
?>

<h3>Ubah Password <?php echo $model->username; ?></h3>

<?php echo $this->renderPartial('_formChange', array('model'=>$model)); ?>