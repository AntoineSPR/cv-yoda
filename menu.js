let menuLink = document.querySelectorAll("nav a");
let checkbox = document.getElementById("checkbox-menu");

function isMobile() {
    return window.matchMedia('(max-width: 768px)').matches;
}

if (isMobile()) {
    checkbox.addEventListener("change", () => {
        if (checkbox.checked) {
            menuLink.forEach(link => {
                link.style.right = "0px";
            });
        } else {
            menuLink.forEach(link => {
                link.style.right = "-330px";
            });
        }
    });
    
    menuLink.forEach(link => {
        link.addEventListener("click", () => {
            checkbox.checked = false;
            menuLink.forEach(link => {
                link.style.right = "-330px";
            });
        });
    });
}

