<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="Partners | ".$files->name_of_website;
    $this->breadcrumbs=array('Partners');

endforeach;
?>
<center><img src="<?php echo Yii::app()->request->baseUrl;?>/images/files_img/partners.jpg" width="100%"></center><br/>
<h3>Partners</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'partner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id_sup',
		'Perusahaan',
                array(
                    'header'=>'Owner',
                    'value'=>'$data->fname." ".$data->lname'
                ),
		/*
                'No_Account',
                'email',
		'alamat1',
		'alamat2',
		'kode_pos',
		'kota',
		'provinsi',
		'deskripsi',
		*/
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{view}'
		),
	),
)); ?>
