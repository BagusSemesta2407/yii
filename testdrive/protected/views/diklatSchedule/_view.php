<?php
/* @var $this DiklatScheduleController */
/* @var $data DiklatSchedule */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('place')); ?>:</b>
	<?php echo CHtml::encode($data->place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kapasitas')); ?>:</b>
	<?php echo CHtml::encode($data->kapasitas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_at')); ?>:</b>
	<?php echo CHtml::encode($data->update_at); ?>
	<br />

	*/ ?>

</div>