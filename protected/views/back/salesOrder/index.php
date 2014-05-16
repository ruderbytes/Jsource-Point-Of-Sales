<?php
$logo=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $ss):
    $this->pageTitle="Sales Orders | ".$ss->namaapp;
endforeach;
$this->breadcrumbs=array(
	'Sales Orders',
);
?>

<h1>Sales Orders</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Tp Payment','url'=>  array('tppayment/index')),
       array('label'=>'Sales','url'=>array('sales/index')),
       array('label'=>'Status','url'=>array('status/index')),
    ),
));
    ?>
</div>
<div class="span5">
    <?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'fixedHeader' => true,
	'headerOffset' => 40,
	'type' => 'striped',
	'dataProvider' => $dataProvider,
	'responsiveTable' => true,
	'template' => "{items}",
	'columns' => array(
                array(
                    'name'=>'customer_name',
                    'value'=> 'Customer::model()->findByPk($data->customer_name)->cperusahaan',
                ),
		'location',
		'needed',
		'sales_name',
        array(
            'class'=>'CButtonColumn',
        ),
)));?>
</div>
<div class="span6">
    <br/>
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'htmlOptions'=>array('class'=>'well'),
)); ?>
<div align="right">
<form method="post">
<input type="date" placeholder="search" name="q" value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>" />
<input type="submit" value="Cari">
</form>
</div>
    <?php
if(isset($_REQUEST['q'])){
    echo "<i>Menampikan Pada Tanggal </i> \"<b>".$_REQUEST['q']."\"</b> ".Chtml::link('tampilkan semua',array('salesorder/index'));
}
?>
<?php $this->endWidget(); ?>
<div class="frmview">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>    
</div>
</div>










<!--mulai sini bisa di hapus mi

<div class="span5">
    
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'htmlOptions'=>array('class'=>'well'),
)); ?>
<div align="right">
<form method="post">
<input type="date" placeholder="search" name="from" value="<?=isset($_GET['from']) ? CHtml::encode($_GET['from']) : '' ; ?>" />
<input type="date" placeholder="search" name="until" value="<?=isset($_GET['until']) ? CHtml::encode($_GET['until']) : '' ; ?>" />
<input type="submit" value="Export to Xls" name="cetakXls">
<input type="submit" value="Export To Pdf" name="cetakPdf">
</form>
</div>
<?php $this->endWidget(); ?>
    
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'fixedHeader' => true,
	'headerOffset' => 40,
	'type' => 'striped',
	'dataProvider' => $dataReport,
	'responsiveTable' => true,
	'template' => "{items}",
	'columns' => array(
                array(
                    'name'=>'customer_name',
                    'value'=> 'Customer::model()->findByPk($data->customer_name)->cperusahaan',
                ),
		'location',
		'needed',
		'sales_name',
        array(
            'class'=>'CButtonColumn',
        ),
)));?>
</div>!-->