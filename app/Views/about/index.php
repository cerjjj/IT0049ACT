<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero compact">
    <div>
        <p class="eyebrow">About this project</p>
        <h1>Tasks for Today</h1>
        <p class="lead">A small internal task-management system built with CodeIgniter 4 and an MVC architecture.</p>
    </div>
</section>

<section class="about-grid">
    <article>
        <p class="card-kicker">Purpose</p>
        <h2>A clearer daily view</h2>
        <p>The Today page filters the shared task table by the current date, while the All Tasks page presents the complete schedule in chronological order.</p>
    </article>
    <article>
        <p class="card-kicker">Developer</p>
        <h2><?= esc($developerName) ?></h2>
        <p>This application was created as the IT0049 Technical Summative Assessment 1 project.</p>
    </article>
    <article>
        <p class="card-kicker">Technology</p>
        <h2>CodeIgniter 4</h2>
        <p>The project uses controllers, models, views, migrations, and seeders to keep the interface and data access responsibilities clearly separated.</p>
    </article>
</section>
<?= $this->endSection() ?>
