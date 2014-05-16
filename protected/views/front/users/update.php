<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="Ubah Profile | ".$files->name_of_website;
    $this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username=>array('profile'),
	'Ubah',
    );

endforeach;
?>

<h3> Ubah Profile <?php echo $model->username; ?></h3>

<?php echo $this->renderPartial('_edit', array('model'=>$model)); ?>