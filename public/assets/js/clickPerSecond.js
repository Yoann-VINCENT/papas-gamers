let score  = 0;
let duration = 5; //milliseconds convert to seconds -> ie I convert in second later so duration has to be set on 10 !
let startTime = new Date().getTime();
let isEnded = true;

const timerTxt = document.querySelector("#timer");
const scoreTxt = document.querySelector("#score");
const startBtn = document.querySelector("#start");
const clickArea = document.querySelector("#clickArea");
const finalScoreTxt = document.querySelector("#scoretxt");

let audio = new Audio('/assets/sounds/deja-vu.mp3');
let audioVictory = new Audio('/assets/sounds/victoryff.mp3');
let audioDoIT = new Audio('/assets/sounds/doIt.mp3');


function showButton(){
    startBtn.style.display = 'inline';
    startBtn.textContent = "Try again";
    startBtn.style.height = '100px';
}

startBtn.addEventListener("click", function()
        {
            startGame();
        }
    );

clickArea.addEventListener("click", function()
        {
            if (!isEnded) {
                audioDoIT.play();
                score++;
                scoreTxt.textContent = score;
            }
        }
    );

//Functions Start & Stop

function startGame()
    {
        audioVictory.pause();
        audioVictory.currentTime = 0;
        audio.play();
        audio.loop = true;
        startBtn.style.display = 'none';
        finalScoreTxt.style.display = 'none';
        score = -1;
        isEnded = false;
        startTime = new Date().getTime();

        //Timer
        let timer = setInterval(function()
            {
            let currentTime = (new Date().getTime() - startTime)/1000;
            if (currentTime < duration) {
                timerTxt.textContent = currentTime.toFixed(1);
            } else {
                isEnded = true;
                clearInterval(timer);
                endGame();
                }
            }, 1);
    }

function endGame()
    {
        audio.pause();
        audio.currentTime = 0;
        audioDoIT.pause();
        audioDoIT.currentTime = 0;
        audioVictory.play();
        let clicsBySeconds = (score / duration).toFixed(1);
        timerTxt.textContent = duration.toFixed(1);
        finalScoreTxt.style.display = 'inline';
        finalScoreTxt.style.backgroundColor = '#3d3d3d99';
        if (clicsBySeconds <= 5.0) {
            finalScoreTxt.textContent = `Ok... That's... lower than I expected... You made ${score} clicks in ${duration} seconds ! It's ${clicsBySeconds} clicks per second. Try again!`;
        } else if (clicsBySeconds <= 7.5) {
            finalScoreTxt.textContent = `Not bad ! You are a good average clicker ! You made ${score} clicks in ${duration} seconds ! It's ${clicsBySeconds} clicks per second. Try again!`;
        } else if (clicsBySeconds <= 9.9) {
            finalScoreTxt.textContent = `Hohoho ! You are among the few who can pretend to the tittle of "hard clickers" ! You made ${score} clicks in ${duration} seconds ! It's ${clicsBySeconds} clicks per second. Try again!`;
        } else {
            finalScoreTxt.textContent = `No way ! You are a monster ! You made ${score} clicks in ${duration} seconds ! It's ${clicsBySeconds} clicks per second. That's insane !! Try again please !`;
        }
        setTimeout(showButton, 2000);
    }

