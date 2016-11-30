<?php
/* @var $this MentionProcesoController */
/* @var $data TblMentionProceso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mentions')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mentions), array('view', 'id'=>$data->id_mentions)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bitacora')); ?>:</b>
	<?php echo CHtml::encode($data->id_bitacora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_proceso')); ?>:</b>
	<?php echo CHtml::encode($data->id_proceso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_hora')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario_mention')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario_mention); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>