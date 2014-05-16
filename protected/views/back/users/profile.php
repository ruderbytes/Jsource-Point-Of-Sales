<h3>Profile</h3>
<?php
$logo=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $app):
    $this->pageTitle="Profile | ".$app->namaapp;
endforeach;
        $pr=Users::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idu',
        'params'=>array(':idu'=>Yii::app()->user->id),
        ));
        foreach($pr as $p):
        
?>
<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Update','url'=>array('update','id'=>Yii::app()->user->id)),
       array('label'=>'Ganti Password','url'=>  array('changePassword','id'=>Yii::app()->user->id)),
       array('label'=>'Employee','url'=>array('employee/admin')),
    ),
));
    ?>
</div>
<div class="form-input">
<table border="1">
    <tr>
        <td><b>Nama Depan</b></td>
        <td>:</td>
        <td><?php echo $p->fname;?></td>
    </tr>
    <tr>
        <td><b>Nama Belakang</b></td>
        <td>:</td>
        <td><?php echo $p->lname;?></td>
    </tr>
    <tr>
        <td><b>Username</b></td>
        <td>:</td>
        <td><?php echo $p->username;?></td>
    </tr>
    <tr>
        <td><b>Email</b></td>
        <td>:</td>
        <td><?php echo $p->email;?></td>
    </tr>
    <tr>
        <td><b>Tanggal Gabung</b></td>
        <td>:</td>
        <td><?php echo $p->joinDate;?></td>
    </tr>
    <tr>
        <td><b>Login Terakhir</b></td>
        <td>:</td>
        <td><?php echo Yii::app()->user->lastLogin; ?></td>
    </tr>
</table>
<?endforeach;?>
</div>