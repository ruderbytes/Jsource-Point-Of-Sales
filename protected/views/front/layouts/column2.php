<?php $this->beginContent('//layouts/main'); ?>
<div class="span8">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span3">
	<div id="sidebar">
            
<?php
$this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'News',
        'headerIcon' => 'icon-globe',
));
        $webn=  Webnews::Model()->findAll(array(
        'select'=>'*',
        'order'=>'id DESC',
        'limit'=>10,
));
        foreach($webn as $webnews): 
        echo CHtml::link($webnews->webnews_title, array('webnews/view', 'id'=>$webnews->id,'iklan'=>$webnews->webnews_title))."<br/>";
        echo"------------------------------------------<br/>";
 endforeach; 
 echo "<div align=right>".CHtml::link('index...',array('webnews/index'))."</div>";
$this->endWidget();?>
            
            
            
<?php
$this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Advertising',
        'headerIcon' => 'icon-flag',
        'headerButtons' => array(
	array(
		'class' => 'bootstrap.widgets.TbButtonGroup',
		'type' => 'primary',
		'buttons' => array(
			array('items' => array(
                                array('label' => 'Pasang Iklan', 'url' =>  array('advertising/create')),
			)),
		)
	),
)
));
        $idsup=  Advertising::Model()->findAll(array(
        'select'=>'*',
        'order'=>'id DESC',
        'limit'=>10,
));
        foreach($idsup as $idsuprows): 
        echo CHtml::link($idsuprows->judul, array('advertising/view', 'id'=>$idsuprows->id,'iklan'=>$idsuprows->judul))."<br/>";
        echo"------------------------------------------<br/>";
 endforeach; 
 echo "<div align=right>".CHtml::link('index...',array('advertising/index'))."</div>";
$this->endWidget();?>

            
<?php
$this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Download',
        'headerIcon' => 'icon-download-alt',
        'headerButtons' => array(
	array(
		'class' => 'bootstrap.widgets.TbButtonGroup',
		'type' => 'primary',
		'buttons' => array(
			array('items' => array(
                                array('label' => 'All Files', 'url' =>  array('download/index')),
			)),
		)
	),
)
));
        $idown=Download::Model()->findAll(array(
        'select'=>'*',
        'order'=>'id DESC',
        'limit'=>10,
));
        foreach($idown as $idownr): 
            ?><a href="<?php echo Yii::app()->request->baseUrl.'/files_download/'.$idownr->path; ?>"><?php echo CHtml::encode($idownr->nama); ?></a><?php
            echo"<br/>------------------------------------------<br/>";
 endforeach; 
 echo "<div align=right>".CHtml::link('index...',array('download/index'))."</div>";
$this->endWidget();?>

            
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>