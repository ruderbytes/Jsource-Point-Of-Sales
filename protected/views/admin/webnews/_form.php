<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'webnews-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'webnews_title'); ?>
		<?php echo $form->textField($model,'webnews_title',array('size'=>60,'maxlength'=>160)); ?>
		<?php echo $form->error($model,'webnews_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'webnews_content'); ?>
		<?php $this->widget('application.extensions.cleditor.ECLEditor', array(
			'model'=>$model,
			'attribute'=>'webnews_content',
			'options'=>array(
				'width'=>'700',
				'height'=>250,
				'useCSS'=>true,
			),
			'value'=>$model->webnews_content,));
		?>
		<?php echo $form->error($model,'webnews_content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->