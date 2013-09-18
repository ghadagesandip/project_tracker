<?php
/* @var $this BugController */
/* @var $model Bug */

$this->breadcrumbs=array(
	'Bugs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Bug', 'url'=>array('index')),
	array('label'=>'Create Bug', 'url'=>array('create')),
	array('label'=>'Update Bug', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bug', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bug', 'url'=>array('admin')),
);
?>

<h1>View Bug #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'project_id',
		'title',
		'description',
		'bug_type_id',
		'bug_status_id',
		'assigned_by',
		'assigned_to',
		'due_date',
		'closed_date',
		'created',
		'modified',
	),
)); ?>
