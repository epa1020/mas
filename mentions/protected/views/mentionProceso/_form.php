<?php
/* @var $this MentionProcesoController */
/* @var $model TblMentionProceso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-mention-proceso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bitacora'); ?>
		<?php echo $form->textField($model,'id_bitacora'); ?>
		<?php echo $form->error($model,'id_bitacora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_proceso'); ?>
		<?php echo $form->textField($model,'id_proceso'); ?>
		<?php echo $form->error($model,'id_proceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_hora'); ?>
		<?php echo $form->textField($model,'fecha_hora'); ?>
		<?php echo $form->error($model,'fecha_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario_mention'); ?>
		<?php echo $form->textField($model,'id_usuario_mention'); ?>
		<?php echo $form->error($model,'id_usuario_mention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->