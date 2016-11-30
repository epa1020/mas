<?php
/* @var $this MentionProcesoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Mention Procesos',
);

$this->menu=array(
	array('label'=>'Create TblMentionProceso', 'url'=>array('create')),
	array('label'=>'Manage TblMentionProceso', 'url'=>array('admin')),
);
?>

<h1>Tbl Mention Procesos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
