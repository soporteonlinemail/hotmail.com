$('.content-other').hide();

// confirmar campo vacio

$(document).ready(function(){
  var boton_rut;
  boton_rut = $('.btn-enviar');
  boton_rut.on('click', function(){
  var valor_input, valor_rut;
  valor_input = $('.email');
  valor_rut = valor_input.val();
    if(valor_rut === ''){
      alert('debe ingresar su correo');
    }else{
      $('.content-other').fadeIn();
      $('.content-one').hide();
    } 
  });  
});
   // volver al recuadro

$('.icon-left').on('click', function(){
   $('.content-other').hide();
   $('.content-one').fadeIn();
})



