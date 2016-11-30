<?php

/* @var $this SiteController */

/* @var $model ContactForm */

/* @var $form CActiveForm */



$this->pageTitle=Yii::app()->name . ' - Mentions';

$this->breadcrumbs=array(

	'Mentions',

);

?>



<h1>Menciona a alguien</h1>



<input id="usercrea" data-usuario="<?php echo $usuario; ?>" type="hidden" name="">

<div class="examples" id="idcaso" data-caso="<?php echo $caso; ?>">

  <textarea cols="40" class='mention-example2' placeholder='Try to mention me, by typing @juan'></textarea>

</div>

<br/>



<button class="get-mentions">Enviar</button>

<button class="get-syntax-text">Ver Texto</button>

<button class="asigna get-syntax-text">Asignar valor</button>

<br/><br/><br/>

<div id="respuesta">

	



</div>
<?php
$info="<script>var data_users='".$data_user."';</script>";
echo $info;
?>
