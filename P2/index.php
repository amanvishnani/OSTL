<?php
$t = time();
echo($t . "<br>");
echo(date("Y-m-d",$t));


print_r(localtime());
echo "<br><br>";
print_r(localtime(time(),true));

echo "<br><br>";
print_r(date_parse("2013-05-01 12:30:45.5"));

echo "<br><br>";
echo "Jan 1, 2017 was on a ".date("l", mktime(0,0,0,1,1,2017));

echo "<br><br>";
echo timezone_name_from_abbr("EST") . "<br>";

echo "<br><br>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br><br>";
$d1=strtotime("August 15");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 15th of August.";

?>