<?php
$welcome=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($welcome as $namaapp): 
    $this->pageTitle="Customers | ".$namaapp->namaapp;
    $this->breadcrumbs=array(
	'Customers'
    );
endforeach;

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle(2000);
	return false;
});
$('.search-form form').submit(function(){
	$('#customer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<script type="text/javascript"> 
$(document).ready(function(){
  $("#flip").click(function(){
    $(".panel").toggle("slow");
  });
});
</script>
<h2>Customers</h2>
<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Buat Baru','url'=>  array('customer/addnew')),
       array('label'=>'Excel Report','url'=>  array('customer/reportXls')),
       array('label'=>'PDF Report','url'=>  array('customer/reportPdf')),
    ),
));
    ?>
</div>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_cus',
		'noaccount',
		'cperusahaan',
		'cfname',
		'clname',
		'email',
		/*
		'calamat1',
		'calamat2',
		'ckode_pos',
                */
		'ckota',
		'cprovinsi',
                /* 
		'cdeskripsi',
		*/
		array(
                    'class'=>'CButtonColumn',
                    'updateButtonUrl'=>'Yii::app()->createUrl("customer/change",array("id"=>$data->id_cus))',
		),
	),
)); ?>
