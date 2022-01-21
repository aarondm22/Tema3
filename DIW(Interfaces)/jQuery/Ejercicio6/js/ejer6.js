$(function(){
    $(".addImp").on({
        click: function(){
            $("span").toggleClass("importante");
        }
    });  
    $(".addLink").on({
        click: function(){
            $("a").toggleClass("red nl caps");
        }
    });
});
