<div class="form-input">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sales-order-form',
	'enableAjaxValidation'=>false,
)); ?>

    <table>
        <tr>
            <td><?php echo $form->labelEx($model,'customer_name'); ?></td>
            <td><?php echo $form->dropDownList($model,'customer_name', CHtml::listData(Customer::model()->findAll(), 'id_cus', 'cperusahaan')); ?></td>
            <td><?php echo $form->error($model,'customer_name'); ?></td>
            <td><?php echo $form->labelEx($model,'needed'); ?></td>
            <td><?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                $this->widget('CJuiDateTimePicker',array(
                       'model'=>$model,
                       'language'=>'id',
                       'attribute'=>'needed',
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
                ?></td>
            <td><?php echo $form->error($model,'needed'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'keterangan'); ?></td>
            <td><?php echo $form->textArea($model,'keterangan',array('rows'=>6, 'cols'=>50)); ?></td>
            <td><?php echo $form->error($model,'keterangan'); ?></td>
            <td><?php echo $form->labelEx($model,'sales_name'); ?></td>
            <td><?php echo $form->dropDownList($model,'sales_name', CHtml::listData(Sales::model()->findAll(), 'sales_name', 'sales_name')); ?></td>
            <td><?php echo $form->error($model,'sales_name'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'tp_payment'); ?></td>
            <td><?php echo $form->dropDownList($model,'tp_payment', CHtml::listData(TpPayment::model()->findAll(), 'id', 'tp_payment')); ?></td>
            <td><?php echo $form->error($model,'tp_payment'); ?></td>
            <td><?php echo $form->labelEx($model,'status'); ?></td>
            <td><?php echo $form->dropDownList($model,'status', CHtml::listData(Status::model()->findAll(), 'status_name', 'status_name')); ?></td>
            <td><?php echo $form->error($model,'status'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><?php echo CHtml::submitButton('Save'); ?></td>
        </tr>
    </table>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>