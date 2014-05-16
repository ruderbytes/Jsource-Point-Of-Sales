<div align="right">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Buat Employee','url'=>array('employee/create')),
       array('label'=>'Admin','url'=>array('employee/admin')),
    ),
));
    ?>
</div>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP'); ?>
		<?php echo $form->error($model,'NIP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_name'); ?>
		<?php echo $form->textField($model,'employee_name',array('size'=>60,'maxlength'=>65)); ?>
		<?php echo $form->error($model,'employee_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_telp'); ?>
		<?php echo $form->textField($model,'no_telp',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'no_telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addess'); ?>
		<?php echo $form->textArea($model,'addess',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'addess'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->