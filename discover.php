<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = eventora_data();

eventora_header(
    'discover',
    'Discover Events | Eventora',
    'Browse premium events by city, category, and booking status with a refined event discovery experience.'
);
?>
<main>
    <section class="page-hero">
        <div>
            <span class="eyebrow">Discover</span>
            <h1>Find the right experience for the right guest.</h1>
            <p>Browse nightlife, business, dining, and cultural events with clear availability, premium presentation, and a faster path to reservation.</p>
        </div>
    </section>

    <section class="panel">
        <div class="section-head">
            <div>
                <span class="section-label">Live filters</span>
                <h2>Popular selections</h2>
            </div>
        </div>
        <div class="filter-row">
            <?php foreach ($data['filters'] as $filter): ?>
                <span class="filter-chip"><?= eventora_e($filter) ?></span>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="event-grid spacious">
        <?php foreach ($data['events'] as $event): ?>
            <article class="event-card event-card-large">
                <div class="card-topline">
                    <span class="tag"><?= eventora_e($event['category']) ?></span>
                    <span class="tag muted"><?= eventora_e($event['status']) ?></span>
                </div>
                <h2><?= eventora_e($event['name']) ?></h2>
                <p><?= eventora_e($event['summary']) ?></p>
                <div class="card-meta">
                    <span><?= eventora_e($event['city']) ?></span>
                    <span><?= eventora_e($event['date']) ?></span>
                    <span><?= eventora_e($event['price']) ?></span>
                </div>
                <a class="text-link" href="event-detail.php">Open event details</a>
            </article>
        <?php endforeach; ?>
    </section>
</main>
<?php eventora_footer(); ?>
