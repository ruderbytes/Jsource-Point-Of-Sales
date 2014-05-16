<?php
/* @var $this WebseoController */
/* @var $model Webseo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_of_website'); ?>
		<?php echo $form->textField($model,'name_of_website',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motto'); ?>
		<?php echo $form->textField($model,'motto',array('size'=>60,'maxlength'=>190)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keywords'); ?>
		<?php echo $form->textArea($model,'keywords',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'favicon'); ?>
		<?php echo $form->textField($model,'favicon',array('size'=>60,'maxlength'=>160)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'website_desc'); ?>
		<?php echo $form->textArea($model,'website_desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'about'); ?>
		<?php echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact'); ?>
		<?php echo $form->textArea($model,'contact',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->