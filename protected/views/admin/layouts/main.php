<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php
        $seo=Webseo::model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:web',
        'params'=>array(':web'=>1),
        ));
        foreach($seo as $dat):
        ?>
        <link href='<? echo Yii::app()->request->baseUrl.'/images/files_img/'.$dat->favicon;?>' rel='SHORTCUT ICON' title="<?=$dat->name_of_website.", ".$dat->motto;?>"/>
        	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frontcss/screen.css" media="screen, projection" title="<?=$dat->name_of_website.", ".$dat->motto;?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frontcss/print.css" media="print" title="<?=$dat->name_of_website.", ".$dat->motto;?>"/>
	<!--[if lt IE 8]>-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frontcss/ie.css" media="screen, projection" title="<?=$dat->name_of_website.", ".$dat->motto;?>"/>
	<!--<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frontcss/main.css" title="<?=$dat->name_of_website.", ".$dat->motto;?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/frontcss/form.css" title="<?=$dat->name_of_website.", ".$dat->motto;?>"/>
        
        <?php endforeach;?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
    <style>
        .twoColHybLt #link-to-mainsite, .twoColHybLt #time {
font-size: 11px;
text-align: left;
margin: 10px 0px 0px 10px;
}
.fltleft {
float: left;
}
    </style>
<head>  
  </head>    
  <body>
      <?php 
      $access=!Yii::app()->user->isGuest;
      if($access==false):
          
      else:
      ?>            
      <div class="container" id="page">

          <div id="header">
            
	</div><!-- header -->

        <div id="mainadmin" style="margin-bottom: 20px;color: #ffffff;" class="twoColHybLt">
            <div id="link-to-mainsite" class="fltleft">
                <a href="<? echo Yii::app()->request->baseUrl?>/" target="_blank"><font color="white">Ke Situs Utama</font></a> &nbsp;&nbsp;| &nbsp;&nbsp; 
                <?php echo CHtml::link('<font color="white">Kembali Ke Mainpage Admin</font>', array('site/index')); ?> &nbsp;&nbsp;| &nbsp;&nbsp;
                <?php echo CHtml::link('<font color="white">Logout ('.Yii::app()->user->name.')</font>', array('/site/logout')); ?>
            </div>
        </div><!-- mainmenu -->
                <div class="span3">
        <?
                    $this->widget('bootstrap.widgets.TbTabs', array(
                    'type'=>'tabs',
                    'stacked'=>true,
                    'tabs' => array(
                        array('label'=>'Main Page', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Home', 'url'=>array('/webseo/home'),'visible'=>!Yii::app()->user->isGuest),
			array('label'=>'About Us', 'url'=>array('/site/page', 'view'=>'about'),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Member', 'url'=>array('users/manage'),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Berita', 'url'=>array('/webnews/manage'),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Partners', 'url'=>array('/partner/index'),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Advertising', 'url'=>array('/advertising/index'),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'File Download', 'url'=>array('/download/index'),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Pengaturan / Setting', 'url'=>array('/webseo/seo'),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'File Manager', 'url'=>array('/gambar/index'),'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'Logout', 'url'=>array('/site/logout'),'visible'=>!Yii::app()->user->isGuest),
                                    )
                        ));
                   ?> 
                    </div>
                <div class="span8">
                    	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif;
        endif;
        ?>

                    <?php echo $content; ?></div>
                
	<div class="clear"></div>

	<div id="footer">
		<?
        $cright=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
        ));
        foreach($cright as $cr):
            $access=!Yii::app()->user->isGuest;
            if($access==false):
         
            else:
        ?>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?php echo date('Y'); ?> by <?=$cr->name_of_website?>, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        <? endif;?>
        <?endforeach;?>
	</div><!-- footer -->

</div><!-- page -->
</html>
