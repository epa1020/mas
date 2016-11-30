<?php
/* @var $this MentionProcesoController */
/* @var $model TblMentionProceso */

$this->breadcrumbs=array(
	'Tbl Mention Procesos'=>array('index'),
	$model->id_mentions=>array('view','id'=>$model->id_mentions),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblMentionProceso', 'url'=>array('index')),
	array('label'=>'Create TblMentionProceso', 'url'=>array('create')),
	array('label'=>'View TblMentionProceso', 'url'=>array('view', 'id'=>$model->id_mentions)),
	array('label'=>'Manage TblMentionProceso', 'url'=>array('admin')),
);
?>

<h1>Update TblMentionProceso <?php echo $model->id_mentions; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>