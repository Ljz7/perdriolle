<?php include_once 'partials/head.php'; ?>

<h1>Task creation form</h1>

<form action="/add/task" method="POST">
    <input type="text" name="title" />
    <input type="submit" />
</form>

<?php include_once 'partials/footer.php'; ?>
