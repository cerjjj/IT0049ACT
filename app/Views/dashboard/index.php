<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero">
    <div>
        <p class="eyebrow">Daily focus</p>
        <h1>Today’s tasks</h1>
        <p class="lead">A focused list for <?= esc(date('l, F j, Y', strtotime($today))) ?>.</p>
    </div>
    <div class="metric" aria-label="Task count">
        <span><?= count($tasks) ?></span>
        <small><?= count($tasks) === 1 ? 'task today' : 'tasks today' ?></small>
    </div>
</section>

<section class="section-heading">
    <div>
        <h2>Today’s queue</h2>
        <p>Only tasks whose task date matches today are shown here.</p>
    </div>
    <a class="text-link" href="/tasks">View complete task list →</a>
</section>

<?= view('components/task_table', ['tasks' => $tasks, 'today' => $today]) ?>
<?= $this->endSection() ?>
