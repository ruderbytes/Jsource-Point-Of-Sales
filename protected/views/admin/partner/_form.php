<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partner-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'No_Account'); ?>
		<?php echo $form->textField($model,'No_Account'); ?>
		<?php echo $form->error($model,'No_Account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Perusahaan'); ?>
		<?php echo $form->textField($model,'Perusahaan',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Perusahaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat1'); ?>
		<?php echo $form->textArea($model,'alamat1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat2'); ?>
		<?php echo $form->textArea($model,'alamat2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_pos'); ?>
		<?php echo $form->textField($model,'kode_pos'); ?>
		<?php echo $form->error($model,'kode_pos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kota'); ?>
		<?php echo $form->textField($model,'kota',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provinsi'); ?>
		<?php echo $form->textField($model,'provinsi',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'provinsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->