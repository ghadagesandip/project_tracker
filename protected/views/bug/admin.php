<?php
/* @var $this BugController */
/* @var $model Bug */

$this->breadcrumbs=array(
	'Bugs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Bug', 'url'=>array('index')),
	array('label'=>'Create Bug', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bug-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bugs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bug-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
            'name'=>'project_id',
            'value'=>'$data->project->name',
            'filter'=>CHtml::listData(Project::model()->findAll(), 'id', 'name'),

        ),
		'title',
		'description',

        array(
            'name'=>'bug_status_id',
            'value'=>'$data->bug_status->bug_status',
            'filter'=>CHtml::listData(BugStatus::model()->findAll(), 'id', 'bug_status'),

        ),
        array(
            'name'=>'bug_type_id',
            'value'=>'$data->bug_type->bug_type',
            'filter'=>CHtml::listData(BugType::model()->findAll(), 'id', 'bug_type'),

        ),
		/*
		'assigned_by',
		'assigned_to',
		'due_date',
		'closed_date',
		'created',
		'modified',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
