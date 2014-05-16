<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle=Yii::app()->user->name." Profile | ".$files->name_of_website;
    $this->breadcrumbs=array(
	'Download',
    );
endforeach;
?>

<h3>Profile <?php echo Yii::app()->user->name?></h3>
<?
        $pr=Users::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idu',
        'params'=>array(':idu'=>Yii::app()->user->id),
        ));
        foreach($pr as $p):
?>
<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Ubah Data','url'=>array('update','id'=>Yii::app()->user->id)),
       array('label'=>'Ganti Password','url'=>  array('changePassword','id'=>Yii::app()->user->id)),
       array('label'=>'Pasang Iklan','url'=>array('advertising/create')),
    ),
));
    ?>
</div>
<table border="1">
    <tr>
        <td><b>Nama Depan</b></td>
        <td>:</td>
        <td><?php echo $p->fname;?></td>
    </tr>
    <tr>
        <td><b>Nama Belakang</b></td>
        <td>:</td>
        <td><?php echo $p->lname;?></td>
    </tr>
    <tr>
        <td><b>Username</b></td>
        <td>:</td>
        <td><?php echo $p->username;?></td>
    </tr>
    <tr>
        <td><b>Email</b></td>
        <td>:</td>
        <td><?php echo $p->email;?></td>
    </tr>
    <tr>
        <td><b>Tanggal Gabung</b></td>
        <td>:</td>
        <td><?php echo $p->joinDate;?></td>
    </tr>
    <tr>
        <td><b>Login Terakhir</b></td>
        <td>:</td>
        <td><?php echo Yii::app()->user->lastLogin; ?></td>
    </tr>
</table>
<?endforeach;?>
<h4>Iklan Anda</h4>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'judul',
		'nama',
		'alamat',
		array(
			'class'=>'CButtonColumn',
                        'viewButtonUrl' => 'Yii::app()->controller->createUrl("advertising/view",array("id"=>$data->id))',
                        'updateButtonUrl' => 'Yii::app()->createUrl("advertising/update",array("id"=>$data->id))',
                        'deleteButtonUrl' => 'Yii::app()->controller->createUrl("advertising/delete",array("id"=>$data->id))',
		),
                array(
                'class'=>'CLinkColumn',
                'header'=>'Ubah Gambar',
                'imageUrl'=>Yii::app()->request->baseUrl.'/images/icon/browse.png',
                'labelExpression'=>'$data->alamat',
                'urlExpression'=>'Yii::app()->createUrl("advertising/changePicture",array("id"=>$data->id))',
                'htmlOptions'=>array('style'=>'text-align:center; width:100px;'),
         ),
	),
)); ?>
