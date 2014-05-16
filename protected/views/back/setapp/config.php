<?php
$this->breadcrumbs=array(
	'Config'
);
$sconfv=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($sconfv as $namaappv): 
    $this->pageTitle="Config | ".$namaappv->namaapp;
endforeach;
?>

<h2>Config</h2>
<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Ubah','url'=>  array('setapp/update')),
       array('label'=>'Upload Gambar','url'=>array('gambar/index')),
       array('label'=>'Tambah User','url'=>array('users/create')),
    ),
));
    ?>
</div><br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_app',
		'namaapp',
		'judulatas',
		'textjalan',
		'gambar',
		'favicon',
		'notefortoday',
	),
)); ?>
