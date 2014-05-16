<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id_sup'); ?>
		<?php echo $form->textField($model,'Id_sup'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'No_Account'); ?>
		<?php echo $form->textField($model,'No_Account'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Perusahaan'); ?>
		<?php echo $form->textField($model,'Perusahaan',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat1'); ?>
		<?php echo $form->textArea($model,'alamat1',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat2'); ?>
		<?php echo $form->textArea($model,'alamat2',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_pos'); ?>
		<?php echo $form->textField($model,'kode_pos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kota'); ?>
		<?php echo $form->textField($model,'kota',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provinsi'); ?>
		<?php echo $form->textField($model,'provinsi',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->