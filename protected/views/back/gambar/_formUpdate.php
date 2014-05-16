<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gambar-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
<br/>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'judu_gbr'); ?>
		<?php echo $form->textField($model,'judu_gbr',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'judu_gbr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_gbr'); ?>
		<?php echo $form->fileField($model,'file_gbr',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'file_gbr'); ?>
	</div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->