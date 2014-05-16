<?php
$err=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($err as $errfiles): 
$this->pageTitle=$errfiles->namaapp . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
endforeach; 
?>
<div align="center">
<h2>Error <?php echo $code; ?></h2>
<?php
$err1=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($err1 as $errfiles1): 
echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/files_img/'.$errfiles1->gambar), array('site/index'),array('title'=>$errfiles1->judulatas,'rel'=>'tooltip','data-placement'=>'bottom'));
endforeach; 
?>
<br/><br/>
<div class="error">
<?php echo CHtml::encode($message); ?>
</div>
</div>