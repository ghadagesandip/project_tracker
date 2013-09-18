<?php
/* @var $this BugStatusController */
/* @var $model BugStatus */

$this->breadcrumbs=array(
	'Bug Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BugStatus', 'url'=>array('index')),
	array('label'=>'Manage BugStatus', 'url'=>array('admin')),
);
?>

<h1>Create BugStatus</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>