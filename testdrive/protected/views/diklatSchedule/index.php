<?php
/* @var $this DiklatScheduleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Diklat Schedules',
);

$this->menu=array(
	array('label'=>'Create DiklatSchedule', 'url'=>array('create')),
	array('label'=>'Manage DiklatSchedule', 'url'=>array('admin')),
);
?>

<h1>Diklat Schedules</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
