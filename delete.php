<?php
require 'db.php';

// extract needed ID
$id = $_GET['ID'];

$sql = 'DELETE FROM tasks WHERE ID = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header("Location: index.php");
?>