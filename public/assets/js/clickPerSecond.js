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
            endGame(); // to define...
            }
        }, 1);
    }