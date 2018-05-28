<?php include_once 'partials/head.php'; ?>

    <h1>Task creation form</h1>

    <form action="/new/task" method="POST">
        <label>Title : </label><input type="text" name="title" required /><br />
        <label>Description : </label><input type="text" name="description" /> <br />
        <label>Due date : </label><input type="date" name="due_date" required /> <br />
        <label>Due time : </label><input type="time" name="due_time" required /> <br />
        <label>Status</label><input type="text" name="status" /> <br />
        <input type="submit" />
    </form>

<?php include_once 'partials/footer.php'; ?>
