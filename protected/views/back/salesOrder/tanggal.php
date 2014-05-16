<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'fixedHeader' => true,
	'headerOffset' => 40,
	'type' => 'striped',
	'dataProvider' => $dataReport,
	'responsiveTable' => true,
	'template' => "{items}",
	'columns' => array(
		'location',
		'needed',
		'sales_name',
)));?>