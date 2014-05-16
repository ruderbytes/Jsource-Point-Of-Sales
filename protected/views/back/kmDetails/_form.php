<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'km-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_out'); ?>
		<?php echo $form->textField($model,'name_out',array('size'=>60,'maxlength'=>225)); ?>
		<?php echo $form->error($model,'name_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount_money_out'); ?>
		<?php echo $form->textField($model,'amount_money_out'); ?>
		<?php echo $form->error($model,'amount_money_out'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Add'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->