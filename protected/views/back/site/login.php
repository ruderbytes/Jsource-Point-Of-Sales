<?php
$welcome=Setapp::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id_app=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($welcome as $namaapp): 
    $this->pageTitle="Login | ".$namaapp->namaapp;
?>
<table>
    <tr>
        <td width="70px"><?php
    echo "<div align='center'><font size='6'>".$namaapp->namaapp."</font><br/><font size='3'>".$namaapp->judulatas."</font></div>
        <br/>";
?></td>
        <td width="30px"><?echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl . '/images/files_img/'.$namaapp->gambar,CHtml::encode(Yii::app()->name)), array('site/index'),array('title'=>$files->judulatas,'rel'=>'tooltip','data-placement'=>'bottom'));?></td>
    </tr>
</table>
    <?php 
    echo "<marquee><font size='1'><span class='label label-info'>".
        $namaapp->textjalan
        ."</span></marquee>";
    ?>
<hr noshade>
<b><font size="5">Login</font></b>
<div class="form">
    
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
	<div >
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',  array('placeholder'=>'Username')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',  array('placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
    
	<div>
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="buttons">
                <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login','type' => 'primary')); ?>
	</div>
<?php $this->endWidget(); ?>
</div><!-- form -->

<?php endforeach; ?>