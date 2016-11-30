<?php
/* @var $this BitacorasController */
/* @var $model TblBitacoras */

$this->breadcrumbs=array(
	'Tbl Bitacorases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblBitacoras', 'url'=>array('index')),
	array('label'=>'Manage TblBitacoras', 'url'=>array('admin')),
);
?>

<h1>Create TblBitacoras</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>