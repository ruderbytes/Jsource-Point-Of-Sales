<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kas-masuk-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
                <?php echo $form->dropDownList($model,'person_id', CHtml::listData(Employee::model()->findAll(), 'id', 'employee_name')); ?>
		<?php echo $form->error($model,'person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'money_in'); ?>
		<?php echo $form->textField($model,'money_in'); ?>
		<?php echo $form->error($model,'money_in'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'desc'); ?>
		<?php echo $form->textField($model,'desc'); ?>
		<?php echo $form->error($model,'desc'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'saldo'); ?>
		<?php echo $form->textField($model,'saldo'); ?>
		<?php echo $form->error($model,'saldo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_in'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                $this->widget('CJuiDateTimePicker',array(
                       'model'=>$model,
                       'language'=>'id',
                       'attribute'=>'date_in',
                       'mode'=>'datetime',
                       'options'=>array(
                           'dateFormat'=>'yy-mm-dd',
                           'timeFormat'=>'hh:mm:ss',
                           'showSecond'=>true,
                           'changeMonth'=>false,
                           'changeYear'=>false,
                           'tabularLevel'=>null,
                        ),
                ));
                ?>
		<?php echo $form->error($model,'date_in'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->