<?php
$logo=Webseo::Model()->findAll(array(
        'select'=>'*',
        'condition'=>'id=:idapp',
        'params'=>array(':idapp'=>1),
));
foreach($logo as $files): 
    $this->pageTitle="Login | ".$files->name_of_website;
endforeach;
$this->breadcrumbs=array(
	'Login',
);
?>

<h2>Login</h2>
<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'login-form',
        'type' => 'horizontal',
        'htmlOptions' => array('class' => 'well'),
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
            ));
    ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::htmlButton('<i class="icon-ok-circle icon-white"></i> Login', array('class' => 'btn btn-primary', 'type' => 'submit')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
