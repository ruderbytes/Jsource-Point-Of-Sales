<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="Customers | ".$files->name_of_website;
    $this->breadcrumbs=array('Customers');

endforeach;
?>

<h3><img src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/new/customer.jpg" width="100px">Customers</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_cus',
		'cperusahaan',
                'cdeskripsi',
                array(
                    'header'=>'Owner',
                    //'name'=>'cfname',
                    'value'=>'$data->cfname." ".$data->clname'
                ),
		/*
		'email',
                'noaccount',
                'cfname',
		'clname',
                'calamat1',
		'calamat2',
		'ckode_pos',
		'ckota',
		'cprovinsi',
		*/
	),
)); ?>
