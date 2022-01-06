<?php 
include 'dbcon.php';
session_start();

if(isset($_POST["username"]) && isset($_POST["password"]))
{
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$username=test_input($_POST["username"]);
$password=test_input($_POST["password"]); 
if(empty($username))
{
	header("Location:customerLogin.php?error=Username is empty");
}
else if(empty($password))
{
	header("Location:customerLogin.php?error=Password is empty");
}
else
{
	$query = "SELECT * FROM STUDENTLOGIN WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn,$query);

	if(mysqli_num_rows($result)===1)
	{
		$row = mysqli_fetch_assoc($result);
		if($row['username']== $username && $row['password']== $password)
		{
			$_SESSION['id']=$row['enrollment'];
			$_SESSION['username']=$row['username'];	
			header("Location:student-dash.php");  
		}
	}
	else
	{
		

		header("Location:customerLogin.php?error=Username and Password is incorrect");
		echo "<script> alert('Username and Password are incorrect');</script>";
	}
	
}




}

 ?>