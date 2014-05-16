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
		<?php echo $form->label($model,'webnews_title'); ?>
		<?php echo $form->textField($model,'webnews_title',array('size'=>60,'maxlength'=>160)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webnews_created_at'); ?>
		<?php echo $form->textField($model,'webnews_created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webnews_updated_at'); ?>
		<?php echo $form->textField($model,'webnews_updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webnews_created_by'); ?>
		<?php echo $form->textField($model,'webnews_created_by',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webnews_updated_by'); ?>
		<?php echo $form->textField($model,'webnews_updated_by',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->