<?php
$welcome=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($welcome as $namaapp): 
    $this->pageTitle="Pelunasan | ".$namaapp->namaapp;
    $this->breadcrumbs=array(
	'Pelunasan',
);
endforeach;

?>
<h2>Pelunasan</h2>
<div class="span3">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<div class="span8">
    <?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'type'=>'striped bordered',
    'dataProvider' => $dataProvider,
    'template' => "{items}\n{extendedSummary}",
    'columns' =>array(
            array(
              'name'=>'no_so',
              'value'=>'SalesOrder::model()->findByPk($data->no_so)->customer_name',
            ),
            'tgl_pelunasan',              
            array(
                'name'=>'total_bayar', 
                'value'=>'number_format($data->total_bayar)',
            ),
            array(
                'name'=>'dibuat_oleh',
                'value'=>  'Users::model()->findByPk($data->dibuat_oleh)->username',
            ),
        array(
                'name'=>'kembali', 
                'value'=>'number_format($data->kembali)',
            ),
            /*array(
                'class' => 'CButtonColumn',
                'template'=>'{view}',
            ),*/
        ),
));?>
</div>