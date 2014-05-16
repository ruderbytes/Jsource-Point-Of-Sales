<div class="form-input">
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

    <table>
        <tr>
            <td><?php echo $form->labelEx($model,'noaccount'); ?></td>
            <td><?php echo $form->textField($model,'noaccount'); ?>
		<?php echo $form->error($model,'noaccount'); ?></td>
            <td><?php echo $form->labelEx($model,'cperusahaan'); ?></td>
            <td><?php echo $form->textField($model,'cperusahaan',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'cperusahaan'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'cfname'); ?></td>
            <td><?php echo $form->textField($model,'cfname',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'cfname'); ?></td>
            <td><?php echo $form->labelEx($model,'clname'); ?></td>
            <td><?php echo $form->textField($model,'clname',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'clname'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'email'); ?></td>
            <td><?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'email'); ?></td>
            <td><?php echo $form->labelEx($model,'calamat1'); ?></td>
            <td><?php echo $form->textArea($model,'calamat1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'calamat1'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'calamat2'); ?></td>
            <td><?php echo $form->textArea($model,'calamat2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'calamat2'); ?></td>
            <td><?php echo $form->labelEx($model,'ckode_pos'); ?></td>
            <td><?php echo $form->textField($model,'ckode_pos'); ?>
		<?php echo $form->error($model,'ckode_pos'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'ckota'); ?></td>
            <td><?php echo $form->textField($model,'ckota',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ckota'); ?></td>
            <td><?php echo $form->labelEx($model,'cprovinsi'); ?></td>
            <td><?php echo $form->textField($model,'cprovinsi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cprovinsi'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'cdeskripsi'); ?></td>
            <td><?php echo $form->textArea($model,'cdeskripsi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cdeskripsi'); ?></td>
            <td><?php echo CHtml::submitButton('Save'); ?></td>
            <td></td>
        </tr>
    </table>
<?php $this->endWidget(); ?>

</div><!-- form -->
</div>