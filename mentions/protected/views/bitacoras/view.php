<?php
/* @var $this BitacorasController */
/* @var $model TblBitacoras */

$this->breadcrumbs=array(
	'Tbl Bitacorases'=>array('index'),
	$model->id_bitacora,
);

$this->menu=array(
	array('label'=>'List TblBitacoras', 'url'=>array('index')),
	array('label'=>'Create TblBitacoras', 'url'=>array('create')),
	array('label'=>'Update TblBitacoras', 'url'=>array('update', 'id'=>$model->id_bitacora)),
	array('label'=>'Delete TblBitacoras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bitacora),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblBitacoras', 'url'=>array('admin')),
);
?>

<h1>View TblBitacoras #<?php echo $model->id_bitacora; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_bitacora',
		'id_usuario_mention',
		'contenido',
		'fecha_hora',
	),
)); ?>
