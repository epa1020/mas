<?php
/* @var $this EmpleadosController */
/* @var $data TblEmpleados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_empleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_empleado), array('view', 'id'=>$data->id_empleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_empleado')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_empleado); ?>
	<br />


</div>