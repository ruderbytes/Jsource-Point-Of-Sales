<?php
$this->pageTitle=Yii::app()->name . ' - Login';
?>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      .right{
          text-align: right;
      }
    </style>

    <div class="container">

      <div class="form-signin">
          <h1>Cpanel</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="input-block-level">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',  array( 'placeholder'=>'Username')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

        <div class="input-block-level">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',  array('placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::htmlButton('<i class="fam-accept"></i> Login', array('class' => 'btn btn-primary', 'type' => 'submit')); ?>
	</div>
<?php $this->endWidget(); ?>
</div>
      </div>

    </div> <!-- /container -->

  
