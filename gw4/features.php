<?php
require_once 'data.php';
require_once 'components.php';

renderHeader($menu_items);
?>

<main class="container" style="padding-top: 40px;">
    <div class="section-header">
        <h1 class="section-title">Our Features & System Modules</h1>
        <p class="section-subtitle">Discover how Nexcent automates your workflows, member management, and renewals.</p>
    </div>
    
    <div class="services-grid" style="margin-top: 40px;">
        <?php foreach ($services as $service): ?>
            <div class="service-card">
                <div class="service-icon"><?= $service['icon'] ?></div>
                <h3><?= $service['title'] ?></h3>
                <p><?= $service['text'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div style="margin-top: 80px; background: var(--neutral-light); padding: 48px; border-radius: 8px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 30px;">
        <div style="flex: 1; min-width: 300px;">
            <h2 style="font-size: 28px; color: var(--secondary); margin-bottom: 16px;">Advanced Security & Controls</h2>
            <p style="color: var(--neutral-grey); font-size: 15px; line-height: 1.6;">Your community data is completely safe with our encrypted servers and roll-based user access controls. Manage payments, permissions and databases without any security headaches.</p>
        </div>
        <div style="flex: 1; min-width: 300px; text-align: right;">
            <a href="#" class="btn-primary">Learn More About Security</a>
        </div>
    </div>
</main>

<?php
renderFooter();
?>