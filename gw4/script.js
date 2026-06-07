document.addEventListener("DOMContentLoaded", () => {

    // =====================================================
    // 1. მობილური მენიუს ჰამბურგერ ანიმაცია
    // =====================================================
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

    // =====================================================
    // 2. ჰედერის დინამიური ტრანსფორმაცია სქროლვისას
    // =====================================================
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

    // =====================================================
    // 3. Scroll Reveal ანიმაცია
    // =====================================================
    const revealElements = document.querySelectorAll(".service-card, .blog-card, .pricing-card");
    revealElements.forEach(el => el.classList.add("reveal"));
    const checkReveal = () => {
        const triggerBottom = window.innerHeight * 0.88;
        revealElements.forEach((el, index) => {
            const elTop = el.getBoundingClientRect().top;
            if (elTop < triggerBottom) {
                setTimeout(() => el.classList.add("active"), (index % 3) * 100);
            }
        });
    };
    window.addEventListener("scroll", checkReveal);
    checkReveal();

    // =====================================================
    // 4. [NEW] ACTIVE PAGE HIGHLIGHT — navbar-ზე
    // =====================================================
    const currentPage = window.location.pathname.split("/").pop() || "index.php";
    document.querySelectorAll(".nav-links a").forEach(link => {
        const href = link.getAttribute("href");
        if (href === currentPage) {
            link.classList.add("nav-active");
        }
    });

    // =====================================================
    // 5. [NEW] COUNT-UP ANIMATION — სტატისტიკაზე
    // =====================================================
    function animateCountUp(el) {
        const target = parseInt(el.textContent.replace(/,/g, ""), 10);
        if (isNaN(target)) return;
        const duration = 2000;
        const start = performance.now();
        const update = (now) => {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            // Ease-out cubic
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(eased * target);
            el.textContent = current.toLocaleString();
            if (progress < 1) requestAnimationFrame(update);
            else el.textContent = target.toLocaleString();
        };
        requestAnimationFrame(update);
    }

    const statNumbers = document.querySelectorAll(".stat-number, .stats-grid-box h3");
    let statsAnimated = false;

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !statsAnimated) {
                statsAnimated = true;
                statNumbers.forEach(el => animateCountUp(el));
                statsObserver.disconnect();
            }
        });
    }, { threshold: 0.3 });

    const statsSection = document.querySelector(".stats-section, .stats-grid-box");
    if (statsSection) statsObserver.observe(statsSection);

    // =====================================================
    // 6. [NEW] DARK MODE TOGGLE
    // =====================================================
    const darkBtn = document.getElementById("dark-mode-btn");
    const prefersDark = localStorage.getItem("darkMode") === "true";

    if (prefersDark) {
        document.body.classList.add("dark-mode");
        if (darkBtn) darkBtn.textContent = "☀️";
    }

    if (darkBtn) {
        darkBtn.addEventListener("click", () => {
            document.body.classList.toggle("dark-mode");
            const isDark = document.body.classList.contains("dark-mode");
            localStorage.setItem("darkMode", isDark);
            darkBtn.textContent = isDark ? "☀️" : "🌙";
        });
    }

    // =====================================================
    // 7. [NEW] BLOG MODAL POPUP
    // =====================================================
    const modal = document.getElementById("blog-modal");
    const modalTitle = document.getElementById("modal-title");
    const modalImg = document.getElementById("modal-img");
    const modalClose = document.getElementById("modal-close");

    if (modal) {
        // ყველა "Read Full Article" ლინკზე click handler
        document.querySelectorAll(".read-more-link, .blog-link").forEach(link => {
            link.addEventListener("click", (e) => {
                e.preventDefault();
                const card = link.closest(".blog-card");
                const title = card.querySelector("h4").textContent;
                const img = card.querySelector("img").src;

                modalTitle.textContent = title;
                modalImg.src = img;
                modal.classList.add("modal-open");
                document.body.style.overflow = "hidden";
            });
        });

        // დახურვა X ღილაკით
        modalClose.addEventListener("click", closeModal);

        // დახურვა overlay-ზე კლიკით
        modal.addEventListener("click", (e) => {
            if (e.target === modal) closeModal();
        });

        // დახურვა Escape კლავიშით
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape") closeModal();
        });

        function closeModal() {
            modal.classList.remove("modal-open");
            document.body.style.overflow = "";
        }
    }
});
