<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="Advertising | Pasang Iklan | ".$files->name_of_website;
    $this->breadcrumbs=array(
	'Advertising',
    );

endforeach;
?>

<h1>Pasang Iklan</h1>
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'htmlOptions'=>array('class'=>'well'),
)); ?>
<div align="right">
<form method="post">
<input type="search" placeholder="ketik judul, nama, kota, ataupun Provinsi " name="q" value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>" />
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Go')); ?>&nbsp;
<?php echo Chtml::link('Pasang Iklan',array('advertising/create'),array('class'=>'btn'));?> &nbsp;
</form>
</div>
<?php
if(isset($_REQUEST['q'])){
    echo "<i>Kata Kunci yang di cari</i> \"<b>".$_REQUEST['q']."\"</b> ".Chtml::link('tampilkan semua',array('advertising/index'));
}
?>
<?php $this->endWidget(); ?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
