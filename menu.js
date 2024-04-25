let menuLink = document.querySelectorAll("nav a");
let checkbox = document.getElementById("checkbox-menu");

menuLink.forEach(link => {
    link.addEventListener("click", () => {
        checkbox.checked = false;
    });
});