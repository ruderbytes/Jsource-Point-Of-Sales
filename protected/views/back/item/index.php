<?php
$welcome=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($welcome as $namaapp): 
    $this->pageTitle="Items | ".$namaapp->namaapp;
    $this->breadcrumbs=array(
	'Items',
);
endforeach;

?>
<h2>Items</h2>
  <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<hr>
<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Kelola','url'=>array('item/admin')),
    ),
));
    ?>
</div>
<?

$groupGridColumns = array(
		//'ITEM_ID',
		'ITEM_CODE',
		'ITEM_NAME',
		'BARCODE',
		
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}',
        ),
    );
$groupGridColumns[] = array(
    'name' => 'firstLetter',
    'value' => 'substr($data->ITEM_NAME, 0, 1)',
    'headerHtmlOptions' => array('style'=>'display:none'),
    'htmlOptions' =>array('style'=>'display:none')
);
 
$this->widget('bootstrap.widgets.TbGroupGridView', array(
	'type'=>'striped bordered',
	'dataProvider' => $dataProvider,
	'template' => "{items}",
	'extraRowColumns'=> array('firstLetter'),
	'extraRowExpression' => '"<b style=\"font-size: 3em; color: #333;\">".substr($data->ITEM_NAME, 0, 1)."</b>"',
	'extraRowHtmlOptions' => array('style'=>'padding:10px'),
	'columns' => $groupGridColumns
));
/*

$this->widget('application.extensions.LiveGridView.RefreshGridView', array(
    'id'=>'items-grid',
    'dataProvider'=>$dataProvider,
    'updatingTime'=>6000, // 6 det
    'columns'=>array(
		'ITEM_ID',
		'ITEM_CODE',
		'ITEM_NAME',
		'BARCODE',
		
        array(
            'class'=>'CButtonColumn',
        ),
    ),
));*/?>