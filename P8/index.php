<!DOCTYPE html>
<html>
<body>

<?php
$ip = "127.0.0.1";
$int = 100;
$url="http://www.visiotech.in";
$email = "dds.sarje@gmail.com";
$str = "<h1>Hello World!</h1>";

$url = filter_var($url,FILTER_SANITIZE_URL);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$newstr = filter_var($str, FILTER_SANITIZE_STRING);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
{
    echo("$email is a valid email address</br>");
} 
else
{
    echo("$email is not a valid email address</br>");
}
if (!filter_var($url, FILTER_VALIDATE_URL) === false) 
{
    echo("$url is a valid url</br>");
}
else 
{
    echo("$url is not a valid url</br>");
} 
if (!filter_var($int, FILTER_VALIDATE_INT) === false) 
{
    echo("$int Integer is valid</br>");
}
else
{
    echo("$int Integer is not valid</br>");
}
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) 
{
    echo("$ip is a valid IP address</br>");
}
else 
{
    echo("$ip is not a valid IP address</br>");
}
echo $newstr;
?>

</body>
</html>