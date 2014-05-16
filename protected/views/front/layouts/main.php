<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <?php
        $meta=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:web',
        'params'=>array(':web'=>1),
        ));
        foreach($meta as $dat):
        ?>
        <link href='<? echo Yii::app()->request->baseUrl."/images/files_img/".$dat->favicon;?>' rel='SHORTCUT ICON'/>	
        <meta name="keywords" content="<?=$dat->keywords?>" />
        <meta name="language" content="<?=$dat->language?>" />
        <meta name="description" content="<?=$dat->website_desc?>"/>
        <meta name="author" content="<?=$dat->author?>"/>
        <meta name="robots" content="index,follow" />
        
        <?endforeach;?>
        
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/web/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/web/style.css"/>
        
        
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <style>
            #header_yahoo
{
	background-image:url(http://seventhsoft.net/image/bg-side.gif);
	border-radius: .6em;
	background-repeat: repeat-x;
	height:30px;
	color:white;
	margin-bottom: 10px;
}
#isi_yahoo
{
	text-align:center;
	border-style:solid;
	border-width:0.1em;
	border-radius: .6em;
        background-color: white;
        width: 180px;
}
#isi_yahoo h3
{
	text-align:center;
	font-size:11pt;
}
        </style>
</head>

<body>

<div class="container" id="page">

	<div id="header">
            <div id="logo">
                
            </div>
            <!-- header -->
	<div id="mainmenu">
	<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'pills',
    'stacked'=>false,
    'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index'), 'icon'=>'icon-home'),
                array('label'=>'About Us','icon'=>'icon-briefcase', 'items'=>array(
                    array('label'=>'Company Profile', 'url'=>array('/site/page', 'view'=>'profile')), 
                    array('label'=>'Contact Us', 'url'=>array('/site/contact')),
            )),
                array('label'=>'Customers', 'url'=>array('/customer/index'), 'icon'=>'icon-bullhorn'),
                array('label'=>'Partners', 'url'=>array('/partner/index'), 'icon'=>'icon-qrcode'),
                array('label'=>'Advertising', 'url'=>array('/advertising/index'),'icon'=>'icon-tasks'),
                array('label'=>'News', 'url'=>array('/webnews/index'),'icon'=>'icon-globe'),
                array('label'=>'Download','icon'=>'icon-download', 'url'=>array('/download/index')),
                array('label'=>'Login', 'url'=>array('/site/login'),'visible'=>Yii::app()->user->isGuest,'icon'=>'icon-leaf'),
                array('label'=>'Sign Up', 'url'=>array('/users/signup'),'icon'=>'icon-tint','visible'=>Yii::app()->user->isGuest),
		array('label'=>'My Profile', 'icon'=>'icon-bookmark','visible'=>!Yii::app()->user->isGuest, 'items'=>array(
                    array('label'=>'Profile '.Yii::app()->user->name.'', 'url'=>array('/users/profile'), 'icon' => 'icon-user'),
                    array('label'=>'Nota', 'url'=>array('salesorder/index'),'icon'=>'icon-barcode'),
                    array('label'=>'Ganti Password', 'url'=>array('/users/changePassword','id'=>Yii::app()->user->id), 'icon' => 'icon-wrench'),
                    array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest,'icon'=>'icon-off')
                ))   ),
)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
                    
            <?php echo $content; ?>        
                </div>
                <div class="clear"> </div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by JSource<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
