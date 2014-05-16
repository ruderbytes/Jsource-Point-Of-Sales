<?php
/* @var $this PelunasanController */
/* @var $model Pelunasan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_so'); ?>
		<?php echo $form->textField($model,'no_so'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_pelunasan'); ?>
		<?php echo $form->textField($model,'tgl_pelunasan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_bayar'); ?>
		<?php echo $form->textField($model,'total_bayar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dibuat_oleh'); ?>
		<?php echo $form->textField($model,'dibuat_oleh'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->