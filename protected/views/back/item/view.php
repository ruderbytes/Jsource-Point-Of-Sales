<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->ITEM_ID,
);
$getmodel=  Setapp::model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($getmodel as $setmodel): 
    $this->pageTitle="View Product #".$model->ITEM_NAME."| ".$setmodel->namaapp;
endforeach;
?>
<link href="<? echo Yii::app()->baseUrl.'/css/bootplus/css/bootplus-responsive.css'?>" rel="stylesheet" type="text/css" media="screen, projection">
<table>
<tr>
    <td><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/xls.gif'), array('item/reportXls','id'=>$model->ITEM_ID),  array('target'=>'_blank'));?>
        <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/pdf.png',CHtml::encode(Yii::app()->name),array('width'=>48)), array('item/reportPdf','id'=>$model->ITEM_ID),  array('target'=>'_blank'));?></td>
                    </tr>
                    </table>

<div class="row">
  <div class="span4">
      <h1>Detail Item #<?php echo $model->ITEM_ID; ?></h1>
<h2>Rp.<?php echo number_format($model->C_PRICE);?>,-</h2>
<div align="right">
    <?php echo Chtml::link('<i class="icon-picture icon-white"></i> Ganti Gambar',array('item/uppicture','id'=>$model->ITEM_ID),array('class'=>'btn btn-info'));?>
    <?php echo Chtml::link('<i class="icon-wrench icon-white"></i> Edit',array('item/update','id'=>$model->ITEM_ID),array('class'=>'btn btn-info'));?>
</div>
      <br/>
<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/upload/'.$model->GAMBAR);?>
      
<?php 
if($model->ACTIVE_FLAG=="Y"):
$setvalue="Yes";
else:
$setvalue="No";    
endif;
$this->widget('zii.widgets.CDetailView', array(
        'cssFile'=>Yii::app()->baseUrl.'/css/bootplus/css/bootplus.css',
	'data'=>$model,
	'attributes'=>array(
		'ITEM_ID',
		'ITEM_CODE',
                'ITEM_NAME',
		'ITEM_DESCRIPTION',
		'BARCODE',
		'UOM_CODE',
                array(
                    'name'=>'MIN_STOCK',
                    'value'=>  number_format($model->MIN_STOCK),
                ),
                //'ACTIVE_FLAG',
                array(
                    'name'=>'ACTIVE_FLAG',
                    'value'=>$setvalue,
                ),
                array(
                    'name'=>'CREATED_BY',
                    'value'=>Users::model()->findByPk($model->CREATED_BY)->username,
                ),
		//'CREATED_BY',
		'CREATED_DATE',
		'LAST_UPDATE_DATE',
                array(
                    'name'=>'LAST_UPDATE_BY',
                    'value'=>Users::model()->findByPk($model->LAST_UPDATE_BY)->username,
                ),
		//'GAMBAR',
		'NOTE',
	),
)); ?></div>
    <div class="span7">
     <h3>Add New Price</h3>
     <?php $this->renderPartial('/pricelist/_form_item_price',array(
			'model'=>$ank,
		)); ?>
     <hr>
     <h4>History Harga</h4>
     <?php   
        $this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'fixedHeader' => true,
	'headerOffset' => 40,
	'type' => 'striped',
	'dataProvider' => $ank->search(),
        'emptyText'=>'Data Tidak Ditemukan',
        'summaryText'=>'Price History',
	'responsiveTable' => true,
	'template' => "{items}",
	'columns'=>array(
                'id',
		array(
			'name'=>'Price',
			'type'=>'raw',
			'value'=>'Chtml::link("Rp.".number_format($data->price).",-")',
		),
		array(
			'name'=>'Periode',
			'type'=>'raw',
                        'htmlOptions'=>array('width'=>'240px'),
			'value'=>'$data->from_periode."<font color=red><b> - </b></font> ".$data->until_periode',
		),
                array(
			'name'=>'Created At',
			'type'=>'raw',
			'value'=>'$data->created_at',
                        'htmlOptions'=>array('width'=>'210px'),
		),
                array(
			'name'=>'Created By',
			'type'=>'raw',
			'headerHtmlOptions'=>array('style'=>'text-align: left'),//,'colspan'=>'2'
			'htmlOptions'=>array('width'=>'90px'),
                        'value'=>'Chtml::link(Users::model()->findByPk($data["created_by"])->username,array("users/view","id"=>$data["created_by"]))',
		),
                array(
			'class'=>'CButtonColumn',
			'header'=>'Options',
			'viewButtonUrl'=>'Yii::app()->controller->createUrl("pricelist/view",array("id"=>$data->id))',
			'updateButtonUrl'=>'Yii::app()->createUrl("pricelist/update",array("id"=>$data->id))',
			'deleteButtonUrl'=>'Yii::app()->controller->createUrl("pricelist/delete",array("id"=>$data->id))',
			'deleteConfirmation'=>'Yakin Ingin Menghapus Harga Ini?',
			'viewButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/icon/detail.png',
			'updateButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/icon/ubah.png',
			'deleteButtonImageUrl'=>Yii::app()->request->baseUrl.'/images/icon/hapus.png',
			'htmlOptions'=>array('style'=>'width:300px!important'),
			'headerHtmlOptions'=>array('style'=>'width:300px!important'),
			'template'=>'{delete} {update} {view}',
		),
	),
));
   ?>     
    </div>
</div>
<br/>
<style>img {  
  -webkit-user-drag: none;
}
.noslt{
    -webkit-user-select: none;
}</style>
<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/'.$model->ITEM_CODE.'.jpeg'));?>
</div>
<?php
$width  = 242;  
$height = 100;
$quality = 100;
$text =1;
$location = Yii::getPathOfAlias("webroot").'/images/'.$model->ITEM_CODE.'.jpeg';
 
Yii::import("application.extensions.barcode.*");                      
barcode::Barcode39($model->ITEM_CODE, $width , $height , $quality, $text, $location);
?>