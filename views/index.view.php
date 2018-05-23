<<<<<<< HEAD
<?php require 'views/partials/head.php'; ?>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->isCompleted()) : ?>
                    <strike>
                        <strong><?= $task->title() ?></strong>
                    </strike>
                <?php else : ?>
                    <strong><?= $task->title() ?></strong>
                <?php endif; ?>
                    
                <ul>
                    <li>Description : <?= $task->description() ?></li>
                    <li>Status : <?= $task->status() ?></li>
                    <li>Due date : <?= $task->dueDate() ?></li>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>

<?php require 'views.partials/footer.php'; ?>

=======
<?php include_once 'partials/head.php'; ?>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->isCompleted()) : ?>
                <strike>
                    <strong><?= $task->title() ?></strong>
                </strike>
            <?php else : ?>
                <strong><?= $task->title() ?></strong>
            <?php endif; ?>
                
            <ul>
                <li>Description : <?= $task->description() ?></li>
                <li>Status : <?= $task->status() ?></li>
                <li>Due date : <?= $task->dueDate() ?></li>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>

<?php include_once 'partials/footer.php'; ?>
>>>>>>> 0ef52ef9865da93707ccd109e00a59e41f663b59
