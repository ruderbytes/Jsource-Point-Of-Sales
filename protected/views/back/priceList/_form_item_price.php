<div class="form">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.maskMoney.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function(){
        $("#currency").maskMoney();
    })
    </script>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'price-list-form',
	'enableAjaxValidation'=>false,
)); ?>
    <table>
        <tr>
            <?php echo $form->errorSummary($model); ?>
            <td>	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?><?//,array('id'=>'currency')); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>
</td>
            <td>	<div class="row">
		<?php echo $form->labelEx($model,'from_periode'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                $this->widget('CJuiDateTimePicker',array(
                       'model'=>$model,
                       'language'=>'id',
                       'attribute'=>'from_periode',
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
		<?php echo $form->error($model,'from_periode'); ?>
	</div>
</td>
            <td>	<div class="row">
		<?php echo $form->labelEx($model,'until_periode'); ?>
		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
                $this->widget('CJuiDateTimePicker',array(
                       'model'=>$model,
                       'language'=>'id',
                       'attribute'=>'until_periode',
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
		<?php echo $form->error($model,'until_periode'); ?>
	</div>
</td>
        </tr>
        <tr>
            <td colspan="3"><div class="row buttons" align="right">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div></td>
        </tr>
    </table>

        <?php $this->endWidget(); ?>

</div><!-- form -->