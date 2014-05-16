<?php
/* @var $this CustomerController */
/* @var $model Customer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'noaccount'); ?>
		<?php echo $form->textField($model,'noaccount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cperusahaan'); ?>
		<?php echo $form->textField($model,'cperusahaan',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cfname'); ?>
		<?php echo $form->textField($model,'cfname',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clname'); ?>
		<?php echo $form->textField($model,'clname',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ckota'); ?>
		<?php echo $form->textField($model,'ckota',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cprovinsi'); ?>
		<?php echo $form->textField($model,'cprovinsi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->