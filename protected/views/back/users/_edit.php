<div class="form-input">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>
    <table>
        <tr>
            <td><?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'fname'); ?></td>
            <td><?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'lname'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?></td>
            <td><?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo CHtml::submitButton('Save'); ?>
            </td>
        </tr>
    </table>
<?php $this->endWidget(); ?>

</div><!-- form -->