<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <?
        $fav = Setapp::Model()->findAll(array(
            'select' => '*',
            'condition' => 'id_app=:idapp',
            'params' => array(':idapp' => 1),
        ));
        foreach ($fav as $f):
            ?>
            <link href='<? echo Yii::app()->request->baseUrl . '/images/files_img/' . $f->favicon; ?>' rel='SHORTCUT ICON'/>	
        <? endforeach; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/yiistrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body> 

        <div class="container" id="page">

            <div id="header">
                    <!--<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>!-->
            </div><!-- header -->

            <div id="mainmenu" align="center">
                <?php
                if (Yii::app()->user->isGuest == false) {
                    ?>
                    <table>
                        <tr>
                            <td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/home.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('site/index')); ?><br/><div align="center">DASHBOARD</div></td>
                            <td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/customer.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('customer/index')); ?><br/><div align="center">Customers</div></td>
                            <td><div align="center"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/receipt.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('kasmasuk/index')); ?><br/>Kas Masuk / Kas Keluar</div></td>
                            <td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/payment.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('pelunasan/index')); ?><br/><div align="center">Pelunasan</div></td>
                            <td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/i-tems.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('item/index')); ?><br/><div align="center">Items</div></td>
                            <td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/switch.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('site/oneway')); ?><br/><div align="center">Pengelolaan</div></td>
                            <td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/buy.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('salesorder/index')); ?><br/><div align="center">Sales Order</div></td>
                            <td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/users.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('users/profile')); ?><br/><div align="center">Profile</div></td>
                            <td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/config.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('setapp/index')); ?><br/><div align="center">App Config</div></td>
                            <td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/logout.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('site/logout')); ?><br/><div align="center">Logout</div></td>
                        </tr>
                    </table>
                <? }
                ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--<?
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/home.png', CHtml::encode(Yii::app()->name), array('width' => 48, 'height' => 48)), array('site/index'), array('title' => 'Dashboard', 'rel' => 'tooltip', 'data-placement' => 'bottom'));
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/customers.png'), array('customers/index'), array('title' => 'Customers', 'rel' => 'tooltip', 'data-placement' => 'bottom'));
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/suppliers.png'), array('suppliers/index'), array('title' => 'Suppliers', 'rel' => 'tooltip', 'data-placement' => 'bottom'));
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/items.png'), array('item/index'), array('title' => 'Items', 'rel' => 'tooltip', 'data-placement' => 'bottom'));
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/employees.png'), array('users/index'), array('title' => 'Users', 'rel' => 'tooltip', 'data-placement' => 'bottom'));
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/config.png'), array('setapp/index'), array('title' => 'App Config', 'rel' => 'tooltip', 'data-placement' => 'bottom'));
                ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'Home', 'url' => array('/site/index')),
                        array('label' => 'Produk', 'url' => array('/item/index')),
                        array('label' => 'App Config', 'url' => array('/setapp/index')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                ?>!-->
            </div><!-- mainmenu -->
            <br/>
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                <?
                $cright = Setapp::Model()->findAll(array(
                    'select' => '*',
                    'condition' => 'id_app=:idapp',
                    'params' => array(':idapp' => 1),
                ));
                foreach ($cright as $cr):
                    ?>
                    <link href='<? echo Yii::app()->request->baseUrl . '/images/favicon/' . $cr->favicon; ?>' rel='SHORTCUT ICON'/>
                    <font color="white">Copyright &copy; <?php echo date('Y'); ?> by <?= $cr->namaapp ?>.</font><br/>
                <? endforeach; ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
