
window.addEventListener("load", function () {
    let navLinks = document.getElementById("navLinks");

    window.showMenu = function () {
        navLinks.style.right = "0";
    };

    window.hideMenu = function () {
        navLinks.style.right = "-200px";
    };

    // Reset styles when switching to desktop mode
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 768) {
            navLinks.style.right = "0"; // Reset for desktop
        } else {
            navLinks.style.right = "-200px"; // Keep mobile behavior
        }
    });
});



