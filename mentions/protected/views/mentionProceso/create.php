<?php
/* @var $this MentionProcesoController */
/* @var $model TblMentionProceso */

$this->breadcrumbs=array(
	'Tbl Mention Procesos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblMentionProceso', 'url'=>array('index')),
	array('label'=>'Manage TblMentionProceso', 'url'=>array('admin')),
);
?>

<h1>Create TblMentionProceso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>