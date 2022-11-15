<?php
$idForDelete = $_POST['id'];
$tasksList = json_decode(file_get_contents('./todos.json'), true);

unset($tasksList[$idForDelete]);

file_put_contents('./todos.json', json_encode($tasksList));
echo 'Done';
