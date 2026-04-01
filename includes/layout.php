<?php
declare(strict_types=1);

require_once __DIR__ . '/data.php';

function eventora_e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function eventora_header(string $activePage, string $title, string $description): void
{
    $data = eventora_data();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= eventora_e($title) ?></title>
    <meta name="description" content="<?= eventora_e($description) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="page-shell">
    <header class="topbar">
        <a class="brand" href="index.php">
            <img src="assets/img/eventora-mark.svg" alt="Eventora mark">
            <div>
                <strong><?= eventora_e($data['brand']['name']) ?></strong>
                <span><?= eventora_e($data['brand']['tagline']) ?></span>
            </div>
        </a>
        <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-label="Toggle navigation">Menu</button>
        <nav class="nav" data-menu>
            <?php foreach ($data['pages'] as $key => $page): ?>
                <a class="nav-link<?= $activePage === $key ? ' active' : '' ?>" href="<?= eventora_e($page['file']) ?>"><?= eventora_e($page['label']) ?></a>
            <?php endforeach; ?>
        </nav>
    </header>
<?php
}

function eventora_footer(): void
{
    $data = eventora_data();
    ?>
    <footer class="footer">
        <div>
            <p class="footer-kicker">Built by <?= eventora_e($data['company']['name']) ?></p>
            <h2>Premium event discovery, reservations, and guest operations in one product.</h2>
        </div>
        <div class="footer-meta">
            <a href="mailto:<?= eventora_e($data['company']['email']) ?>"><?= eventora_e($data['company']['email']) ?></a>
            <span><?= eventora_e($data['company']['phone']) ?></span>
            <span><?= eventora_e($data['company']['license']) ?></span>
            <span>&copy; <?= date('Y') ?> <?= eventora_e($data['company']['name']) ?></span>
        </div>
    </footer>
</div>
<script src="assets/js/app.js"></script>
</body>
</html>
<?php
}
