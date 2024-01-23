<?php
/* @var $this DiklatScheduleController */
/* @var $model DiklatSchedule */

$this->breadcrumbs=array(
	'Diklat Schedules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DiklatSchedule', 'url'=>array('index')),
	array('label'=>'Manage DiklatSchedule', 'url'=>array('admin')),
);
?>

<h1>Create DiklatSchedule</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>