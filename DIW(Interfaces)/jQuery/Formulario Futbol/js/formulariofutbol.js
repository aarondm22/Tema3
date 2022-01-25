//Efecto de acordeón
$(function(){
    $(".acordeon").accordion({
      active:false,
      collapsible:true,
      header:"legend"
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
        title:"Copyright",
        autoOpen:false,
        modal:true,
        buttons: {
            "Mostrar autor": function() {
                alert( "CRFPTIC" );
            },
            Cancel: function() {
                $( this ).dialog( "close" );
            } 
        }
    });
    $(".modal").on( "click", function() {
        $(".mensaje").dialog("open");
    });
});