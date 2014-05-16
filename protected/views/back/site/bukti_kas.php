<h3>Kas Masuk | Periode <?php echo $_REQUEST['from']." - ".$_REQUEST['until'];?></h3>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'fixedHeader' => true,
	'headerOffset' => 40,
	'type' => 'striped',
	'dataProvider' => $dataReportKas,
	'responsiveTable' => true,
	'template' => "{items}",
        'columns'=>array(
            'id',
            array(
                'name'=>'money_in',
                'header'=>'Kas Masuk',
            ),
            array(
                'name'=>'date_in',
                'header'=>'Tanggal Masuk',
                'htmlOptions' => array(
					'color' => 'blue',
					),
            ),
            array(
                'name'=>'created_at',
                'header'=>'Dibuat Pada',
            ),
            
        ),
	));?>
<div align="left">
    <b>Dicetak Oleh : <? echo Yii::app()->user->name;?><br/>
Dicetak Pada : <? echo date("d/m/Y H:i:s");?></b>
            <div align="right">Copyright &COPY; <?php echo date('Y'); ?></div>
</div>