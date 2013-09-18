<?php
/* @var $this BugStatusController */
/* @var $model BugStatus */

$this->breadcrumbs=array(
	'Bug Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BugStatus', 'url'=>array('index')),
	array('label'=>'Create BugStatus', 'url'=>array('create')),
	array('label'=>'Update BugStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BugStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BugStatus', 'url'=>array('admin')),
);
?>

<h1>View BugStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bug_status',
		'created',
		'modified',
	),
)); ?>
