
data_users=JSON.parse(data_users);
$('textarea.mention-example2').mentionsInput({source: data_users})
$('.get-mentions').click(function(){

var objeto =new Object();

    objeto.idusuariocrea=$('#usercrea').data('usuario');
    objeto.idcaso=$('#idcaso').data('caso');
    //objeto.texto=$('textarea.mention-example2').mentionsInput('getValue');
    objeto.texto=$('textarea.mention-example2').mentionsInput('getMentions');
    $('#respuesta').html(JSON.stringify(objeto));

});



$('.get-syntax-text').click(function(){
  $('#respuesta').html($('textarea.mention-example2').mentionsInput('getValue'));
});



$('.asigna').click(function(){
  $('#respuesta').html($('textarea.mention-example2').mentionsInput('setValue','hola te dice @[angry birds](game:5)'));
});



