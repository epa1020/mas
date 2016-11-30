<?php
/* @var $this BitacorasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Bitacorases',
);

$this->menu=array(
	array('label'=>'Create TblBitacoras', 'url'=>array('create')),
	array('label'=>'Manage TblBitacoras', 'url'=>array('admin')),
);
?>

<h1>Tbl Bitacorases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
