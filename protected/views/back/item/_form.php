<div class="form-input">
<div class="table">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>
    <table>
        <tr>
            <td><?php echo $form->labelEx($model,'ITEM_CODE'); ?></td>
            <td><?php echo $form->textField($model,'ITEM_CODE',array('size'=>40,'maxlength'=>40,'rel'=>'tooltip', 'placeholder'=>'Required','data-placement'=>'right')); ?></td>
            <td><?php echo $form->error($model,'ITEM_CODE'); ?></td>
            <td><?php echo $form->labelEx($model,'ITEM_NAME'); ?></td>
            <td><?php echo $form->textField($model,'ITEM_NAME',array('size'=>60,'maxlength'=>80, 'placeholder'=>'Required')); ?></td>
            <td><?php echo $form->error($model,'ITEM_NAME'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'ITEM_DESCRIPTION'); ?></td>
            <td><?php echo $form->textField($model,'ITEM_DESCRIPTION',array('size'=>60,'maxlength'=>80)); ?></td>
            <td><?php echo $form->error($model,'ITEM_DESCRIPTION'); ?></td>
            <td><?php echo $form->labelEx($model,'BARCODE'); ?></td>
            <td><?php echo $form->textField($model,'BARCODE',array('size'=>40,'maxlength'=>40, 'placeholder'=>'Required')); ?></td>
            <td><?php echo $form->error($model,'BARCODE'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'UOM_CODE'); ?></td>
            <td><?php echo $form->textField($model,'UOM_CODE',array('size'=>18,'maxlength'=>18)); ?></td>
            <td><?php echo $form->error($model,'UOM_CODE'); ?></td>
            <td><?php echo $form->labelEx($model,'MIN_STOCK'); ?></td>
            <td><?php echo $form->textField($model,'MIN_STOCK'); ?></td>
            <td><?php echo $form->error($model,'MIN_STOCK'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'ACTIVE_FLAG'); ?></td>
            <td><?php echo $form->dropDownList($model,'ACTIVE_FLAG',array(
                'Y'=>'Yes',
                'N'=>'No',
                ));?>
            <td><?php echo $form->error($model,'ACTIVE_FLAG'); ?></td>
            <td><?php echo $form->labelEx($model,'GAMBAR'); ?></td>
            <td><?php echo $form->fileField($model,'GAMBAR',array('size'=>60,'maxlength'=>80)); ?></td>
            <td><?php echo $form->error($model,'GAMBAR'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'NOTE'); ?></td>
            <td><?php echo CHtml::activeTextArea($model,'NOTE',array('rows'=>6, 'cols'=>50)); ?></td>
            <td><?php echo $form->error($model,'NOTE'); ?></td>
            <td><?php echo $form->labelEx($model,'price'); ?></td>
            <td><?php echo $form->numberField(PriceList::model(),'price',array('size'=>60,'maxlength'=>240)); ?></td>
            <td><?php echo $form->error($model,'price'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <?php echo CHtml::submitButton('Save'); ?>
                </td> 
                <td></td>
        </tr>
    </table>
<?php $this->endWidget(); ?>
</div>
</div>