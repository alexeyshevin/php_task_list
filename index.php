<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>To do List</title>
</head>
<body>
<h1>To Do List</h1>
<form action="add.php" method="post" class="container">
    <input type="text" name="task" id="task" placeholder="Input new task...">
    <button type="submit" name="submit" class="submit">Submit</button>
</form>
<?php
require 'db.php';

 // we need to show all tasks
echo '<ul>';
$query = $pdo->query('SELECT * FROM `tasks`');
// $record is every record in DB
while($record = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<li>'.$record->text.'<a href="delete.php?ID='.$record->ID.'"><button class="delete">Delete</button></a></li>';
}
echo '</ul>';
?>
    
</body>
</html>