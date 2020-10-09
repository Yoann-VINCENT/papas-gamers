const gridContainer = document.querySelector(".container-whack");
const scoreDisplay = document.querySelector(".score-display");
const startButton = document.querySelector(".whack-start");
const endButton = document.querySelector(".whack-end");
const timer = document.querySelector(".timer-display");
const difficultySelector = document.querySelector(".difficulty");
const root = document.documentElement;

//================= GAME SETTINGS ====================================
//sound when touched 1; survive 2
const SOUND = {
    "matthieu1": document.querySelector("#audioMatthieu1"),
    "matthieu2" : document.querySelector("#audioMatthieu2"),
    "pierre1" : document.querySelector("#audioPierre1"),
    "pierre2" : document.querySelector("#audioPierre2"),
    "thomas1" : document.querySelector("#audioThomas1"),
    "thomas2" : document.querySelector("#audioThomas2"),
}

const URL = {
    "matthieu": "./assets/images/whack-a-mole/matthieu.png",
    "pierre": "./assets/images/whack-a-mole/pierre.png",
    "thomas": "./assets/images/whack-a-mole/thomas.png",
};

const POINTS = {
    "matthieu": -20,
    "pierre": 20,
    "thomas": 10,
}

const DELAY_DISAPEAR = {
    "matthieu": [1, 3],
    "pierre": [0.8, 1],
    "thomas": [1, 1],
}

const GAME_DIFFICULTY = {
    EASY: "4",
    NORMAL: "6",
    HARD: "8",
    ULTIMATE_P: "1",
    ULTIMATE_M: "1"
}

const GAME_DURATION = 30*1000;


//============== GAME VARIABLES =================

let whackGrid = null;
let continueGame = false;
let startTimer = null;
let score = 0;
let gameDifficulty = difficultySelector.value || "NORMAL";


//============== MOLE CREATION DELETION ====================

function createMole(coord, grid){
    //const container = document.createElement("div");
    const moleName = getRandomName();
    const mole = document.createElement("img");
    let {x, y} = coord;
    mole.draggable = false;
    mole.dataset.moleName = moleName;
    mole.dataset.x=""+x;
    mole.dataset.y=""+y;
    mole.src = URL[moleName];
    mole.style.gridArea = `${x+1}/${y+1}/${x+2}/${y+2}`;

    const idTimout = setTimeout( ()=>{
        if(!continueGame) return;
        playAudio(SOUND[moleName + 2]);
        removeMole(mole);
    }, randomTimer(moleName) );

    mole.addEventListener("click", ()=>{
        clearTimeout(idTimout);
        playAudio(SOUND[moleName+1]);
        score += POINTS[moleName];
        scoreDisplay.textContent = "" + score;
        removeMole(mole);
    });

    grid[y][x] = true;
    gridContainer.append(mole);
}

function removeMole(mole){
    const x = mole.dataset.x;
    const y = mole.dataset.y;
    whackGrid[y][x] = null;
    mole.remove();
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


//============== GAME CONTROL ====================
startButton.addEventListener("click", startGame);
endButton.addEventListener("click", endGame);
difficultySelector.addEventListener("change", setGameDifficulty);

function startGame(){
    gridContainer.innerHTML = null;
    whackGrid = createGrid(gameDifficulty);
    continueGame = true;
    startTimer = Date.now() + GAME_DURATION;
    timer.textContent = "" + Math.floor(GAME_DURATION/1000);
    score = 0;
    scoreDisplay.textContent = "0";
    let ultimateMoleName = null;
    if(gameDifficulty === "ULTIMATE_P") {
        ultimateMoleName = "pierre";
    } else if ( gameDifficulty === "ULTIMATE_M") {
        ultimateMoleName = "matthieu";
    }
    if(!ultimateMoleName){
        whackGame();
    } else {
        createUltimateMole(ultimateMoleName);
    }
    updateTimer();
}

function whackGame(){
    if(continueGame){
        const coord = getRandomEmptyPosi(whackGrid);
        createMole( coord, whackGrid) ;
        if(gameDifficulty === "HARD") createMole(coord, whackGrid);
        setTimeout( whackGame, randomTimer(null, true) );
    }
}

function endGame(){
    continueGame = false;
    gridContainer.innerHTML = null;
    timer.textContent = "" + 0;
    for(let sound in SOUND){
        SOUND[sound].pause();
        SOUND[sound].currentTime = 0;
    }
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

function setGameDifficulty (){
    gameDifficulty = difficultySelector.value;
    endGame();
}

//=======================================================

function createGrid(gameDifficulty){
    let size = GAME_DIFFICULTY[gameDifficulty];
    root.style.setProperty("--nbColumns", size);

    size = parseInt(size);
    const grid = new Array(size);
    for(let i=0; i<size; i++){
        grid[i] = new Array(size).fill(null);
    }
    return grid;
}


function  getRandomName(){
    const names = ["matthieu", "pierre", "thomas"];
    const randomIndex = Math.floor( Math.random()*3 );
    return names[randomIndex];
}


function randomTimer(moleName, isGameTimer=false){
    if(isGameTimer) return Math.random()*1500 + 4;
    const minTimer = DELAY_DISAPEAR[moleName][0];
    const maxTimer = DELAY_DISAPEAR[moleName][1]
    return (minTimer+ Math.random()*(maxTimer-minTimer)) * 1000;
}

function playAudio(sound){
    sound.pause();
    sound.currentTime = 0;
    sound.play();
}

function createUltimateMole(moleName){
    const mole = document.createElement("img");
    mole.draggable = false;
    mole.src = URL[moleName];
    mole.addEventListener("click", ()=>{
        playAudio(SOUND[moleName+1]);
        score += POINTS[moleName];
        scoreDisplay.textContent = "" + score;
    });
    gridContainer.append(mole);
}


