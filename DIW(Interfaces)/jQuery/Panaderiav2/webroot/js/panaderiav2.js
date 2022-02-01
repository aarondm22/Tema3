//Tabla pan, bollería y harina
$( function() {
    $( "#tabla" ).tabs();
});

$( function() {
    $( "#ocultar" ).hover(function(){ //Al clicar en los h1 se mostrara u ocultara como sea
        $(this).hide(1000, callback);
    })();
});

function callback() {
    setTimeout(function() {
      $( "#ocultar" ).removeAttr( "style" ).hide().fadeIn();
    }, 1000 );
};

//Acordeon del Contacto
$(function(){
    $(".acordeon").accordion({
      active:false,
      collapsible:true,
      header:"a"
    });
});