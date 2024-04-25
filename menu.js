let menuLink = document.querySelectorAll("nav a");
let checkbox = document.getElementById("checkbox-menu");

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