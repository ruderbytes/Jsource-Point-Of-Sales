<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="Tampilan / Interface | ".$files->name_of_website;
endforeach;
$this->breadcrumbs=array(
	'Tampilan / Interface',
);
?>
<h2>Tampilan / Interface</h2>
<br/>
<br/>
<table>
    <tr>
        <td><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/new/company_profile.jpg',CHtml::encode(Yii::app()->name),array('width'=>128,'class'=>'img-circle')), array('webseo/company'),  array('title'=>'Company Profile','rel'=>'tooltip','data-placement'=>'bottom'))?></td>
        <td><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/new/customer.jpg',CHtml::encode(Yii::app()->name),array('width'=>128,'class'=>'img-circle')), array('customer/index'),  array('title'=>'Customers','rel'=>'tooltip','data-placement'=>'bottom'))?></td>
        <td><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/new/contact_us.jpg',CHtml::encode(Yii::app()->name),array('width'=>128,'class'=>'img-circle')), array('webseo/contact'),  array('title'=>'Contact Us','rel'=>'tooltip','data-placement'=>'bottom'))?></td>
    </tr>
</table>
