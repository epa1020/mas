<?php
/* @var $this EmpleadosController */
/* @var $model TblEmpleados */

$this->breadcrumbs=array(
	'Tbl Empleadoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblEmpleados', 'url'=>array('index')),
	array('label'=>'Manage TblEmpleados', 'url'=>array('admin')),
);
?>

<h1>Create TblEmpleados</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>