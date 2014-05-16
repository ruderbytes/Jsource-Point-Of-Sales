<h3>Items</h3>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'fixedHeader' => true,
	'headerOffset' => 40,
	'type' => 'striped',
	'dataProvider' => $dataReportItem,
	'responsiveTable' => true,
	'template' => "{items}",
	));?>
<div align="left">
    <b>Dicetak Oleh : <? echo Yii::app()->user->name;?><br/>
Dicetak Pada : <? echo date("d/m/Y H:i:s");?></b>
            <div align="right">Copyright &COPY; <?php echo date('Y'); ?></div>
</div>