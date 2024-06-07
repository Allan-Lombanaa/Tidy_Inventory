function toggleMenu() {
    var dropdownContent = document.querySelector(".dropdown-content");
    dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
}

window.addEventListener('click', function(event) {
    var dropdownContent = document.querySelector(".dropdown-content");
    var ajustesButton = document.getElementById("ajustes");

    if (event.target !== dropdownContent && event.target !== ajustesButton) {
        dropdownContent.style.display = "none";
    }
});