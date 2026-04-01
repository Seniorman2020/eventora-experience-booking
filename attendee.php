<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = eventora_data();

eventora_header(
    'attendee',
    'Attendee Dashboard | Eventora',
    'Guest dashboard for upcoming bookings, reservation status, ticket details, and saved experiences.'
);
?>
<main>
    <section class="page-hero compact">
        <div>
            <span class="eyebrow">Attendee dashboard</span>
            <h1>Your upcoming reservations, passes, and saved experiences.</h1>
            <p>Keep confirmations, payment status, and event notes in one place so every booking stays easy to manage.</p>
        </div>
    </section>

    <section class="stats-grid compact-grid">
        <?php foreach ($data['attendee_metrics'] as $metric): ?>
            <article class="stat-card">
                <span><?= eventora_e($metric['label']) ?></span>
                <strong><?= eventora_e($metric['value']) ?></strong>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="split-section">
        <article class="panel">
            <div class="section-head">
                <div>
                    <span class="section-label">Reservations</span>
                    <h2>Current booking status</h2>
                </div>
            </div>
            <div class="booking-stack">
                <?php foreach ($data['attendee_bookings'] as $booking): ?>
                    <article class="booking-card">
                        <div class="card-topline">
                            <strong><?= eventora_e($booking['title']) ?></strong>
                            <span class="tag muted"><?= eventora_e($booking['status']) ?></span>
                        </div>
                        <p><?= eventora_e($booking['note']) ?></p>
                        <div class="card-meta">
                            <span><?= eventora_e($booking['date']) ?></span>
                            <span><?= eventora_e($booking['ticket']) ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </article>

        <aside class="panel dark-panel">
            <span class="section-label">Guest benefits</span>
            <h2>Account privileges</h2>
            <div class="bullet-stack">
                <div class="bullet-item">
                    <strong>Priority confirmation</strong>
                    <p>Instant access to ticket details, booking notes, and entry instructions after reservation.</p>
                </div>
                <div class="bullet-item">
                    <strong>Saved preferences</strong>
                    <p>Store celebration notes, seating preferences, and event interests for faster checkout.</p>
                </div>
                <div class="bullet-item">
                    <strong>Favorites list</strong>
                    <p>Track future experiences before they sell out and monitor booking windows easily.</p>
                </div>
            </div>
        </aside>
    </section>
</main>
<?php eventora_footer(); ?>
