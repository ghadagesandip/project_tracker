<?php
/* @var $this BugTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bug Types',
);

$this->menu=array(
	array('label'=>'Create BugType', 'url'=>array('create')),
	array('label'=>'Manage BugType', 'url'=>array('admin')),
);
?>

<h1>Bug Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
