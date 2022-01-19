
$(function(){
    $("section>div").hide(); //Oculta todos los div
    $("h1").click(function(){ //Al clicar en los h1 se mostrara u ocultara como sea
        $(this).next().slideToggle();
    })
});
