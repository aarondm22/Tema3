
$(function(){
    $(".add").on({
        click: function(){
            $("section.tablon").append("<article><h1>"+$("#title").val()+"</h1><p>"+$("#cuerpo").val()+"</p></article>");
            $("#title").val("");
            $("#cuerpo").val("");
        }
    });
    $(".del").on({
        click: function(){
            $(".tablon").empty();
        }
    });
});
