$(document).ready(function () {
    // Plugin initialization
    $('.slider').slider({fullWidth: true});
})


$( document ).ready(function(){
      $(".button-collapse").sideNav();
})


$( "#olho" ).mousedown(function() {
  $("#senha").attr("type", "text");
});

$( "#olho" ).mouseup(function() {
  $("#senha").attr("type", "password");
});

var senha = $('#senha');
var olho= $("#olho");

olho.mousedown(function() {
  senha.attr("type", "text");
});

olho.mouseup(function() {
  senha.attr("type", "password");
});
// para evitar o problema de arrastar a imagem e a senha continuar exposta, 
//citada pelo nosso amigo nos comentários
$( "#olho" ).mouseout(function() { 
  $("#senha").attr("type", "password");
});



  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
      