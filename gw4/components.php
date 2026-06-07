<?php
// სესიის დაწყება
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function renderHeader($menu) {
    $menu_links = [
        "Home"      => "index.php",
        "Features"  => "features.php",
        "Community" => "community.php",
        "Blog"      => "blog.php",
        "Pricing"   => "pricing.php"
    ];
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nexcent - Responsive Portal</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
        <div class="container nav-box">
            <a href="index.php" class="logo">
                <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.5 0L32 12L21.5 24H10.5L0 12L10.5 0H21.5Z" fill="#4CAF50"/>
                </svg>
                Nex<span>cent</span>
            </a>

            <button class="menu-toggle" id="mobile-menu-btn" aria-label="Toggle Menu">
                <span></span><span></span><span></span>
            </button>

            <ul class="nav-links" id="nav-menu">';
                foreach ($menu as $item) {
                    $link = isset($menu_links[$item]) ? $menu_links[$item] : "#";
                    echo '<li><a href="' . $link . '">' . $item . '</a></li>';
                }

                if (isset($_SESSION['user_name'])) {
                    echo '<li><span style="font-weight:600; color:var(--primary); background:var(--primary-light); padding:8px 14px; border-radius:6px; font-size:15px;">👋 ' . htmlspecialchars($_SESSION['user_name']) . '</span></li>';
                    echo '<li><a href="logout.php" class="btn-logout">Logout</a></li>';
                } else {
                    echo '<li><a href="register.php" class="btn-primary" style="color:white; padding:8px 16px;">Register Now</a></li>';
                }
    echo '      </ul>

            <!-- [NEW] Dark Mode Toggle -->
            <button id="dark-mode-btn" title="Toggle Dark Mode">🌙</button>
        </div>
    </header>
    ';
}

function renderHero() {
    $welcome_title = isset($_SESSION['user_name'])
        ? "Welcome back, <br><span>" . htmlspecialchars($_SESSION['user_name']) . "!</span>"
        : "Lessons and insights <br><span>from 8 years</span>";
    $welcome_btn  = isset($_SESSION['user_name']) ? "Explore Dashboard" : "Register";
    $welcome_link = isset($_SESSION['user_name']) ? "features.php" : "register.php";

    echo '
    <section class="hero">
        <div class="container">
            <div class="hero-flex">
                <div class="hero-text">
                    <h1>' . $welcome_title . '</h1>
                    <p>Where to grow your business as a photographer: site or social media?</p>
                    <a href="' . $welcome_link . '" class="btn-primary">' . $welcome_btn . '</a>
                </div>
                <div class="hero-img">
                    <img src="https://img.freepik.com/free-vector/interaction-design-concept-illustration_114360-4964.jpg" alt="Hero Illustration">
                </div>
            </div>
        </div>
    </section>
    ';
}

function renderFooter() {
    echo '
    <!-- [NEW] Blog Modal -->
    <div class="blog-modal-overlay" id="blog-modal">
        <div class="blog-modal-box">
            <button class="blog-modal-close" id="modal-close" title="Close">✕</button>
            <img src="" alt="Article Image" class="blog-modal-img" id="modal-img">
            <div class="blog-modal-body">
                <h2 id="modal-title"></h2>
                <p>Our community-focused approach helps organizations streamline their operations, connect with members, and build lasting relationships through innovative digital tools and personalized support systems.</p>
                <p>By leveraging modern technology and data-driven insights, Nexcent empowers clubs and associations to make informed decisions and deliver exceptional member experiences at every touchpoint.</p>
            </div>
        </div>
    </div>

    <footer style="background: var(--secondary); color: #F5F7FA; text-align: center; padding: 40px 0; font-size: 14px; margin-top: 60px;">
        <p>&copy; ' . date("Y") . ' Nexcent. All rights reserved. | Responsive Skillwill Project</p>
    </footer>
    <script src="script.js"></script>
    </body>
    </html>
    ';
}
?>
