<?php if ($tasks === []): ?>
    <section class="empty-state" aria-live="polite">
        <div class="empty-icon">✓</div>
        <h2>No tasks found</h2>
        <p>There are no tasks to display for this view.</p>
    </section>
<?php else: ?>
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Status</th>
                    <th scope="col">Task date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <?php $statusClass = strtolower(str_replace(' ', '-', $task['status'])); ?>
                    <tr>
                        <td>
                            <strong><?= esc($task['title']) ?></strong>
                            <?php if ($task['task_date'] === $today): ?>
                                <span class="today-chip">Today</span>
                            <?php endif ?>
                        </td>
                        <td><span class="status status-<?= esc($statusClass, 'attr') ?>"><?= esc(ucwords($task['status'])) ?></span></td>
                        <td><time datetime="<?= esc($task['task_date'], 'attr') ?>"><?= esc(date('M j, Y', strtotime($task['task_date']))) ?></time></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
<?php endif ?>
