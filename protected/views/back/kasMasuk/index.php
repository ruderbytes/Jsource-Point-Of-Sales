<?php
$welcome=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($welcome as $namaapp): 
    $this->pageTitle="Kas Masuk | ".$namaapp->namaapp;
    $this->breadcrumbs=array(
	'Kas Masuk',
    );
endforeach;
?>

<h3>Kas Masuk</h3>
<div class="form-input">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<?php /*$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'thread-grid',
	'dataProvider'=>$dataProvider,
	'emptyText'=>'Data tidak ditemukan',
	'summaryText'=>'',
	'columns'=>array(
		array(
			'name'=>'Person',
			'type'=>'raw',
			'value'=>'Chtml::link(Employee::model()->findByPk($data->person_id)->employee_name,array(\'employee/view\',\'id\'=>$data->id))',
		),
		array(
			'name'=>'Money In',
			'type'=>'raw',
			'value'=>'Chtml::link(number_format($data->money_in),array(\'kasmasuk/view\',\'id\'=>$data->id))',
		),
		array(
			'name'=>'Date In',
			'type'=>'raw',
			'value'=>'$data->date_in',
		),
	),
)); */?>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'type'=>'striped bordered',
    'dataProvider' => $dataProvider,
    'template' => "{items}\n{extendedSummary}",
    'columns' =>array(
			array(
			'name'=>'Person',
			'type'=>'raw',
			'value'=>'Chtml::link(Employee::model()->findByPk($data->person_id)->employee_name,array(\'kasmasuk/person\',\'id\'=>$data->person_id))',
		),
		array(
			'name'=>'Date In',
			'type'=>'raw',
			'value'=>'$data->date_in',
		),
		
        //array('name'=>'money_in', 'header'=>'UOM CODE'),
        array(
			'name'=>'Money In',
			'type'=>'raw',
			'value'=>'Chtml::link(number_format($data->money_in),array(\'kasmasuk/view\',\'id\'=>$data->id))',
                        'footer'=>'Amount Rows Total',
		),
                array(
            'name'=>'money_in',
            'header'=>'Rows Total',
            'class'=>'bootstrap.widgets.TbTotalSumColumn'
        ),
        ),
    'extendedSummary' => array(
        'title' => 'All Total BKM',
        'columns' => array(
            'money_in' => array('label'=>'Amount Total', 'class'=>'TbSumOperation')
        )
    ),
    'extendedSummaryOptions' => array(
        'class' => 'well pull-right',
        'style' => 'width:300px'
    ),
    
));?>
<?php
    foreach($dataProvider as $dfile):
        echo $dfile->date_in;
        echo $data->date_in;
    endforeach;?>