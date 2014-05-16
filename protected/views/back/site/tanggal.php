<h3>Sales Order</h3>
<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	'fixedHeader' => true,
	'headerOffset' => 40,
	'type' => 'striped',
	'dataProvider' => $dataReport,
	'responsiveTable' => true,
	'template' => "{items}",
	));?>