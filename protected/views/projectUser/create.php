<?php
/* @var $this ProjectUserController */
/* @var $model ProjectUser */

$this->breadcrumbs=array(
	'Project Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectUser', 'url'=>array('index')),
	array('label'=>'Manage ProjectUser', 'url'=>array('admin')),
);
?>

<h1>Create ProjectUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>