<?php
/* @var $this SoDetailsController */
/* @var $model SoDetails */
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
		<?php echo $form->label($model,'item_code'); ?>
		<?php echo $form->textField($model,'item_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_name'); ?>
		<?php echo $form->textField($model,'item_name',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'so_id'); ?>
		<?php echo $form->textField($model,'so_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_price'); ?>
		<?php echo $form->textField($model,'c_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty'); ?>
		<?php echo $form->textField($model,'qty',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->