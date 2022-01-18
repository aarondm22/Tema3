$(function(){
    $("img").hide();
});

$(function(){
    $(".cerrar").click(function(){
        $("figure").hide();
    });
});

$(function(){
    $(".cerrar").contextmenu(function(){
        $("figure").show();
    });
});
    