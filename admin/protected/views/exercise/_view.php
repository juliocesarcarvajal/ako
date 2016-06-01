<?php
/* @var $this ExerciseController */
/* @var $data Exercise */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exercise_description')); ?>:</b>
	<?php echo CHtml::encode($data->exercise_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paragarph_one')); ?>:</b>
	<?php echo CHtml::encode($data->paragarph_one); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paragarph_two')); ?>:</b>
	<?php echo CHtml::encode($data->paragarph_two); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />


</div>