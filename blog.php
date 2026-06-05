<?php
require_once 'data.php';
require_once 'components.php';

renderHeader($menu_items);
?>

<main class="container" style="padding-top: 40px;">
    <div class="section-header">
        <h1 class="section-title">Nexcent Blog & Insights</h1>
        <p class="section-subtitle">Stay updated with the latest trends, community building tips, and expert perspectives.</p>
    </div>

    <div class="blog-grid" style="margin-top: 40px;">
        <?php foreach ($blogs as $blog): ?>
            <div class="blog-card">
                <img src="<?= $blog['image'] ?>" alt="Blog Image" class="blog-img">
                <div class="blog-content">
                    <h4><?= $blog['title'] ?></h4>
                    <p style="font-size: 13px; color: var(--body-text); margin-bottom: 15px;">Published on: <?= date('M d, Y') ?></p>
                    <a href="#" class="blog-link">Read Full Article &rarr;</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php
renderFooter();
?>