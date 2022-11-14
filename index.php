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
            <?php foreach ($todos as $todoArray): ?>
                <div style="display: flex; justify-content: space-between">
                    <div><?= $todoArray['task'] ?></div>
                    <div><?= $todoArray['createdAt'] ?></div>
                </div>
                <hr>
            <?php endforeach; ?>
        </fieldset>
    </body>
</html>