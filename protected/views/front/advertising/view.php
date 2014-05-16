<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle=$model->judul." | Advertising | Pasang Iklan | ".$files->name_of_website;
    $this->breadcrumbs=array(
	'Advertising'=>array('index'),
	$model->judul,
    );

endforeach;
?>

<h2><?php echo $model->judul; ?></h2>
<b><i>Dibuat Pada : <?php echo $model->created_at; ?></i></b><br/>
<br>
<img src="<?php echo Yii::app()->request->baseUrl.'/iklan/'.$model->avatar; ?>" width="150"   class="thumbnail" height="100" title="<?php echo $model->judul; ?>" /><br/>
<b>Oleh : </b><?php echo $model->nama; ?> | <b>Telp/Hp : </b><?php echo $model->no_telp; ?>
<br/><br/>
<b>Alamat : </b><?php echo $model->alamat; ?> | <b>Kota : </b><?php echo $model->kota; ?> | <b>Provinsi : </b><?php echo $model->provinsi; ?>
<br/>
<?php
$this->widget('bootstrap.widgets.TbBox', array(
    'title' =>'Deskripsi',
    'headerIcon' => 'icon-home',
    'content' =>$model->isi,
));
?>
<?php
$this->widget('application.extensions.fb-comment.FBComment', array(
  'url' => 'http://localhost/2013/POS/advertising/',
  'posts' => 20,
  'width' => 370,
));?>