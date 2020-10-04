let score  = 0;
let duration = 10000; //milliseconds !
let startTime = new Date().getTime();
let isEnded = true;

let timerTxt = document.querySelector("#timer");
let scoreTxt = document.querySelector("#score");
let clicksTxt = document.querySelector("#clicks");
let startBtn = document.querySelector("#start");
let clickArea = document.querySelector("#clickArea");

//Functions Start & Stop

function startGame()
    {
    startBtn.style.display = 'none';
    score = 0;
    isEnded = false;
    startTime = new Date().getTime();

    //Timer -> everything in milliseconds !
    let timer = setInterval(function()
        {
        let currentTime = (new Date().getTime() - startTime);
        if (currentTime < duration) {
            timerTxt.textContent = currentTime.toFixed(2);
            clicksTxt.textContent = (score / currentTime).toFixed(2);
        } else {
            isEnded = true;
            clearInterval(timer);
            endGame();
            }
        }, 1);
    }
function endGame()
    {
        let clicsBySeconds = (score / duration).toFixed(2);
        timerTxt.textContent = duration.toFixed(2);
        clicksTxt.textContent = clicsBySeconds;
        startBtn.style.display = 'inline';

        setTimeout(function()
        {
            if (score <= 50) {
                alert(`Ok... That's... lower than I expected... You made ${score} in ${duration} ! It's ${clicsBySeconds}. Try again!`);
            } else if (score <= 75) {
                alert(`Almost 75 ! Not bad ! You made ${score} in ${duration} ! It's ${clicsBySeconds}. Try again!`);
            } else if (score <= 99) {
                alert(`Hohoho ! You are among the few who can pretend to the tittle of "hard clickers" ! You made ${score} in ${duration} ! It's ${clicsBySeconds}. Try again!`);
            } else {
                alert(`No way ! You are a monster ! You made ${score} in ${duration} ! It's ${clicsBySeconds}. That's insane !! Try again please !`);
            }

        }, 30);
    }