<?php
// ჩავრთოთ მონაცემები და კომპონენტები
require_once 'data.php';
require_once 'components.php';

// დავარენდეროთ ჰედერი და ჰერო სექცია
renderHeader($menu_items);
renderHero();
?>

<main class="container" id="features" style="padding-top: 60px;">
    <div class="section-header" style="text-align: center; margin-bottom: 48px;">
        <h2 class="section-title" style="font-size: 36px; font-weight: 700; color: var(--secondary); margin-bottom: 8px;">Manage your entire community in a single system</h2>
        <p class="section-subtitle" style="color: var(--neutral-grey); font-size: 16px;">Who is Nexcent suitable for?</p>
    </div>

    <div class="services-grid">
        <?php foreach ($services as $service): ?>
            <div class="service-card">
                <div class="service-icon">
                    <?php 
                    if ($service['icon'] == 'building') echo '🏢';
                    elseif ($service['icon'] == 'users') echo '👥';
                    elseif ($service['icon'] == 'hands') echo '🤝';
                    else echo '✨';
                    ?>
                </div>
                <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                <p style="color: var(--neutral-grey); font-size: 14px; margin-top: 8px;"><?php echo htmlspecialchars($service['text']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<section class="stats-section" id="community" style="background-color: var(--neutral-light); padding: 64px 0; margin-top: 80px;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; gap: 40px; flex-wrap: wrap;">
        
        <div class="stats-text" style="flex: 1; min-width: 300px;">
            <h2 style="font-size: 36px; font-weight: 700; color: var(--secondary); line-height: 44px;">Helping a local <br><span style="color: var(--primary);">business reinvent itself</span></h2>
            <p style="color: var(--neutral-grey); margin-top: 12px;">We reached here with our hard work and dedication</p>
        </div>

        <div class="stats-grid-box" style="flex: 1; min-width: 300px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 32px;">
            
            <div class="stat-item" style="display: flex; align-items: center; gap: 16px;">
                <span style="font-size: 32px;">👥</span>
                <div>
                    <h3 style="font-size: 28px; font-weight: 700; color: var(--secondary); line-height: 1;">2,245,341</h3>
                    <p style="color: var(--neutral-grey); font-size: 14px;">Members</p>
                </div>
            </div>

            <div class="stat-item" style="display: flex; align-items: center; gap: 16px;">
                <span style="font-size: 32px;">🏢</span>
                <div>
                    <h3 style="font-size: 28px; font-weight: 700; color: var(--secondary); line-height: 1;">46,328</h3>
                    <p style="color: var(--neutral-grey); font-size: 14px;">Clubs</p>
                </div>
            </div>

            <div class="stat-item" style="display: flex; align-items: center; gap: 16px;">
                <span style="font-size: 32px;">📅</span>
                <div>
                    <h3 style="font-size: 28px; font-weight: 700; color: var(--secondary); line-height: 1;">828,867</h3>
                    <p style="color: var(--neutral-grey); font-size: 14px;">Event Bookings</p>
                </div>
            </div>

            <div class="stat-item" style="display: flex; align-items: center; gap: 16px;">
                <span style="font-size: 32px;">💳</span>
                <div>
                    <h3 style="font-size: 28px; font-weight: 700; color: var(--secondary); line-height: 1;">1,926,436</h3>
                    <p style="color: var(--neutral-grey); font-size: 14px;">Payments</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="container" id="blog" style="padding: 80px 24px 20px;">
    <div style="text-align: center; max-width: 600px; margin: 0 auto 48px;">
        <h2 style="font-size: 36px; font-weight: 700; color: var(--secondary);">Nexcent Blog & Insights</h2>
        <p style="color: var(--neutral-grey); margin-top: 12px;">Stay updated with the latest trends, community building tips, and expert perspectives.</p>
    </div>

    <div class="blog-grid">
        <div class="blog-card">
            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?w=800&q=80" class="blog-img" alt="Safe guarding Processes">
            <div class="blog-content">
                <h4 style="font-size: 18px; color: var(--secondary); font-weight: 700;">Creating Streamlined Safeguarding Processes with OneRen</h4>
                <p style="color: var(--neutral-grey); font-size: 14px; margin-top: 8px;">Published on: Jun 05, 2026</p>
                <a href="#" class="read-more-link" style="color: var(--primary); text-decoration: none; font-weight: 600; display: inline-block; margin-top: 16px;">Read Full Article &rarr;</a>
            </div>
        </div>

        <div class="blog-card">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=800&q=80" class="blog-img" alt="Responsibilities">
            <div class="blog-content">
                <h4 style="font-size: 18px; color: var(--secondary); font-weight: 700;">What are your safeguarding responsibilities and how can you manage them?</h4>
                <p style="color: var(--neutral-grey); font-size: 14px; margin-top: 8px;">Published on: Jun 05, 2026</p>
                <a href="#" class="read-more-link" style="color: var(--primary); text-decoration: none; font-weight: 600; display: inline-block; margin-top: 16px;">Read Full Article &rarr;</a>
            </div>
        </div>

        <div class="blog-card">
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=800&q=80" class="blog-img" alt="Modern Technology">
            <div class="blog-content">
                <h4 style="font-size: 18px; color: var(--secondary); font-weight: 700;">Revamping the Membership Experience with Modern Technology</h4>
                <p style="color: var(--neutral-grey); font-size: 14px; margin-top: 8px;">Published on: Jun 05, 2026</p>
                <a href="#" class="read-more-link" style="color: var(--primary); text-decoration: none; font-weight: 600; display: inline-block; margin-top: 16px;">Read Full Article &rarr;</a>
            </div>
        </div>
    </div>
</section>

<?php
// დავარენდეროთ ფუტერი
renderFooter();
?>