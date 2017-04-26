<?php
$con=mysql_connect('localhost','root','aman');
if(!$con)
{
	die('could not connect:'.mysql_error());
}
echo "Connection establised</br>";
$db=mysql_select_db("test",$con) or die('DB does not exist');

$sql_create = "CREATE TABLE IF NOT EXISTS stud (name varchar(25),class varchar(6),roll varchar(3))";

mysql_query($sql_create) or die("Error Creating DB".mysql_error());

$name = $_GET["n1"];
$class = $_GET["n2"];
$rollno = $_GET["n3"];
$query ="Insert into stud values('$name','$class','$rollno');";
//$query ="select * from stud;";
mysql_query($query) or die('Error inserting data');

$rows = mysql_query("SELECT * FROM stud;");
echo "<pre>";

while($row = mysql_fetch_array($rows))
{
	print_r($row);
}
echo "</pre>";

mysql_close();
CONST a="</br>";
echo "Name:".$_GET["n1"].a;
echo "Class:".$_GET["n2"].a;
echo "Roll_No:".$_GET["n3"].a;
?>
