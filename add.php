<?php
require 'db.php';

$task = $_POST[('task')]; //data from input
if($task == '') {
    echo "You should to input a new task!";
    exit();
}

$sql = 'INSERT INTO tasks(text) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);
//redirect to main page
header('Location: index.php');
exit();
?>