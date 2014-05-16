<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'setapp-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'namaapp'); ?>
		<?php echo $form->textField($model,'namaapp',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'namaapp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judulatas'); ?>
		<?php echo $form->textField($model,'judulatas',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'judulatas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'textjalan'); ?>
		<?php echo $form->textField($model,'textjalan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'textjalan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gambar'); ?>
                <?php echo $form->dropDownList($model,'gambar', CHtml::listData(Gambar::model()->findAll(), 'file_gbr', 'judu_gbr')); ?>
		<!--<?php echo $form->textField($model,'gambar',array('size'=>60,'maxlength'=>100)); ?>!-->
		<?php echo $form->error($model,'gambar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'favicon'); ?>
                <?php echo $form->dropDownList($model,'favicon', CHtml::listData(Gambar::model()->findAll(), 'file_gbr', 'file_gbr')); ?>
		<!--<?php echo $form->textField($model,'favicon',array('size'=>60,'maxlength'=>100)); ?>!-->
		<?php echo $form->error($model,'favicon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notefortoday'); ?>
		<?php echo $form->textArea($model,'notefortoday',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notefortoday'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->