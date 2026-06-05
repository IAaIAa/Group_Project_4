<?php
require_once 'data.php';
require_once 'components.php';

renderHeader($menu_items);
?>

<main class="container" style="padding-top: 40px;">
    <div class="section-header">
        <h1 class="section-title">Honest & Simple Pricing</h1>
        <p class="section-subtitle">Choose the perfect plan for your organization or community group.</p>
    </div>

    <div class="pricing-grid">
        <div class="pricing-card">
            <h3>Basic Plan</h3>
            <p style="color: var(--body-text); font-size: 14px; margin-top: 8px;">For small community clubs</p>
            <div class="price">$19<span>/month</span></div>
            <ul style="list-style: none; text-align: left; margin-bottom: 30px; color: var(--neutral-grey); line-height: 2;">
                <li>✓ Up to 100 Members</li>
                <li>✓ Automated Renewal Mails</li>
                <li>✓ Basic Analytics</li>
                <li style="color: #ccc; text-decoration: line-through;">✕ Custom Branding</li>
            </ul>
            <a href="#" class="btn-primary" style="background: none; color: var(--primary); border: 1px solid var(--primary); width: 100%; justify-content: center;">Get Started</a>
        </div>

        <div class="pricing-card" style="border-color: var(--primary); transform: scale(1.05); box-shadow: var(--shadow-md);">
            <span style="background: var(--primary); color: white; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: bold; text-transform: uppercase;">Popular</span>
            <h3 style="margin-top: 10px;">Business Plan</h3>
            <p style="color: var(--body-text); font-size: 14px; margin-top: 8px;">For national associations</p>
            <div class="price">$49<span>/month</span></div>
            <ul style="list-style: none; text-align: left; margin-bottom: 30px; color: var(--neutral-grey); line-height: 2;">
                <li>✓ Up to 5,000 Members</li>
                <li>✓ Automated Payments</li>
                <li>✓ Advanced Reports</li>
                <li>✓ Custom Branding</li>
            </ul>
            <a href="#" class="btn-primary" style="width: 100%; justify-content: center;">Get Started</a>
        </div>

        <div class="pricing-card">
            <h3>Enterprise</h3>
            <p style="color: var(--body-text); font-size: 14px; margin-top: 8px;">For large scale systems</p>
            <div class="price">$99<span>/month</span></div>
            <ul style="list-style: none; text-align: left; margin-bottom: 30px; color: var(--neutral-grey); line-height: 2;">
                <li>✓ Unlimited Members</li>
                <li>✓ Dedicated Manager</li>
                <li>✓ API Integration</li>
                <li>✓ 24/7 Priority Support</li>
            </ul>
            <a href="#" class="btn-primary" style="background: none; color: var(--primary); border: 1px solid var(--primary); width: 100%; justify-content: center;">Contact Us</a>
        </div>
    </div>
</main>

<?php
renderFooter();
?>