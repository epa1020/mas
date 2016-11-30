<?php
/* @var $this BitacorasController */
/* @var $model TblBitacoras */

$this->breadcrumbs=array(
	'Tbl Bitacorases'=>array('index'),
	$model->id_bitacora=>array('view','id'=>$model->id_bitacora),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblBitacoras', 'url'=>array('index')),
	array('label'=>'Create TblBitacoras', 'url'=>array('create')),
	array('label'=>'View TblBitacoras', 'url'=>array('view', 'id'=>$model->id_bitacora)),
	array('label'=>'Manage TblBitacoras', 'url'=>array('admin')),
);
?>

<h1>Update TblBitacoras <?php echo $model->id_bitacora; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>