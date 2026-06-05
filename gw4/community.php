<?php
require_once 'data.php';
require_once 'components.php';

renderHeader($menu_items);
?>

<main class="container" style="padding-top: 40px;">
    <div class="section-header">
        <h1 class="section-title">A Growing Global Community</h1>
        <p class="section-subtitle">We empower thousands of clubs, organizations, and professional associations worldwide.</p>
    </div>
</main>

<section class="stats-section" style="margin-top: 40px;">
    <div class="container">
        <div class="stats-flex">
            <div>
                <h2 style="font-size: 36px; font-weight: 600; line-height: 44px; color: var(--neutral-dark);">Helping a local <br><span style="color: var(--primary);">business reinvent itself</span></h2>
                <p style="color: var(--body-text); font-size: 16px; margin-top: 8px;">We reached here with our hard work and dedication</p>
            </div>
            <div class="stats-grid">
                <?php foreach ($stats as $stat): ?>
                    <div class="stat-item">
                        <div class="stat-icon"><?= $stat['icon'] ?></div>
                        <div>
                            <div class="stat-number"><?= $stat['count'] ?></div>
                            <div style="color: var(--body-text); font-size: 14px; font-weight: 500;"><?= $stat['label'] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="container" style="margin-top: 60px; text-align: center;">
    <div style="max-width: 700px; margin: 0 auto;">
        <h2 style="font-size: 28px; color: var(--secondary); margin-bottom: 16px;">Why Clubs Choose Nexcent?</h2>
        <p style="color: var(--neutral-grey); font-size: 16px; line-height: 1.6; margin-bottom: 32px;">
            Our platform allows community managers to connect with their members effortlessly, coordinate local and national events, track subscription lifecycles, and handle accounting tasks through a single, responsive panel.
        </p>
        <a href="#" class="btn-primary">Join Our Community Now</a>
    </div>
</section>

<?php
renderFooter();
?>