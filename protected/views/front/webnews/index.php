<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="News | Berita | ".$files->name_of_website;
    $this->breadcrumbs=array(
	'News',
    );

endforeach;
?>
<center><img src="<?php echo Yii::app()->request->baseUrl;?>/images/files_img/news.jpg" width="100%"></center><br/>
<h2><img width="110px" src="<?php echo Yii::app()->request->baseUrl;?>/images/icon/newspaper.png">News</h2>

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'htmlOptions'=>array('class'=>'well'),
)); ?>
<div align="right">
<form method="post">
<input type="search" placeholder="ketik judul berita, isi ataupun author " name="q" value="<?=isset($_GET['q']) ? CHtml::encode($_GET['q']) : '' ; ?>" />
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Telusuri')); ?>&nbsp;
</form>
</div>
<?php
if(isset($_REQUEST['q'])){
    echo "<i>Kata Kunci yang di cari</i> \"<b>".$_REQUEST['q']."\"</b> ".Chtml::link('tampilkan semua',array('webnews/index'));
}
?>
<?php $this->endWidget(); ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
