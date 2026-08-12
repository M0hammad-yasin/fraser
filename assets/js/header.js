document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("header");
    const narrowHeader = document.getElementById("narrow-header");
    if (!header || !narrowHeader) return;
    
    let lastScrollY = window.scrollY;

    window.addEventListener("scroll", () => {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 150) {
            if (currentScrollY > lastScrollY) {
                // Scrolling down
                header.classList.add("hide");
                narrowHeader.classList.add("show");
            } else {
                // Scrolling up
                header.classList.remove("hide");
                narrowHeader.classList.remove("show");
            }
        } else {
            // Near the top
            header.classList.remove("hide");
            narrowHeader.classList.remove("show");
        }

        lastScrollY = currentScrollY;
    });
});
