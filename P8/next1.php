<?php
session_start();

$name = $_SESSION['name'];

echo "<h1>Hello ".$name."</h1>";