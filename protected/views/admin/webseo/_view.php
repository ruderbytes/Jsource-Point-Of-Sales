<?php
/* @var $this WebseoController */
/* @var $data Webseo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_of_website')); ?>:</b>
	<?php echo CHtml::encode($data->name_of_website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motto')); ?>:</b>
	<?php echo CHtml::encode($data->motto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords')); ?>:</b>
	<?php echo CHtml::encode($data->keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('favicon')); ?>:</b>
	<?php echo CHtml::encode($data->favicon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website_desc')); ?>:</b>
	<?php echo CHtml::encode($data->website_desc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('language')); ?>:</b>
	<?php echo CHtml::encode($data->language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about')); ?>:</b>
	<?php echo CHtml::encode($data->about); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br />

	*/ ?>

</div>