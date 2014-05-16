<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'so-details-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_code'); ?>
                <?php echo $form->dropDownList($model,'item_code', CHtml::listData(Item::model()->findAll(), 'ITEM_ID', 'ITEM_NAME')); ?>
		<?php echo $form->error($model,'item_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->