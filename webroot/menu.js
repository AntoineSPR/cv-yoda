let menuLink = document.querySelectorAll("nav a");
let checkbox = document.getElementById("checkbox-menu");
let overlay = document.getElementById("overlay");

// Check if the screen is in mobile mode (warning: only checks once when the DOM is loaded)
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
}
