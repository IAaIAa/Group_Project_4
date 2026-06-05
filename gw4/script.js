document.addEventListener("DOMContentLoaded", () => {
    
    // 1. მობილური მენიუს ჰამბურგერ კლასის ანიმაცია
    const menuBtn = document.getElementById("mobile-menu-btn");
    const navMenu = document.getElementById("nav-menu");

    if (menuBtn && navMenu) {
        menuBtn.addEventListener("click", () => {
            navMenu.classList.toggle("active");
            const spans = menuBtn.querySelectorAll("span");
            
            if (navMenu.classList.contains("active")) {
                spans[0].style.transform = "rotate(45deg) translate(6px, 6px)";
                spans[1].style.opacity = "0";
                spans[2].style.transform = "rotate(-45deg) translate(6px, -6px)";
            } else {
                spans[0].style.transform = "none";
                spans[1].style.opacity = "1";
                spans[2].style.transform = "none";
            }
        });
    }

    // 2. ჰედერის დინამიური ტრანსფორმაცია სქროლვისას
    const header = document.querySelector("header");
    if (header) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 40) {
                header.style.padding = "14px 0";
                header.style.boxShadow = "0 10px 30px rgba(0, 0, 0, 0.04)";
                header.style.background = "rgba(255, 255, 255, 0.92)";
            } else {
                header.style.padding = "24px 0";
                header.style.boxShadow = "0 4px 20px rgba(0, 0, 0, 0.02)";
                header.style.background = "rgba(255, 255, 255, 0.85)";
            }
        });
    }

    // 3. ჭკვიანი Scroll Reveal (რიგრიგობით გამოჩენის ეფექტით)
    const revealElements = document.querySelectorAll(".service-card, .blog-card, .pricing-card");
    
    revealElements.forEach(el => el.classList.add("reveal"));

    const checkReveal = () => {
        const triggerBottom = window.innerHeight * 0.88;
        
        revealElements.forEach((el, index) => {
            const elTop = el.getBoundingClientRect().top;
            
            if (elTop < triggerBottom) {
                setTimeout(() => {
                    el.classList.add("active");
                }, (index % 3) * 100); 
            }
        });
    };

    window.addEventListener("scroll", checkReveal);
    checkReveal(); 
});