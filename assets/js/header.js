document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("header");
    const narrowHeader = document.getElementById("narrow-header");
    
    // Sync active nav item state based on current page URL
    const currentPath = window.location.pathname.split("/").pop() || "index.php";
    const navLinks = document.querySelectorAll("#header .nav-link, #narrow-header .nav-link");
    
    navLinks.forEach(link => {
        const href = link.getAttribute("href");
        if (!href) return;
        
        const linkPath = href.split("/").pop().split("?")[0];
        
        const isMatch = (currentPath === linkPath) || 
                        (currentPath === "" && linkPath === "index.php") ||
                        ((currentPath === "blog.php" || currentPath === "single.php") && linkPath === "blogs.php");
                        
        if (isMatch) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });

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

