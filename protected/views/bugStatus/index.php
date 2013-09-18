<?php
/* @var $this BugStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bug Statuses',
);

$this->menu=array(
	array('label'=>'Create BugStatus', 'url'=>array('create')),
	array('label'=>'Manage BugStatus', 'url'=>array('admin')),
);
?>

<h1>Bug Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
