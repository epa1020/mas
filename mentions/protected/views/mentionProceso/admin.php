<?php
/* @var $this MentionProcesoController */
/* @var $model TblMentionProceso */

$this->breadcrumbs=array(
	'Tbl Mention Procesos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblMentionProceso', 'url'=>array('index')),
	array('label'=>'Create TblMentionProceso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-mention-proceso-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbl Mention Procesos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-mention-proceso-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_bitacora',
		'id_usuario',
		'id_proceso',
		'fecha_hora',
		'id_usuario_mention',
		'estado',
		/*
		'id_mentions',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
