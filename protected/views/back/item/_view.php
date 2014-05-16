<?php
/* @var $this ItemController */
/* @var $data Item */
?>

<div class="view">
    
        <b><?php echo CHtml::encode($data->getAttributeLabel('ITEM_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ITEM_ID), array('view', 'id'=>$data->ITEM_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ITEM_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->ITEM_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ITEM_DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->ITEM_DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BARCODE')); ?>:</b>
	<?php echo CHtml::encode($data->BARCODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UOM_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->UOM_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MIN_STOCK')); ?>:</b>
	<?php echo CHtml::encode($data->MIN_STOCK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACTIVE_FLAG')); ?>:</b>
	<?php echo CHtml::encode($data->ACTIVE_FLAG); ?>
	<br />
				</div>
    
	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_BY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LAST_UPDATE_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->LAST_UPDATE_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LAST_UPDATE_BY')); ?>:</b>
	<?php echo CHtml::encode($data->LAST_UPDATE_BY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAMBAR')); ?>:</b>
	<?php echo CHtml::encode($data->GAMBAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOTE')); ?>:</b>
	<?php echo CHtml::encode($data->NOTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ITEM_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->ITEM_NAME); ?>
	<br />

	*/ ?>

</div>