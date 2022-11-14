<?php

$todosArray = json_decode(file_get_contents('./todos.json'), true);

if (is_null($todosArray)) {
    $todosArray = [];
}

$todosArray[] = [
    "task" => $_POST['newTask'],
    "createdAt" => "Created at: " . date('Y/m/d h:i:s'),
];

file_put_contents('./todos.json', json_encode($todosArray));
echo 'Done';