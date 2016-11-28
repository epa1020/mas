<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1>Menciona a alguien</h1>

<button class="get-mentions">Ver Menciones</button>

<button class="get-syntax-text">Ver sintaxis</button>

<div class="examples">
  <textarea class='mention-example2' placeholder='Try to mention me, by typing @ken'></textarea>
</div>

