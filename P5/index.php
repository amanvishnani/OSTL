<?php

$myfile = fopen("abc.txt", "a+") or die("Unable to open file!");
$txt = "Append me!";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("abc.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("abc.txt"));
fclose($myfile);

?>