<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = eventora_data();
$featured = $data['featured_event'];

eventora_header(
    'index',
    'Eventora | Experience Booking Platform',
    'A premium event booking platform for discovering events, reserving seats, managing guests, and tracking event performance.'
);
?>
<main>
    <section class="hero">
        <div class="hero-copy">
            <span class="eyebrow">Premium reservations platform</span>
            <h1><?= eventora_e($data['brand']['headline']) ?></h1>
            <p class="hero-text"><?= eventora_e($data['brand']['subcopy']) ?></p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="discover.php">Explore events</a>
                <a class="btn btn-secondary" href="event-detail.php">View featured event</a>
            </div>
        </div>
        <div class="hero-card">
            <span class="eyebrow subtle">Featured tonight</span>
            <h2><?= eventora_e($featured['name']) ?></h2>
            <p><?= eventora_e($featured['summary']) ?></p>
            <div class="hero-meta">
                <span><?= eventora_e($featured['date']) ?></span>
                <span><?= eventora_e($featured['venue']) ?></span>
                <span><?= eventora_e($featured['price']) ?></span>
            </div>
        </div>
    </section>

    <section class="stats-grid">
        <?php foreach ($data['stats'] as $stat): ?>
            <article class="stat-card">
                <span><?= eventora_e($stat['label']) ?></span>
                <strong><?= eventora_e($stat['value']) ?></strong>
                <p><?= eventora_e($stat['note']) ?></p>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="split-section">
        <article class="panel">
            <div class="section-head">
                <div>
                    <span class="section-label">Platform value</span>
                    <h2>A polished journey from event discovery to final entry.</h2>
                </div>
                <span class="status-pill">Operationally ready</span>
            </div>
            <div class="feature-grid">
                <?php foreach ($data['features'] as $feature): ?>
                    <article class="feature-card">
                        <h3><?= eventora_e($feature['title']) ?></h3>
                        <p><?= eventora_e($feature['copy']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </article>

        <aside class="panel dark-panel">
            <span class="section-label">Guest priorities</span>
            <h2>What strong booking platforms need to get right.</h2>
            <div class="bullet-stack">
                <div class="bullet-item">
                    <strong>Clear event presentation</strong>
                    <p>Make the value of the event obvious before the guest thinks about checkout friction.</p>
                </div>
                <div class="bullet-item">
                    <strong>Fast reservation flow</strong>
                    <p>Guide the guest from selection to confirmation with minimal distraction and clean seat logic.</p>
                </div>
                <div class="bullet-item">
                    <strong>Reliable guest operations</strong>
                    <p>Give organizers quick access to arrivals, demand patterns, reservation notes, and service exceptions.</p>
                </div>
            </div>
        </aside>
    </section>

    <section class="panel">
        <div class="section-head">
            <div>
                <span class="section-label">Event selection</span>
                <h2>Current highlights</h2>
            </div>
        </div>
        <div class="event-grid">
            <?php foreach ($data['events'] as $event): ?>
                <article class="event-card">
                    <div class="card-topline">
                        <span class="tag"><?= eventora_e($event['category']) ?></span>
                        <span class="tag muted"><?= eventora_e($event['status']) ?></span>
                    </div>
                    <h3><?= eventora_e($event['name']) ?></h3>
                    <p><?= eventora_e($event['summary']) ?></p>
                    <div class="card-meta">
                        <span><?= eventora_e($event['city']) ?></span>
                        <span><?= eventora_e($event['date']) ?></span>
                        <span><?= eventora_e($event['price']) ?></span>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>
<?php eventora_footer(); ?>
