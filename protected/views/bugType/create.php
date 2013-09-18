<?php
/* @var $this BugTypeController */
/* @var $model BugType */

$this->breadcrumbs=array(
	'Bug Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BugType', 'url'=>array('index')),
	array('label'=>'Manage BugType', 'url'=>array('admin')),
);
?>

<h1>Create BugType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>