//Dos eventos distintos para eliminar y mostrar
$(function(){
    $(".boton").click(function(){
        $("figure").hide();
    });
});

$(function(){
    $(".boton").contextmenu(function(){
        $("figure").show();
    });
});

//Usar el mismo evento para mostrar y ocultar elementos
$(function(){
    $(".boton2").on({
        click: function(){
            $("figure").hide();
        },
        contextmenu: function(){
            $("figure").show();
        }
    });
});
