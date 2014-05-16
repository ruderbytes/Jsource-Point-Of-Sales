<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sales-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sales_name'); ?>
		<?php echo $form->textField($model,'sales_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'sales_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posisi'); ?>
		<?php echo $form->textField($model,'posisi',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'posisi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->