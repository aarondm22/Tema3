

$(function(){
    $(".cerrar").on({
        click: function(e){
            e.preventDefault();
            $(".nombre").text($("#nombre").val());
            $(".mail").text($("#email").val());
            $(".tlf").text($("#tlf").val());
            $("p.bdate>span").text($("#fNac").val());
            $("p.cerrar").html("<a href='#' class='cerrar'>Pulsa para cerrar</a>");
            $(".vp").slideToggle(); //Para mostrar algo, quitar el oculto
        }
  });
});
