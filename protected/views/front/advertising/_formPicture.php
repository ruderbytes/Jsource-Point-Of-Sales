<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'advertising-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->fileField($model,'avatar',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->