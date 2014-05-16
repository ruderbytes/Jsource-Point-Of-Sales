<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_gbr'); ?>
		<?php echo $form->textField($model,'id_gbr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judu_gbr'); ?>
		<?php echo $form->textField($model,'judu_gbr',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_gbr'); ?>
		<?php echo $form->textField($model,'file_gbr',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uploaded'); ?>
		<?php echo $form->textField($model,'uploaded'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->