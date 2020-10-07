const gridContainer = document.querySelector(".container-whack");
const scoreDisplay = document.querySelector(".score-display");
const startButton = document.querySelector(".whack-start");
const endButton = document.querySelector(".whack-end");
const timer = document.querySelector(".timer-display");

startButton.addEventListener("click", startGame);
endButton.addEventListener("click", endGame);

const GAME_DIFFICULTY = {
    EASY: 4,
    NORMAL: 10,
    HARD: 15,
    ULTIMATE: 1
}

const GAME_DURATION = 30*1000;
let gameTimoutId = null;
let startTimer = null;


let whackGrid = [
  [null, null, null, null],
  [null, null, null, null],
  [null, null, null, null],
  [null, null, null, null],
];

let continueGame = true;
let score = 0;


function createMole(url, coord, grid){
    const mole = document.createElement("img");
    let {x, y} = coord;
    mole.src = url;
    mole.style.gridArea = `${x+1}/${y+1}/${x+2}/${y+2}`;
    mole.dataset.x=""+x;
    mole.dataset.y=""+y;
    mole.addEventListener("click", removeImageClickHandler);
    grid[y][x] = true;
    gridContainer.append(mole);
    setTimeout( removeMole.bind(null, mole), 1000);
}

function removeMole(mole){
    const x = mole.dataset.x;
    const y = mole.dataset.y;
    whackGrid[y][x] = null;
    mole.remove();
}

function removeImageClickHandler(event){
    const mole = event.target;
    removeMole(mole);
}

function getRandomEmptyPosi(grid){
    const gridSize = grid.length;
    let coord = null;
    while(!coord){
        const x = Math.floor( Math.random()*gridSize );
        const y = Math.floor( Math.random()*gridSize );
        if(grid[y][x] === null) coord = {x, y};
    }
    return coord;
}

function  getRandomURL(){
    const urls = [
        "./assets/images/whack-a-mole/pierre.png",
        "./assets/images/whack-a-mole/matthieu.png",
        "./assets/images/whack-a-mole/thomas.png"
    ];
    const randomIndex = Math.floor( Math.random()*3 );
    return urls[randomIndex];
}


function randomTimer(){
    return Math.random()*1500 + 4;
}

function startGame(){
    //gridContainer.classList.add("size-easy")
    whackGrid = createGrid(4);
    continueGame = true;
    startTimer = Date.now() + GAME_DURATION;
    timer.textContent = "" + Math.floor(GAME_DURATION/1000);
    whackGame();
    updateTimer();
}

function whackGame(){
    if(continueGame){
        const coord = getRandomEmptyPosi(whackGrid);
        createMole( getRandomURL(), coord, whackGrid) ;
        setTimeout( whackGame, randomTimer() );
    }
}

function endGame(){
    continueGame = false;
    gridContainer.innerHTML = null;
    clearTimeout(gameTimoutId);
}

function createGrid(size){
    const grid = new Array(size);
    for(let i=0; i<size; i++){
        grid[i] = new Array(size).fill(null);
    }
    return grid;
}

function updateTimer(){
    const timeLeft = startTimer - Date.now();
    if(timeLeft<=0) {
        endGame();
    }
    if(continueGame){
        timer.textContent = "" + Math.floor(timeLeft/1000);
        setTimeout( updateTimer, 200 );
    }

}

/*
class Person {
    constructor(x, y, person) {
        this.x = x;
        this.y = y;
    }
}

const thomas = {
    url : "",
    points : "",
    clickSound : "",
    timeoutSound : "",
}*/