<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'webseo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php
                $this->widget('application.extensions.cleditor.ECLEditor', array(
                'model'=>$model,
                'attribute'=>'contact',
                'options'=>array(
                    'width'=>'600',
                    'height'=>250,
                    'useCSS'=>true,
                    ),
                    'value'=>$model->contact,
                ));
                ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

        <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->