<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle=$files->name_of_website." | ".$files->motto;
endforeach;
?>
<?php
$this->widget('bootstrap.widgets.TbCarousel', array(
  'items'=>array(
      array(
		'image'=>Yii::app()->request->baseUrl.'/images/files_img/g1.jpg'),
      array(
		'image'=>Yii::app()->request->baseUrl.'/images/files_img/g2.jpg'),
      array(
		'image'=>Yii::app()->request->baseUrl.'/images/files_img/g3.jpg'),
  ),
));


$this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Welcome',
        'headerIcon' => 'icon-tags',
));
        $cont=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:web',
        'params'=>array(':web'=>1),
        ));
        foreach($cont as $home): 
        echo $home->home;
 endforeach; 
$this->endWidget();?>
