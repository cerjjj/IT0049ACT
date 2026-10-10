<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A focused daily task dashboard built with CodeIgniter 4.">
    <title><?= esc($pageTitle) ?> | Tasks for Today</title>
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
    <header class="site-header">
        <div class="shell header-inner">
            <a class="brand" href="/" aria-label="Tasks for Today home">
                <span class="brand-mark">✓</span>
                <span>Tasks for Today</span>
            </a>
            <nav aria-label="Primary navigation">
                <a class="<?= $activePage === 'dashboard' ? 'active' : '' ?>" href="/">Today</a>
                <a class="<?= $activePage === 'tasks' ? 'active' : '' ?>" href="/tasks">All Tasks</a>
                <a class="<?= $activePage === 'profile' ? 'active' : '' ?>" href="/profile">Profile</a>
                <a class="<?= $activePage === 'about' ? 'active' : '' ?>" href="/about">About</a>
            </nav>
        </div>
    </header>

    <main class="shell page-content">
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <div class="shell">Tasks for Today Management System · CodeIgniter 4</div>
    </footer>
</body>
</html>
