<?php
$str = bin2hex("Hello World!");
echo($str)."<br>"; 

$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!") . "<br>";

$str = "Hello world!";
echo chunk_split($str,1,".") . "<br>";

echo count_chars($str,3) . "<br>";

echo hex2bin("48656c6c6f20576f726c6421") . "<br>";

$str = "Hello";
echo md5($str) . "<br>";

$str = "Hello";
echo sha1($str) . "<br>";

echo strlen("Hello") . "<br>";

$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!") . "<br>";

echo substr("Hello world",6) . "<br>";

echo strtolower("Hello WORLD.");