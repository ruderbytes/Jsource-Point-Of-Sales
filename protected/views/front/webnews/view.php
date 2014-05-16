<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle=$model->webnews_title." | News | Berita | ".$files->name_of_website;
    $this->breadcrumbs=array(
	'News'=>array('index'),
	$model->webnews_title,
    );
endforeach;
?>

<h2><?php echo $model->webnews_title; ?></h2>
<b><i>Dibuat Pada : <?php echo $model->webnews_created_at; ?></i></b><br/>
<b>Oleh : </b><?php echo $model->webnews_created_by; ?>
<br/>
<?php
$this->widget('bootstrap.widgets.TbBox', array(
    'title' =>'Deskripsi',
    'headerIcon' => 'icon-home',
    'content' =>$model->webnews_content,
));
?>