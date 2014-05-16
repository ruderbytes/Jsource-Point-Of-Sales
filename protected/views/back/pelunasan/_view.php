<?php
/* @var $this PelunasanController */
/* @var $data Pelunasan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_so')); ?>:</b>
	<?php echo CHtml::encode($data->no_so); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_pelunasan')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_pelunasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_bayar')); ?>:</b>
	<?php echo CHtml::encode($data->total_bayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dibuat_oleh')); ?>:</b>
	<?php echo CHtml::encode($data->dibuat_oleh); ?>
	<br />


</div>