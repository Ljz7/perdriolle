<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title></title>
</head>

<body>
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
</body>
</html>
