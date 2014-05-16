<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pelunasan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_so'); ?>
		<?php /*echo $form->dropDownList($model,'no_so', CHtml::listData(SalesOrder::model()->findAll(array(
                    'select'=>'*',
                    'condition'=>'status_beli=:idapp',
                    'params'=>array(':idapp'=>'belum lunas'),   
                )), 'id', 'id')); */?>
            <?php echo $form->dropDownList($model, 'no_so', SalesOrder::model()->ambilStatusBeli(),array('disabled'=> $model->isNewRecord ? '' : 'true')); ?>
		<?php echo $form->error($model,'no_so'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_pelunasan'); ?>
		<?php /* echo $form->textField($model,'tgl_pelunasan'); */?>
                <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                $this->widget('CJuiDateTimePicker',array(
                       'model'=>$model,
                       'language'=>'id',
                       'attribute'=>'tgl_pelunasan',
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
		<?php echo $form->error($model,'tgl_pelunasan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_bayar'); ?>
		<?php echo $form->textField($model,'total_bayar'); ?>
		<?php echo $form->error($model,'total_bayar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Lunasi'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->