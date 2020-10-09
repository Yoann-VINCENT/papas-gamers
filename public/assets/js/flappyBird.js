let cvs = document.getElementById("canvas");
let ctx = cvs.getContext("2d");
const startBtn = document.querySelector(".buttonRules");

// load images

let bird = new Image();
let bg = new Image();
let fg = new Image();
let pipeNorth = new Image();
let pipeSouth = new Image();

bird.src = "/assets/images/flappyBird/bird.png";
bg.src = "/assets/images/flappyBird/bg.png";
fg.src = "/assets/images/flappyBird/fg.png";
pipeNorth.src = "/assets/images/flappyBird/pipeNorth.png";
pipeSouth.src = "/assets/images/flappyBird/pipeSouth.png";


// some variables

let gap = 85;
let constant;

let bX = 10;
let bY = 150;

let gravity = 1.7;

let score = 0;

// audio files

let fly = new Audio();
let scor = new Audio();

fly.src = "/assets/sounds/fly.mp3";
scor.src = "/assets/sounds/score.mp3";

// on key down

document.addEventListener("keypress",moveUp);

function moveUp(){
    bY -= 18;
    fly.play();
}

// pipe coordinates

let pipe = [];

pipe[0] = {
    x : cvs.width,
    y : 0
};

// draw images

function draw(){

    startBtn.style.display = 'none';

    ctx.drawImage(bg,0,0);


    for(let i = 0; i < pipe.length; i++){

        constant = pipeNorth.height+gap;
        ctx.drawImage(pipeNorth,pipe[i].x,pipe[i].y);
        ctx.drawImage(pipeSouth,pipe[i].x,pipe[i].y+constant);

        pipe[i].x--;

        if( pipe[i].x == 125 ){
            pipe.push({
                x : cvs.width,
                y : Math.floor(Math.random()*pipeNorth.height)-pipeNorth.height
            });
        }

        // detect collision

        if( bX + bird.width >= pipe[i].x && bX <= pipe[i].x + pipeNorth.width && (bY <= pipe[i].y + pipeNorth.height || bY+bird.height >= pipe[i].y+constant) || bY + bird.height >=  cvs.height - fg.height){
            location.reload();
        }

        if(pipe[i].x == 5){
            score++;
            scor.play();
        }


    }

    ctx.drawImage(fg,0,cvs.height - fg.height);

    ctx.drawImage(bird,bX,bY);

    bY += gravity;

    ctx.fillStyle = "#000";
    ctx.font = "20px Verdana";
    ctx.fillText("Score : "+score,10,cvs.height-20);

    requestAnimationFrame(draw);

}


startBtn.addEventListener("click", function()
        {
            draw();

        }

    );