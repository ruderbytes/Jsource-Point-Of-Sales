<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'download-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'path'); ?>
		<?php echo $form->fileField($model,'path',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc'); ?>
		<?php echo $form->textArea($model,'desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->