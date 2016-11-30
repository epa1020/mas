<?php
/* @var $this EmpleadosController */
/* @var $model TblEmpleados */

$this->breadcrumbs=array(
	'Tbl Empleadoses'=>array('index'),
	$model->id_empleado,
);

$this->menu=array(
	array('label'=>'List TblEmpleados', 'url'=>array('index')),
	array('label'=>'Create TblEmpleados', 'url'=>array('create')),
	array('label'=>'Update TblEmpleados', 'url'=>array('update', 'id'=>$model->id_empleado)),
	array('label'=>'Delete TblEmpleados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_empleado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblEmpleados', 'url'=>array('admin')),
);
?>

<h1>View TblEmpleados #<?php echo $model->id_empleado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_empleado',
		'nombre',
		'tipo_empleado',
	),
)); ?>
