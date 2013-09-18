<?php
/* @var $this BugTypeController */
/* @var $model BugType */

$this->breadcrumbs=array(
	'Bug Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BugType', 'url'=>array('index')),
	array('label'=>'Create BugType', 'url'=>array('create')),
	array('label'=>'View BugType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BugType', 'url'=>array('admin')),
);
?>

<h1>Update BugType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>