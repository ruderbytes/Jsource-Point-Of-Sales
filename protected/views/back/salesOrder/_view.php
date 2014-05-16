<div class="view">

        <h4><?php echo CHtml::link(CHtml::encode(Customer::model()->findByPk($data->customer_name)->cperusahaan), array('view', 'id'=>$data->id)); ?></h4>
        <b>Nama Sales:</b>
	<?php echo CHtml::encode($data->sales_name); ?>
	<br />
	Alamat: <?php echo CHtml::encode($data->location); ?>
	<br />

	Dibutuhkan Pada: <?php echo CHtml::encode($data->needed); ?>
	<br />

	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	*/ ?>

</div>