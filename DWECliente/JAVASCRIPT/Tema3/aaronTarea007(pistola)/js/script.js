let bala = document.getElementById("bala");
let velocidad = 10;
let left = 100;

function disparar(){
    if (left<500) 
        left += velocidad;

    bala.style.left = left +"px";
    console.log(left);
}
