//Efecto de acordeón
$(function(){
    $(".acordeon").accordion({
      active:false,
      collapsible:true,
      header:"a"
    });
});

//Efecto para redimensionar imágenes
$(function(){
    $("img").resizable({
      animate: true,
      aspectRatio: true,
      ghost: true
    }); 
});

//Efectos checkbox
$(function(){
    $(".gr input").checkboxradio();
    $( "fieldset.gr" ).controlgroup();
});

//Efectos radiobutton
$(function(){
    $(".gr input").checkboxradio();
    $( "fieldset.gr" ).controlgroup({
      direction:"vertical"
    });
});

//Efectos menu select
$(function(){
    $("#goleador").selectmenu();
    $("#laureado").selectmenu();
    $("#balonoro").selectmenu();
});

//Cuadros de dialogo
$(function(){
    $(".mensaje").dialog({
        title: "Datos Fútbol",
        autoOpen:false,
        modal:true,
        buttons: {
            Ok: function() {
                $( this ).dialog( "close" );
                $(".mensaje").empty();
            }
        }
    });

    $(".mensaje" ).on("dialogclose", function() {
        $( this ).dialog( "close" );
        $(".mensaje").empty();
    });

    $(".mostrarDatos").on( "click", function() {
        $(".mensaje").dialog("open");
        $(".mensaje").append("<p>Nombre: "+$("#nombre").val()+"</p>"+
        "<p>Fecha: "+$("#dia").val()+"</p>"+
        "<p>Telefono: "+$("#telefono").val()+"</p>"+
        "<p>Email: "+$("#email").val()+"</p>"+
        "<p>Usuario: "+$("#usuario").val()+"</p>"+
        "<p>Contraseña: "+$("#passwd").val()+"</p>");
    });

    $(".mostrarPreguntas").on( "click", function() {
        $(".mensaje").dialog("open");
        $(".mensaje").append("<p>Exjugador: "+$(".jugadores").checked +"</p>"+
        "<p>Imagen: "+$("#dia").val()+"</p>"+
        "<p>Telefono: "+$("#telefono").val()+"</p>"+
        "<p>Email: "+$("#email").val()+"</p>"+
        "<p>Usuario: "+$("#usuario").val()+"</p>"+
        "<p>Contraseña: "+$("#passwd").val()+"</p>");
    });
});
