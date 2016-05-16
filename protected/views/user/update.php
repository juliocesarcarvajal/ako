<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	#$model->id=>array('view','id'=>$model->id),
	'Actualizar Usuario',
);

$this->menu=array(
	array('label'=>'Consultar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Detalle de Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>
	
<h1>Actualizar Usuario: <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>