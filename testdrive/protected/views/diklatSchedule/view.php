<?php
/* @var $this DiklatScheduleController */
/* @var $model DiklatSchedule */

$this->breadcrumbs=array(
	'Diklat Schedules'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DiklatSchedule', 'url'=>array('index')),
	array('label'=>'Create DiklatSchedule', 'url'=>array('create')),
	array('label'=>'Update DiklatSchedule', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DiklatSchedule', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DiklatSchedule', 'url'=>array('admin')),
);
?>

<h1>View DiklatSchedule #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'place',
		'startDate',
		'endDate',
		'date',
		'kapasitas',
		'created_at',
		'update_at',
	),
)); ?>
