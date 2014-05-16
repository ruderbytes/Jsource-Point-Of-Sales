<?php
/* @var $this KmDetailsController */
/* @var $data KmDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('km_id')); ?>:</b>
	<?php echo CHtml::encode($data->km_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_out')); ?>:</b>
	<?php echo CHtml::encode($data->name_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount_money_out')); ?>:</b>
	<?php echo CHtml::encode($data->amount_money_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	*/ ?>

</div>