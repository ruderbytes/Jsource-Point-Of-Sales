<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tp-payment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tp_payment'); ?>
		<?php echo $form->textField($model,'tp_payment',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tp_payment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->