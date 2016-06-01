<?php
/* @var $this ExerciseController */
/* @var $model Exercise */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'exercise-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exercise_description'); ?>
		<?php echo $form->textField($model,'exercise_description',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'exercise_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paragarph_one'); ?>
		<?php echo $form->textField($model,'paragarph_one',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'paragarph_one'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paragarph_two'); ?>
		<?php echo $form->textField($model,'paragarph_two',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'paragarph_two'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->