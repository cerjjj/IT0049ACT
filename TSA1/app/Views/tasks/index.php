<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="hero compact">
    <div>
        <p class="eyebrow">Complete schedule</p>
        <h1>All tasks</h1>
        <p class="lead">Every task in the database, ordered by task date.</p>
    </div>
    <div class="metric" aria-label="Total task count">
        <span><?= count($tasks) ?></span>
        <small>total tasks</small>
    </div>
</section>

<?= view('components/task_table', ['tasks' => $tasks, 'today' => $today]) ?>
<?= $this->endSection() ?>
