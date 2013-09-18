<?php
/* @var $this BugStatusController */
/* @var $model BugStatus */

$this->breadcrumbs=array(
	'Bug Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BugStatus', 'url'=>array('index')),
	array('label'=>'Create BugStatus', 'url'=>array('create')),
	array('label'=>'View BugStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BugStatus', 'url'=>array('admin')),
);
?>

<h1>Update BugStatus <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>