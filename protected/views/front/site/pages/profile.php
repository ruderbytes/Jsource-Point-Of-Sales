<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="Company Profile | ".$files->name_of_website;
endforeach;
?>
    <center><img src="<?php echo Yii::app()->request->baseUrl;?>/images/files_img/profile.jpg" width="100%"></center><br/>
<?php $this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Company Profile',
        'headerIcon' => 'icon-person',
));
   
        $prof=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:web',
        'params'=>array(':web'=>1),
        ));
        foreach($prof as $profile): 
        echo $profile->about;
 endforeach; 
$this->endWidget();?>
        <style>
            .style1 {
	font-size: 20px;
	color: #5a9fec;
}
</style>