<div class="table">
        
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>
    <table>
       
        <tr>
            <td><?php echo $form->labelEx($model,'GAMBAR'); ?></td>
            <td><?php echo $form->fileField($model,'GAMBAR',array('size'=>60,'maxlength'=>80)); ?></td>
            <td><?php echo $form->error($model,'GAMBAR'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                </td> 
                <td></td>
        </tr>
    </table>
<?php $this->endWidget(); ?>
</div>