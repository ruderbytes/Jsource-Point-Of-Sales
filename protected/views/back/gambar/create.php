<?php
$this->breadcrumbs=array(
	'Gambars'=>array('index'),
	'Create',
);
?>

<h3>Upload Gambar</h3>

<?php if(Yii::app()->user->hasFlash('pupload')): ?>

<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::app()->user->getFlash('pupload'); ?>
</div>
<?php endif;?>

<div align="left">
    <?php
    $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio',
    'buttons' => array(
       array('label'=>'Config','url'=>  array('setapp/index')),
       array('label'=>'Admin','url'=>array('gambar/admin')),
    ),
));
    ?>
</div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>