const hamburger = document.querySelector(".hamburger-container");
const menu = document.querySelector(".sidenav");
const menuOverlay = document.querySelector(".nav-menu-overlay");


hamburger.addEventListener("click", openNav);
menuOverlay.addEventListener("click", closeNav);

function openNav() {
    menu.style.width = "250px";
    menuOverlay.style.display = "block";
}

function closeNav() {
    menu.style.width = "0";
    menuOverlay.style.display = "none";
}

