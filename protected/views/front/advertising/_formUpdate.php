<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'advertising-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>225)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_telp'); ?>
		<?php echo $form->textField($model,'no_telp',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'no_telp'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'kota'); ?>
		<?php echo $form->textField($model,'kota',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'kota'); ?>
	</div>
    
        <div class="row">
		<?php echo $form->labelEx($model,'provinsi'); ?>
		<?php echo $form->textField($model,'provinsi',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'provinsi'); ?>
	</div>
    
	<div class="row">
		<?php echo $form->labelEx($model,'isi'); ?>
                <?php
                $this->widget('application.extensions.cleditor.ECLEditor', array(
                'model'=>$model,
                'attribute'=>'isi',
                'options'=>array(
                    'width'=>'600',
                    'height'=>250,
                    'useCSS'=>true,
                    ),
                    'value'=>$model->isi,
                ));
                ?>
		<?php echo $form->error($model,'isi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->