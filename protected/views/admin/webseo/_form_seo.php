<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'webseo-form',
	'enableAjaxValidation'=>false,
)); ?>

    <table>
        <tr>
            <td width="300px"><?php echo $form->labelEx($model,'name_of_website'); ?></td>
            <td><?php echo $form->textField($model,'name_of_website',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name_of_website'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'motto'); ?></td>
            <td><?php echo $form->textField($model,'motto',array('size'=>60,'maxlength'=>190)); ?>
		<?php echo $form->error($model,'motto'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'keywords'); ?>
            Isikan beberapa kata yang berhubungan dengan website anda. Pisahkan kata tersebut dengan tanda koma ( , ).
(Contoh: Toko Online, Toko Buku, Buku, Book, Book Store, dan seterusnya)</td>
            <td><?php echo $form->textArea($model,'keywords',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keywords'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'author'); ?>
            Tuliskan Nama dan atau alamat email administrator website
(Contoh: Admin - admin@situsku.com)</td>
            <td><?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'author'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'favicon'); ?></td>
            <td><?php echo $form->textField($model,'favicon',array('size'=>60,'maxlength'=>160)); ?>
		<?php echo $form->error($model,'favicon'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'website_desc'); ?>
            Deskripsikan mengenai website anda dalam beberapa kata yang bermakna. 
(Contoh: Situs jual beli toko buku secara online).</td>
            <td><?php echo $form->textArea($model,'website_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'website_desc'); ?></td>
        </tr>
        <tr>
            <td><?php echo $form->labelEx($model,'language'); ?></td>
            <td><?php echo $form->dropDownList($model,'language', CHtml::listData(Language::model()->findAll(), 'langid', 'langdesc')); ?>
		<?php echo $form->error($model,'language'); ?></td>
        </tr>
    </table>
    
    
	<?php echo $form->errorSummary($model); ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->