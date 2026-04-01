<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = eventora_data();

eventora_header(
    'organizer',
    'Organizer Dashboard | Eventora',
    'Organizer dashboard for reservation performance, event sales, attendance tracking, and guest operations.'
);
?>
<main>
    <section class="page-hero compact">
        <div>
            <span class="eyebrow">Organizer dashboard</span>
            <h1>Event operations built for clarity, speed, and premium guest handling.</h1>
            <p>Monitor bookings, revenue, attendance, and operational tasks from a clean command view designed for event teams.</p>
        </div>
    </section>

    <section class="stats-grid organizer-grid">
        <?php foreach ($data['organizer_metrics'] as $metric): ?>
            <article class="stat-card">
                <span><?= eventora_e($metric['label']) ?></span>
                <strong><?= eventora_e($metric['value']) ?></strong>
                <p><?= eventora_e($metric['delta']) ?></p>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="split-section">
        <article class="panel">
            <div class="section-head">
                <div>
                    <span class="section-label">Event performance</span>
                    <h2>Revenue and seat demand</h2>
                </div>
            </div>
            <div class="booking-stack">
                <?php foreach ($data['organizer_events'] as $event): ?>
                    <article class="booking-card">
                        <div class="card-topline">
                            <strong><?= eventora_e($event['title']) ?></strong>
                            <span class="tag"><?= eventora_e($event['status']) ?></span>
                        </div>
                        <div class="card-meta">
                            <span><?= eventora_e($event['booked']) ?></span>
                            <span><?= eventora_e($event['revenue']) ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </article>

        <article class="panel">
            <div class="section-head">
                <div>
                    <span class="section-label">Daily operations</span>
                    <h2>Execution timeline</h2>
                </div>
            </div>
            <div class="timeline-stack">
                <?php foreach ($data['timeline'] as $item): ?>
                    <div class="timeline-row">
                        <strong><?= eventora_e($item['time']) ?></strong>
                        <p><?= eventora_e($item['task']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>
    </section>
</main>
<?php eventora_footer(); ?>
