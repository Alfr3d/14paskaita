<?php
    $todos = json_decode(file_get_contents('./todos.json'), true);

    if (is_null($todos)) {
        $todos = [];
    }
?>
<!DOCTYPE html>
<html>
    <head></head>

    <body>
        <fieldset style="border: 1px black solid; padding: 10px;">
            <legend>New ToDo</legend>
            <form method="post" action="submit.php">
                <input type="text" name="newTask" placeholder="New ToDo">
                <br />
                <input type="date" name="deadlineDate" placeholder="Deadline date">
                <input type="time" name="deadlineTime" placeholder="Deadline time">
                <br />
                <input type="submit">
            </form>
        </fieldset>

        <fieldset style="border: 1px black solid; padding: 10px; margin-top: 50px;">
            <legend>TODOs</legend>
            <?php foreach ($todos as $key => $todoArray): ?>
                <form method="post" action="delete.php">
                    <div style="display: flex; justify-content: space-between">
                        <input type="hidden" name="id" value="<?= $key ?>">
                        <div><?= $todoArray['task'] ?></div>
                        <div>Created at: <?= $todoArray['createdAt'] ?></div>
                        <div>Due date: <?= $todoArray['deadline'] ?></div>
                        <div><input type="submit" value="Delete"></div>
                    </div>
                </form>
                <hr>
            <?php endforeach; ?>
        </fieldset>
    </body>
</html>