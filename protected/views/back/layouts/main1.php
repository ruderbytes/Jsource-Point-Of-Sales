<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
        
        
        <!--Zurb Foundation!-->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/zurb/stylesheets/foundation.min.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/zurb/stylesheets/foundation.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/zurb/stylesheets/app.css" />
        <!--Zurb Foundation!-->
        
        <link href='<? echo Yii::app()->request->baseUrl;?>/images/fahmim2.gif' rel='SHORTCUT ICON'/>
        <link rel="stylesheet" href="<? echo Yii::app()->request->baseUrl;?>/jqm/jquery.mobile-1.2.0.min.css" />
        <script type="text/javascript" src="<? echo Yii::app()->request->baseUrl;?>/jqm/jquery-1.8.2.min.js"></script>
        <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>!-->
        <script type="text/javascript" src="<? echo Yii::app()->request->baseUrl;?>/jqm/jquery.mobile-1.2.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo "Point Of Sales, ".CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="container" id="page">
    <div data-role="page" data-fullscreen="true"> 
	<div data-role="header" data-position="fixed" data-theme="a">
            <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            <div id="mainmenu" data-transition="flow" data-inline="true">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Dashboard', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Produk', 'url'=>array('/item/index'), 'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'App Config', 'url'=>array('/setapp/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>
        </div> 
	<div data-role="content">
            <div data-role="header" data-position="inline"  data-theme="b">
<!--<a href="#" data-icon="delete">Cancel</a>!-->
<h1><b><font color="white">JPOS App</font></b></h1>
<!--<a href="#" data-icon="check">Done</a>!-->
</div>
            <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
        </div> 
        
	<div data-role="footer" data-theme="b" data-position="fixed">
            <center><br/>Copyright &copy; <?php echo date('Y'); ?> by Seventhsoft<br/>&nbsp;</center>
        </div> 
</div>
</body>
</html>
