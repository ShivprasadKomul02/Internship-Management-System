<?php
//Start session
include 'dbcon.php';
session_start();


if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
	header("location:index.php");
   exit();
}

$session_id=$_SESSION['id'];

$user_query = mysqli_query($conn,"select * from ADMIN where facultyid = '$session_id'")or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);
//$admin_username = $user_row[''];
?>