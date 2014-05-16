<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="Detail Partners ".$model->fname." ".$model->lname." | ".$files->name_of_website;
    $this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->fname." ".$model->lname,
    );

endforeach;
?>

<h1>View Partner #<?php echo $model->Id_sup; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id_sup',
		'No_Account',
		'Perusahaan',
		'fname',
		'lname',
		'email',
		'alamat1',
		'alamat2',
		'kode_pos',
		'kota',
		'provinsi',
		'deskripsi',
	),
)); ?>
