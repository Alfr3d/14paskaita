<?php

$todosArray = json_decode(file_get_contents('./todos.json'), true);

if (is_null($todosArray)) {
    $todosArray = [];
}

$todosArray[] = [
    "task" => $_POST['newTask'],
    "createdAt" => date('Y/m/d h:i:s'),
    "deadline" => $_POST['deadlineDate'] . ' ' . $_POST['deadlineTime']
];

file_put_contents('./todos.json', json_encode($todosArray));
echo 'Done';