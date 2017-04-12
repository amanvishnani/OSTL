<?php
session_start();

$name = $_GET['name'];

$_SESSION['name'] = $name;

?>

<a href="./next1.php">Next Page</a>