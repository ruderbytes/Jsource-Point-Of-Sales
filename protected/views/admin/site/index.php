<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle=".:Admin Panel:. | ".$files->name_of_website;
?>
<style>
#seventhsoft {
        background-color: #758cb8;
        background-image: url("<?php echo Yii::app()->request->baseUrl?>/css/frontcss/");
        background-position: center;
        background-repeat: no-repeat;
        height: 120px;
        border: 2px solid #58617e;
        margin: 4px 0px;
}
</style>    
<?
endforeach;
?>
<div id="seventhsoft"></div>
<?php $this->beginWidget('CHtmlPurifier'); ?>
<table align="center">
    <tr  class="blue-gbr">
        <td ><center>Edit Profile</center></td>
        <td ><center>Ganti Password</center></td>
        <td ><center>Members</center></td>
        <td ><center>News</center></td>
    </tr>
    <tr>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/profile.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('users/update', 'id'=>Yii::app()->user->id), array('title'=>'Edit Profile','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/change.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('users/changePassword', 'id'=>Yii::app()->user->id), array('title'=>'Ganti Password','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/group.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('users/manage'), array('title'=>'Members','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/newspaper.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('webnews/manage'), array('title'=>'News','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>
    </tr>
    </table>
<table align="center">
    <tr  class="blue-gbr">
        <td ><center>Advertising</center></td>
        <td ><center>About Us</center></td>
        <td ><center>Download</center></td>
    </tr>
    <tr>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/advertising.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('advertising/index'), array('title'=>'Advertising','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/about.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('site/page', 'view'=>'about'), array('title'=>'About Us','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/download.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('download/index', 'id'=>Yii::app()->user->id), array('title'=>'Download','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>
    </tr>
</table>
<table align="center">
    <tr  class="blue-gbr">
        <td ><center>Pengaturan</center></td>
        <td ><center>File Manager</center></td>
        <td ><center>Logout</center></td>
    </tr>
    <tr>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/settings.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('webseo/seo'), array('title'=>'Pengaturan / Setting','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/file_manager.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('gambar/index'), array('title'=>'File Manager','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>
        <td><center><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/icon/logout.png',CHtml::encode(Yii::app()->name),array('width'=>48,'height'=>48)), array('site/logout'), array('title'=>'Logout','rel'=>'tooltip','data-placement'=>'bottom')); ?></center></td>        
    </tr>
</table>

<?php $this->endWidget(); ?>