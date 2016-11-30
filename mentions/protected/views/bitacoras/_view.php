<?php
/* @var $this BitacorasController */
/* @var $data TblBitacoras */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bitacora')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bitacora), array('view', 'id'=>$data->id_bitacora)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario_mention')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario_mention); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contenido')); ?>:</b>
	<?php echo CHtml::encode($data->contenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_hora')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_hora); ?>
	<br />


</div>