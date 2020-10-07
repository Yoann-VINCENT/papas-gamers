const hamburger = document.querySelector(".hamburger-container");
const login = document.querySelector(".login");
const menu = document.querySelector(".nav-menu");
const menuOverlay = document.querySelector(".nav-menu-overlay");

let shouldDisplayMenu = false;

function hideMenuClickHandler(event){
    shouldDisplayMenu = false;
    menuOverlay.style.display = "none";
    menu.style.display = "none";
}

function hamburgerClickHandler(event){
    if(!shouldDisplayMenu){
        shouldDisplayMenu = true;
        menuOverlay.style.display = "block";
        menu.style.display = "flex";

    } else {
        hideMenuClickHandler();
    }
}

hamburger.addEventListener("click", hamburgerClickHandler);
menuOverlay.addEventListener("click", hideMenuClickHandler);

