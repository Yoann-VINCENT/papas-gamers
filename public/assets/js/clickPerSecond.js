let score  = 0;
let duration = 5; //milliseconds convert to seconds -> ie I convert in second later so duration has to be set on 10 !
let startTime = new Date().getTime();
let isEnded = true;

let timerTxt = document.querySelector("#timer");
let scoreTxt = document.querySelector("#score");
let startBtn = document.querySelector("#start");
let clickArea = document.querySelector("#clickArea");
let finalScoreTxt = document.querySelector("#scoretxt");

startBtn.addEventListener("click", function()
        {
            startGame();
        }
    );

clickArea.addEventListener("click", function()
        {
            if (!isEnded) {
                score++;
                scoreTxt.textContent = score;
            }
        }
    );

//Functions Start & Stop

function startGame()
    {
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
        let clicsBySeconds = (score / duration).toFixed(1);
        timerTxt.textContent = duration.toFixed(1);
        startBtn.style.display = 'inline';
        startBtn.textContent = "Try again";
        startBtn.style.height = '100px';
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
    }

