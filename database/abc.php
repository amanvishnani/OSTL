<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
	die('could not connect:'.mysql_error());
}
echo "Connection establised";
$db=mysql_select_db("mgm",$con);
$name = $_GET["n1"];
$class = $_GET["n2"];
$rollno = $_GET["n3"];
$query ="Insert into stud values('$name','$class','$rollno');";
//$query ="select * from stud;";
mysql_query($query);
mysql_close();
CONST a="</br>";
echo "Name:".$_GET["n1"].a;
echo "Class:".$_GET["n2"].a;
echo "Roll_No:".$_GET["n3"].a;
?>
