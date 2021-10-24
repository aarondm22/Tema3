const canvas = document.getElementById('lienzo');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

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


let bola1 = new Ball(aleatorioEntre(41,canvas.width),aleatorioEntre(41, canvas.height),aleatorioEntre(5,40),"rgb("+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+")",aleatorioEntre(0,20),aleatorioEntre(0,20));
let bola2 = new Ball(aleatorioEntre(41,canvas.width),aleatorioEntre(41, canvas.height),aleatorioEntre(5,40),"rgb("+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+")",aleatorioEntre(0,20),aleatorioEntre(0,20));
let bola3 = new Ball(aleatorioEntre(41,canvas.width),aleatorioEntre(41, canvas.height),aleatorioEntre(5,40),"rgb("+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+")",aleatorioEntre(0,20),aleatorioEntre(0,20));
let bola4 = new Ball(aleatorioEntre(41,canvas.width),aleatorioEntre(41, canvas.height),aleatorioEntre(5,40),"rgb("+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+")",aleatorioEntre(0,20),aleatorioEntre(0,20));
let bola5 = new Ball(aleatorioEntre(41,canvas.width),aleatorioEntre(41, canvas.height),aleatorioEntre(5,40),"rgb("+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+")",aleatorioEntre(0,20),aleatorioEntre(0,20));
let bola6 = new Ball(aleatorioEntre(41,canvas.width),aleatorioEntre(41, canvas.height),aleatorioEntre(5,40),"rgb("+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+")",aleatorioEntre(0,20),aleatorioEntre(0,20));
let bola7 = new Ball(aleatorioEntre(41,canvas.width),aleatorioEntre(41, canvas.height),aleatorioEntre(5,40),"rgb("+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+","+aleatorioEntre(0,255)+")",aleatorioEntre(0,20),aleatorioEntre(0,20));

let bolas = [];
bolas.push(bola1);
bolas.push(bola2);
bolas.push(bola3);
bolas.push(bola4);
bolas.push(bola5);
bolas.push(bola6);
bolas.push(bola7);


function chocar(){
    for(let i=0; i<bolas.length; i++){
        if(bolas[i]._y + bolas[i]._radius> canvas.height || bolas[i]._y - bolas[i]._radius < 0 ){
            bolas[i]._vy = -bolas[i]._vy;
        }
        if(bolas[i]._x + bolas[i]._radius> canvas.width || bolas[i]._x - bolas[i]._radius < 0 ){
            bolas[i]._vx = -bolas[i]._vx;
        }
    }
}

function bucle(){
    ctx.fillStyle = 'rgba(255, 255, 255, 0.3)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    for(let i=0; i<bolas.length; i++){
        bolas[i].draw();
    }
    chocar();
    requestAnimationFrame(bucle);
}

bucle();
