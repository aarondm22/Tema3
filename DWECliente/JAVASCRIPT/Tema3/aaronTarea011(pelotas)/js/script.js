document.body.style.overflow='hidden'; //Ocultar las barras de desplazamiento

const canvas = document.getElementById('lienzo');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let bolas = [];

function aleatorioEntre(min, max){
    let num = Math.floor(Math.random() * (max - min + 1)) + min;
    return num;
}
 
class Ball {
    constructor(x,y,radius,color,vx,vy){
        this._x = x;
        this._y = y;
        this._radius = radius;
        this._color = color;
        this._vx = 0;
        this._vy = vy;
        
    }

    draw(){
        this._x+=this._vx;
        this._y+=this._vy;

        ctx.beginPath();
        ctx.arc(this._x, this._y,this._radius, 0, Math.PI * 2, true);

        ctx.fillStyle = this._color;
        ctx.fill();
    }

    chocar(){
        if(this._y + this._radius> canvas.height || this._y - this._radius < 0 ){
            this._vy = -this._vy;
        }
        if(this._x + this._radius> canvas.width || this._x - this._radius < 0 ){
            this._vx = -this._vx;
        } 
    }

    chocarBolas(i){
        for(let j=0; j<bolas.length;j++){
            if(i!=j) { //if (this != bolas[j])
                let dh=this._x - bolas[j]._x;
                let dv= this._y - bolas[j]._y;
                let h = this._radius + bolas[j]._radius;
                if(h*h>=(dh*dh)+(dv*dv)){
                    this._vx = -this._vx;
                    this._vy = -this._vy;
                }
            }
        }
    }

}

for(let i=0; i<10; i++){
    bolas[i] = new Ball(aleatorioEntre(41,canvas.width),aleatorioEntre(41, canvas.height),aleatorioEntre(5,40),"rgb("+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+")",aleatorioEntre(0,20),aleatorioEntre(0,20));
}


function bucle(){
    ctx.fillStyle = 'rgba(255, 255, 255, 0.3)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    for(let i=0; i<bolas.length; i++){
        bolas[i].draw();
        bolas[i].chocar();
        bolas[i].chocarBolas(i);
    }
    requestAnimationFrame(bucle);
}

bucle();
