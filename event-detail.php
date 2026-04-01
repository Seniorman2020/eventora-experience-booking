<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = eventora_data();
$event = $data['featured_event'];

eventora_header(
    'event',
    'Featured Event | Eventora',
    'Detailed event page with reservation information, highlights, venue details, and premium booking presentation.'
);
?>
<main>
    <section class="detail-hero">
        <div class="detail-copy">
            <span class="eyebrow">Featured event</span>
            <h1><?= eventora_e($event['name']) ?></h1>
            <p><?= eventora_e($event['summary']) ?></p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="attendee.php">Reserve now</a>
                <a class="btn btn-secondary" href="discover.php">Back to listings</a>
            </div>
        </div>
        <div class="detail-summary">
            <article>
                <span>Date</span>
                <strong><?= eventora_e($event['date']) ?></strong>
            </article>
            <article>
                <span>Time</span>
                <strong><?= eventora_e($event['time']) ?></strong>
            </article>
            <article>
                <span>Venue</span>
                <strong><?= eventora_e($event['venue']) ?></strong>
            </article>
            <article>
                <span>Price</span>
                <strong><?= eventora_e($event['price']) ?></strong>
            </article>
            <article>
                <span>Capacity</span>
                <strong><?= eventora_e($event['capacity']) ?></strong>
            </article>
            <article>
                <span>Format</span>
                <strong><?= eventora_e($event['type']) ?></strong>
            </article>
        </div>
    </section>

    <section class="split-section">
        <article class="panel">
            <div class="section-head">
                <div>
                    <span class="section-label">Experience details</span>
                    <h2>Why guests choose this event</h2>
                </div>
            </div>
            <div class="bullet-stack">
                <?php foreach ($event['highlights'] as $highlight): ?>
                    <div class="bullet-item">
                        <strong><?= eventora_e($highlight) ?></strong>
                        <p>Designed to keep the evening smooth from reservation confirmation to arrival and table service.</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>

        <aside class="panel dark-panel">
            <span class="section-label">Reservation tiers</span>
            <h2>Booking structure</h2>
            <div class="tier-stack">
                <div class="tier-card">
                    <strong>Standard Entry</strong>
                    <p>N18,000</p>
                    <span>Digital ticket with general access</span>
                </div>
                <div class="tier-card">
                    <strong>Signature Terrace</strong>
                    <p>N32,000</p>
                    <span>Priority entry, reserved view section, welcome service</span>
                </div>
                <div class="tier-card">
                    <strong>Private Lounge</strong>
                    <p>N65,000</p>
                    <span>Dedicated host support and premium group placement</span>
                </div>
            </div>
        </aside>
    </section>
</main>
<?php eventora_footer(); ?>
