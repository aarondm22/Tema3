const canvas = document.getElementById('lienzo');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

class Ball {
    constructor(x,y,radius,color,vx,vy){
        this._x = x;
        this._y = y;
        this._radius = radius;
        this._color = color;
        this._vx = vx;
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
}

let bola1 = new Ball(50,100,25,"blue",5,7);
console.log(bola1);

function chocar(){
    if(bola1._y + bola1._radius> canvas.height || bola1._y - bola1._radius < 0 ){
        bola1._vy = -bola1._vy;
    }
    if(bola1._x + bola1._radius> canvas.height || bola1._x - bola1._radius < 0 ){
        bola1._vx = -bola1._vx;
    }
}

function bucle(){
    ctx.fillStyle = 'rgba(255, 255, 255, 0.3)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    bola1.draw();
    chocar();
    requestAnimationFrame(bucle);
}

bucle();
