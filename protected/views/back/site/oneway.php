<?php
$this->breadcrumbs=array(
	'Pengelolaan',
);
$logo=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
   
    $this->pageTitle="Pengelolaan | ".$files->namaapp;
?>

<?php endforeach;?>
<h2>Pengelolaan</h2>
<hr>
<div align="center" style="margin-left: 120px">
<table>
    <tr>
        <td></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/kel_employee.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('employee/admin'),array('title'=>'Kelola Employee','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/kel_report.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('site/report'),array('title'=>'Kelola Report','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/kel_payment.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('tppayment/index'),array('title'=>'Kelola Type Payment','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
    </tr>
    <tr>
        <td></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/kel_sales.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('sales/index'),array('title'=>'Kelola Sales','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
        <td></td>
        <td><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/kel_status.png',CHtml::encode(Yii::app()->name),array('width'=>128)), array('status/index'),array('title'=>'Kelola Status','rel'=>'tooltip','data-placement'=>'bottom'));?></td>
    </tr>
</table>
</div>