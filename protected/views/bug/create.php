<?php
/* @var $this BugController */
/* @var $model Bug */

$this->breadcrumbs=array(
	'Bugs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bug', 'url'=>array('index')),
	array('label'=>'Manage Bug', 'url'=>array('admin')),
);
?>

<h1>Create Bug</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>