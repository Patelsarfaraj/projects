<?php
$cnn= mysqli_connect("localhost","root","");
if(!$cnn)
{
	die("connection failed").mysqli_error();
}
/*else
{
	echo "Connection established<br/>";
}*/
$db= mysqli_select_db($cnn,"titangym");
if(!$db)
{
	die("database not selected").mysqli_error();
}
/*
else{
	echo "Database selected";
}
*/
?>