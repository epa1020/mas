<?php
/* @var $this MentionProcesoController */
/* @var $model TblMentionProceso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_bitacora'); ?>
		<?php echo $form->textField($model,'id_bitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_proceso'); ?>
		<?php echo $form->textField($model,'id_proceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_hora'); ?>
		<?php echo $form->textField($model,'fecha_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario_mention'); ?>
		<?php echo $form->textField($model,'id_usuario_mention'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_mentions'); ?>
		<?php echo $form->textField($model,'id_mentions'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->