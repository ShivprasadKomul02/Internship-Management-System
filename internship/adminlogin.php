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
	header("Location:staffLogin.php?error=Username is required");
}
else if(empty($password))
{
	header("Location:staffLogin.php?error=Password is empty");
}
else
{
	$query = "SELECT * FROM ADMIN WHERE username = '$username' AND password = '$password'";
	$result=mysqli_query($conn,$query);

	if(mysqli_num_rows($result)===1)
	{
		$row = mysqli_fetch_assoc($result);
		if($row['username']==$username && $row['password']== $password)
		{
			$_SESSION['id']=$row['facultyid'];
			$_SESSION['username']=$row['username'];
			
			header("Location:admin-dash.php");  
		}
	}
	else
	{
		header("Location:staffLogin.php?error=Username and Password is incorrect");
	}
	
}

}

 ?>