<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero compact">
    <div>
        <p class="eyebrow">Team member</p>
        <h1>Demo user profile</h1>
        <p class="lead">The single demo user record stored in the users table.</p>
    </div>
</section>

<?php if ($user): ?>
    <section class="profile-card">
        <div class="avatar" aria-hidden="true"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></div>
        <div class="profile-copy">
            <h2><?= esc($user['full_name']) ?></h2>
            <p class="handle">@<?= esc($user['username']) ?></p>
            <dl>
                <div><dt>Email</dt><dd><a href="mailto:<?= esc($user['email'], 'attr') ?>"><?= esc($user['email']) ?></a></dd></div>
                <div><dt>Member since</dt><dd><?= esc(date('F j, Y', strtotime($user['created_at']))) ?></dd></div>
            </dl>
        </div>
    </section>
<?php else: ?>
    <section class="empty-state"><h2>No profile found</h2><p>Run the database seeder to create the demo user.</p></section>
<?php endif ?>
<?= $this->endSection() ?>
