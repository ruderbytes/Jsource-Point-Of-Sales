<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ITEM_ID'); ?>
		<?php echo $form->textField($model,'ITEM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ITEM_CODE'); ?>
		<?php echo $form->textField($model,'ITEM_CODE',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ITEM_DESCRIPTION'); ?>
		<?php echo $form->textField($model,'ITEM_DESCRIPTION',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BARCODE'); ?>
		<?php echo $form->textField($model,'BARCODE',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UOM_CODE'); ?>
		<?php echo $form->textField($model,'UOM_CODE',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MIN_STOCK'); ?>
		<?php echo $form->textField($model,'MIN_STOCK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACTIVE_FLAG'); ?>
		<?php echo $form->textField($model,'ACTIVE_FLAG',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_DATE'); ?>
		<?php echo $form->textField($model,'CREATED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LAST_UPDATE_DATE'); ?>
		<?php echo $form->textField($model,'LAST_UPDATE_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LAST_UPDATE_BY'); ?>
		<?php echo $form->textField($model,'LAST_UPDATE_BY'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GAMBAR'); ?>
		<?php echo $form->textField($model,'GAMBAR',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOTE'); ?>
		<?php echo $form->textField($model,'NOTE',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ITEM_NAME'); ?>
		<?php echo $form->textField($model,'ITEM_NAME',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->