const gridContainer = document.querySelector(".container-whack");
const scoreDisplay = document.querySelector(".score-display");
const startButton = document.querySelector(".whack-start");
const endButton = document.querySelector(".whack-end");

startButton.addEventListener("click", startGame);
endButton.addEventListener("click", endGameClickHandler);

const GAME_DIFFICULTY = {
    EASY: 4,
    NORMAL:"",
}

let whackGrid = [
  [null, null, null, null],
  [null, null, null, null],
  [null, null, null, null],
  [null, null, null, null],
];

let continueGame = true;
let whackGridSize = 4;
let count = 0;


function launchGame(){
    if(continueGame){
        const coord = getRandomEmptyPosi(whackGrid);
        createMole( getRandomURL(), coord, whackGrid) ;
        setTimeout( launchGame, randomTimer() );
    }
}

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
}

//works
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
    const url = [
        "./assets/images/whack-a-mole/pierre.png",
        "./assets/images/whack-a-mole/matthieu.png",
        "./assets/images/whack-a-mole/thomas.png"
    ];
    const randomIndex = Math.floor( Math.random()*3 );
    return url[randomIndex];
}

function removeImageClickHandler(event){
    const mole = event.target;
    const x = mole.dataset.x;
    const y = mole.dataset.y;
    whackGrid[y][x] = null;
    mole.remove();
}

function endGameClickHandler(){
    continueGame = false;
}

function randomTimer(){
    return Math.random()*1500 + 4;
}

function startGame(){
    continueGame = true;
    launchGame();
}

/*
function createWhackGrid(size){
    return new Array(size).fill(new Array(size));
}
whackGrid = createWhackGrid(10);
whackGrid[0][1] = 2;
console.log(whackGrid);
*/




/*
grille

3photos

apparition aléatoire des photos
si pierre ou thomas gagne des points
si matthieu perd des points
1 pierre vaut + qu'un thomas;   fréquence thomas > pierre
incrémentation du score

apparition automatique aléatoire:
ne peut apparaitre sur un endroit déjà utilisé

disparition
si click  => son  (matthieu, quelle est votre question) pierre 1 mississipi
timing épuisé => autre son, thomas noob, pierre 3 mississipi
timer variable

-idée de niveau de difficulté;


3 objects
thomas
matthieu
pierre


creation grid, reference null

function add a person
      if game true
        find emplacement aléatoire vide
            si pris, recommence
        creation aleatoire person
        placer la persone à l'emplacement
        timeout recursif avec timeur variable


difficulté change l'interval du timeur de creation
condition de fin rater 6 thomas ( 1 pierre vaut 2 thomas)



placer la personne
display grid
    place grid-area(x+1/y+1x+2/y+2

button play
    reset score
    launch game

    ULTIMATE VERSION
    UNE SEULE CASE, just pour le plaisir du son MUHUHAAHAHAHAHA
 */
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
}