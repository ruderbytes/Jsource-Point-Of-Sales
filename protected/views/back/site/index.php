<?php
$logo = Setapp::Model()->findAll(array(
    'select' => '*',
    'condition' => 'id_app=:idapp',
    'params' => array(':idapp' => 1),
        ));
foreach ($logo as $files):
    $this->pageTitle = "DASHBOARD | " . $files->namaapp;
    ?>


    <div class="span4"><font size="4">Selamat Datang <?= CHtml::link(Yii::app()->user->name, array('users/profile'), array('rel' => 'tooltip', 'title' => Yii::app()->user->name)); ?>!</font><br/><br/>
        <b><font size="5">DASHBOARD</font></b>
    </div>
    <div class="span4">
    </div>
    <div align="right">
        <? echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/files_img/' . $files->gambar, CHtml::encode(Yii::app()->name), array('width' => 128)), array('site/index'), array('title' => $files->judulatas, 'rel' => 'tooltip', 'data-placement' => 'bottom')); ?>
    </div>

    <?php if (!Yii::app()->user->isGuest): ?>
        <p>
            Kunjungan Terakhir Pada <?php echo Yii::app()->user->lastLogin; ?>.
        </p>
    <?php endif; ?>



    <hr noshade="none">

    <div class="span3">
        <?
        $this->widget('bootstrap.widgets.TbTabs', array(
            'type' => 'tabs',
            'stacked' => true,
            'tabs' => array(
                array('label' => 'Beranda', 'url' => array('site/index')),
                array('label' => 'Customers', 'url' => array('customer/index')),
                array('label' => 'Sales', 'url' => array('sales/index')),
                array('label' => 'Items', 'url' => array('item/index')),
                array('label' => 'Kas Masuk', 'url' => array('kasmasuk/index')),
                array('label' => 'Sales Order', 'url' => array('salesorder/index')),
                array('label' => 'Users', 'url' => array('users/profile')),
                array('label' => 'App Config', 'url' => array('setapp/index')),
                array('label' => 'Keluar', 'url' => array('site/logout')),
            )
        ));
        ?> 
    </div>
    <div class="span4">
        <?php
        $this->beginWidget('bootstrap.widgets.TbBox', array(
            'title' => 'Recent Added Items',
            'headerIcon' => 'icon-list',
            'headerButtons' => array(
                array(
                    'class' => 'bootstrap.widgets.TbButtonGroup',
                    'type' => 'primary',
                    'buttons' => array(
                        array('items' => array(
                                array('label' => 'Buat Item', 'url' => array('item/index')),
                                array('label' => 'Manage Item', 'url' => array('item/admin')),
                            )),
                    )
                ),
            )
        ));
        $idxitems = Item::Model()->findAll(array(
            'select' => '*',
            'order' => 'ITEM_ID DESC',
            'limit' => 6,
        ));
        foreach ($idxitems as $idxitemsrows):
            echo CHtml::link($idxitemsrows->ITEM_NAME, array('item/view', 'id' => $idxitemsrows->ITEM_ID));
            ?>
            <a href="<?php echo $this->createUrl("enabled",array("id"=>$idxitemsrows->ITEM_ID));?>">
            <span class="label label-<?php echo $idxitemsrows->ACTIVE_FLAG=="Y"?"info":"warning";?>">
            <?php echo $idxitemsrows->ACTIVE_FLAG=="Y"?"Enable":"Disable";?>
            </span>
                </a>
            <?php
            echo "<br/>";
        endforeach;
        $this->endWidget();
        ?>
    </div>
    <div class="span4">
        <?
        $this->beginWidget('bootstrap.widgets.TbBox', array(
            'title' => 'Recent Added Customers',
            'headerIcon' => 'icon-refresh',
            'headerButtons' => array(
                array(
                    'class' => 'bootstrap.widgets.TbButtonGroup',
                    'type' => 'primary',
                    'buttons' => array(
                        array('items' => array(
                                array('label' => 'Buat Customers', 'url' => array('customer/addnew')),
                                array('label' => 'Manage Customers', 'url' => array('customer/index')),
                            )),
                    )
                ),
            )
        ));
        $idcus = Customer::Model()->findAll(array(
            'select' => '*',
            'order' => 'id_cus DESC',
            'limit' => 6,
        ));
        foreach ($idcus as $idcusrows):
            echo CHtml::link($idcusrows->cfname . " " . $idcusrows->clname, array('customer/view', 'id' => $idcusrows->id_cus)) . "<br/>";
        endforeach;
        $this->endWidget();
        ?>
    </div>
    <div class="span4">
        <?
        $this->beginWidget('bootstrap.widgets.TbBox', array(
            'title' => 'Recent Added Employee',
            'headerIcon' => 'icon-thumbs-up',
            'headerButtons' => array(
                array(
                    'class' => 'bootstrap.widgets.TbButtonGroup',
                    'type' => 'primary',
                    'buttons' => array(
                        array('items' => array(
                                array('label' => 'Buat Employee', 'url' => array('employee/create')),
                                array('label' => 'Manage Employee', 'url' => array('employee/admin')),
                            )),
                    )
                ),
            )
        ));
        $idsup = Employee::Model()->findAll(array(
            'select' => '*',
            'order' => 'id DESC',
            'limit' => 6,
        ));
        foreach ($idsup as $idsuprows):
            echo CHtml::link($idsuprows->employee_name, array('employee/view', 'id' => $idsuprows->id)) . "<br/>";
        endforeach;
        $this->endWidget();
        ?>
    </div>

    <div class="span4">
        <?
        $this->beginWidget('bootstrap.widgets.TbBox', array(
            'title' => 'Recent Added Sales',
            'headerIcon' => 'icon-comment',
            'headerButtons' => array(
                array(
                    'class' => 'bootstrap.widgets.TbButtonGroup',
                    'type' => 'primary',
                    'buttons' => array(
                        array('items' => array(
                                array('label' => 'Buat / Manage Sales', 'url' => array('sales/index')),
                            )),
                    )
                ),
            )
        ));
        $idsup = Sales::Model()->findAll(array(
            'select' => '*',
            'order' => 'id DESC',
            'limit' => 6,
        ));
        foreach ($idsup as $idsuprows):
            echo CHtml::link($idsuprows->sales_name, array('#sales')) . "<br/>";
        endforeach;
        $this->endWidget();
        ?>
    </div>

<? endforeach; ?>

<? /*
  $this->widget('bootstrap.widgets.BootGridView', array(
  'id' => 'model-grid',
  'dataProvider' => new CActiveDataProvider('Item',array(
  'criteria'=>array('condition'=>'ITEM_ID >=1'))
  ),
  //  'filter' => $model,
  'columns' => array(
  'ITEM_ID',
  'ITEM_CODE',
  array(
  'class' => 'ext.BootProgressColumn.BootProgressColumn',
  'name' => 'percentage',
  'percent' => 'percentage',
  ),
  ),
  )); */
?>