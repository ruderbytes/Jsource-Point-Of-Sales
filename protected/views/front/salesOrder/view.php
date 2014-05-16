<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle=Customer::model()->findByPk($model->customer_name)->cperusahaan." | Bukti Transaksi / Nota | ".$files->name_of_website;
    $this->breadcrumbs=array(
	'Bukti Transaksi / Nota'=>array('index'),
	Customer::model()->findByPk($model->customer_name)->cperusahaan,
    );

endforeach;
?>
<h3>Sales Order #<?php echo $model->id; ?></h3>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
                array(
                  'name'=>'customer_name',
                  'value'=>  Customer::model()->findByPk($model->customer_name)->cperusahaan,
                ),
		'location',
		'needed',
		'sales_name',
                array(
                     'name'=>'Tp Paymnet',
                     'type'=>'raw',
                     'value'=>TpPayment::model()->findByPk($model->tp_payment)->tp_payment,
                 ),
		'keterangan',
                'status',
                array(
                    'name'=>'Created By',
                    'type'=>'raw',
                    'value'=>  Users::model()->findByPk($model->created_by)->username,
                ),
		'created_at',
		'updated_at',
                array(
                    'name'=>'Updated By',
                    'type'=>'raw',
                    'value'=>  Users::model()->findByPk($model->updated_by)->username,
                ),
	),
)); ?>