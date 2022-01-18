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
