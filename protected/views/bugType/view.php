<?php
/* @var $this BugTypeController */
/* @var $model BugType */

$this->breadcrumbs=array(
	'Bug Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BugType', 'url'=>array('index')),
	array('label'=>'Create BugType', 'url'=>array('create')),
	array('label'=>'Update BugType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BugType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BugType', 'url'=>array('admin')),
);
?>

<h1>View BugType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bug_type',
		'created',
		'modified',
	),
)); ?>
