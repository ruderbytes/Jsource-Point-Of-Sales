<?php
$this->breadcrumbs=array(
	'Sales Orders'=>array('index'),
	Customer::model()->findByPk($model->customer_name)->cperusahaan,
);
?>

<h3>Sales Order #JS000<?php echo $model->id; ?></h3>
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
                'status_beli',
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

<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Tambah Item',
	'htmlOptions'=>array(
		'data-toggle'=>'modal',
		'data-target'=>'#myModal',
	),),
       array('label'=>'Ubah Data','url'=>array('salesorder/update','id'=>$model->id)),
       array('label'=>'Excel Report','url'=>  array('salesorder/reportXls','id'=>$model->id)),
       array('label'=>'PDF Report','url'=>  array('salesorder/reportPdf','id'=>$model->id)),
    ),
));
    ?>
    <?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
    <div class="modal-header"  style="background-image: url('<?=  Yii::app()->baseUrl?>/images/icon/frm-bg.png'); padding: 20px; border-radius: .4em;">
        <a class="close" href="<?php $this->createUrl('users/update')?>">&times;</a>
    <h4>Tambah Item</h4>
    </div>
<div class="modal-body">
       <?php $this->renderPartial('/SoDetails/_form',array(
			'model'=>$soa,
		)); ?>
</div>
 
<?php $this->endWidget(); ?>   
</div>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	//'filter'=>$soa,
	'fixedHeader' => true,
	'headerOffset' => 40,
	'type'=>'striped bordered',
	'dataProvider' =>$soa->search(),
	'template' => "{items}",
	'columns' => array(
            //'id',
            'item_code',
            'item_name',
            array(
              'name'=>'c_price',
              'type'=>'raw',
              'value'=>'$data->c_price',
            ),
            array(
              'name'=>'qty',
              'type'=>'raw',
              'value'=>'$data->qty',
              'footer'=>'<b>Amount Total :</b>',
            ),            
            array(
            'name'=>'total',
            //'header'=>'Rows Total',
            'class'=>'bootstrap.widgets.TbTotalSumColumn'
        ),
            array(
			'class'=>'CButtonColumn',
                        'viewButtonUrl'=>'Yii::app()->controller->createUrl("sodetails/view",array("id"=>$data->id))',
			'updateButtonUrl'=>'Yii::app()->createUrl("sodetails/update",array("id"=>$data->id))',
                        'deleteButtonUrl'=>'Yii::app()->controller->createUrl("sodetails/delete",array("id"=>$data->id))',
                        'template'=>'{delete} {update}',
		),
        ),
));
?>