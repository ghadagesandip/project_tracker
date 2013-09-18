<?php
/* @var $this ProjectUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Project Users',
);

$this->menu=array(
	array('label'=>'Create ProjectUser', 'url'=>array('create')),
	array('label'=>'Manage ProjectUser', 'url'=>array('admin')),
);
?>

<h1>Project Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
