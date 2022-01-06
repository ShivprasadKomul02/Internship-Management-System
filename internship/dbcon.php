<?php 

$sname="localhost:3306";
$user="root";
$password="1234";
$db= "INTERNSHIP";

$conn=mysqli_connect($sname,$user,$password,$db);
//mysqli_select_db($db);

if(!$conn)
{
	echo "connect failed !";
	exit();
}



 ?>	