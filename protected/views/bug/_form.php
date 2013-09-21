<?php
/* @var $this BugController */
/* @var $model Bug */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bug-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php echo $form->dropDownList($model,'project_id',CHtml::listData(Project::model()->findAll(), 'id', 'name'), array('prompt'=>'Select Role')); ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bug_type_id'); ?>
		<?php echo $form->dropDownList($model,'bug_type_id',CHtml::listData(BugType::model()->findAll(), 'id', 'bug_type'), array('prompt'=>'Select Role')); ?>
		<?php echo $form->error($model,'bug_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bug_status_id'); ?>
		<?php echo $form->dropDownList($model,'bug_status_id',CHtml::listData(BugStatus::model()->findAll(), 'id', 'bug_status'), array('prompt'=>'Select Role')); ?>
		<?php echo $form->error($model,'bug_status_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assigned_by'); ?>
		<?php echo $form->textField($model,'assigned_by'); ?>
		<?php echo $form->error($model,'assigned_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assigned_to'); ?>
		<?php echo $form->dropDownList($model,'assigned_to',CHtml::listData(User::model()->findAll(), 'id', 'name'), array('prompt'=>'Select Role')); ?>
		<?php echo $form->error($model,'assigned_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'due_date'); ?>
		<?php echo $form->textField($model,'due_date'); ?>
		<?php echo $form->error($model,'due_date'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->