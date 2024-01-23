<?php
/* @var $this DiklatScheduleController */
/* @var $model DiklatSchedule */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'diklat-schedule-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'place'); ?>
		<?php echo $form->textField($model,'place',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
		<?php echo $form->error($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
		<?php echo $form->error($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kapasitas'); ?>
		<?php echo $form->textField($model,'kapasitas'); ?>
		<?php echo $form->error($model,'kapasitas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_at'); ?>
		<?php echo $form->textField($model,'update_at'); ?>
		<?php echo $form->error($model,'update_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->