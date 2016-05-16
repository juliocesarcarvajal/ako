<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'Consultar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Está seguro de eliminar este Usuario?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Vista del Usuario: <?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id',
		'created_at',
		'username', 
		#'password',
		'email',
	),
)); ?>
