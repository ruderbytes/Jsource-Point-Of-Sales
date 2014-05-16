<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'language-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'langid'); ?>
		<?php echo $form->textField($model,'langid',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'langid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'langdesc'); ?>
		<?php echo $form->textField($model,'langdesc',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'langdesc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->