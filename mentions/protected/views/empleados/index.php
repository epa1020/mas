<?php
/* @var $this EmpleadosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Empleadoses',
);

$this->menu=array(
	array('label'=>'Create TblEmpleados', 'url'=>array('create')),
	array('label'=>'Manage TblEmpleados', 'url'=>array('admin')),
);
?>

<h1>Tbl Empleadoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
