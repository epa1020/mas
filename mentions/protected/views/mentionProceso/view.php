<?php
/* @var $this MentionProcesoController */
/* @var $model TblMentionProceso */

$this->breadcrumbs=array(
	'Tbl Mention Procesos'=>array('index'),
	$model->id_mentions,
);

$this->menu=array(
	array('label'=>'List TblMentionProceso', 'url'=>array('index')),
	array('label'=>'Create TblMentionProceso', 'url'=>array('create')),
	array('label'=>'Update TblMentionProceso', 'url'=>array('update', 'id'=>$model->id_mentions)),
	array('label'=>'Delete TblMentionProceso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_mentions),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblMentionProceso', 'url'=>array('admin')),
);
?>

<h1>View TblMentionProceso #<?php echo $model->id_mentions; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_bitacora',
		'id_usuario',
		'id_proceso',
		'fecha_hora',
		'id_usuario_mention',
		'estado',
		'id_mentions',
	),
)); ?>
