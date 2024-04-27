let menuLink = document.querySelectorAll("nav a");
let checkbox = document.getElementById("checkbox-menu");
let overlay = document.getElementById("overlay");

// Check if the screen is in mobile/tablet mode
function isMobile() {
    return window.matchMedia('(max-width: 1279px)').matches;
}

// Collapse the whole menu
function collapse(element) {
    element.addEventListener("click", () => {
        checkbox.checked = false;
        overlay.style.display = "none";
        menuLink.forEach(link => {
            link.style.right = "-330px";
        });
    });
}

// Dynamically handle button movement, overlay and menu collapse
function animateButtons() {
    if (isMobile()) {
        checkbox.addEventListener("change", () => {
            if (checkbox.checked) {
                menuLink.forEach(link => {
                    link.style.right = "0px";
                });
                overlay.style.display = "block";
            } else {
                menuLink.forEach(link => {
                    link.style.right = "-330px";
                });
                overlay.style.display = "none";
            }
        });

        menuLink.forEach(link => collapse(link));
        collapse(overlay);
    } else {
        menuLink.forEach(link => {
            link.style.right = '';
        });
    }
}

animateButtons();

window.addEventListener('resize', () => {
    animateButtons();
}); 