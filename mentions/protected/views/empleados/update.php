<?php
/* @var $this EmpleadosController */
/* @var $model TblEmpleados */

$this->breadcrumbs=array(
	'Tbl Empleadoses'=>array('index'),
	$model->id_empleado=>array('view','id'=>$model->id_empleado),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblEmpleados', 'url'=>array('index')),
	array('label'=>'Create TblEmpleados', 'url'=>array('create')),
	array('label'=>'View TblEmpleados', 'url'=>array('view', 'id'=>$model->id_empleado)),
	array('label'=>'Manage TblEmpleados', 'url'=>array('admin')),
);
?>

<h1>Update TblEmpleados <?php echo $model->id_empleado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>