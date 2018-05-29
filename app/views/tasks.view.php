<?php include_once 'partials/head.php'; ?>

    <h1>All Tasks</h1>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->iscompleted()) : ?>
                    <strike>
                        <strong><?= $task->title() ?></strong>
                    </strike>
                <?php else : ?>
                    <strong><?= $task->title() ?></strong>
                <?php endif; ?>
                    
                <ul>
                    <li>description : <?= $task->description() ?></li>
                    <li>status : <?= $task->status() ?></li>
                    <li>due date : <?= $task->duedate() ?></li>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>

<?php include_once 'partials/footer.php'; ?>
