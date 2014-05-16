<div class="view">
	<h4><?php echo CHtml::link(CHtml::encode(Customer::model()->findByPk($data->customer_name)->cperusahaan), array('view', 'id'=>$data->id)); ?></h4>
	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dibutuhkan')); ?>:</b>
	<?php echo CHtml::encode($data->needed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales_name')); ?>:</b>
	<?php echo CHtml::encode($data->sales_name); ?>	
	<br />
</div>