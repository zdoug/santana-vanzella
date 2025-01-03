window.addEventListener("load", () => {
    let buttonMenu = document.querySelector("header button");
    let menu       = document.querySelector(".menu-menu-header-container");

    buttonMenu.addEventListener("click", () => {
        buttonMenu.classList.toggle("active");
        menu.classList.toggle("active");
    })
});