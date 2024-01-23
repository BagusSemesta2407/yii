<?php
/* @var $this DiklatScheduleController */
/* @var $model DiklatSchedule */

$this->breadcrumbs=array(
	'Diklat Schedules'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiklatSchedule', 'url'=>array('index')),
	array('label'=>'Create DiklatSchedule', 'url'=>array('create')),
	array('label'=>'View DiklatSchedule', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DiklatSchedule', 'url'=>array('admin')),
);
?>

<h1>Update DiklatSchedule <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>