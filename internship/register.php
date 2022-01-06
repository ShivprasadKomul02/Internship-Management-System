<?php 
include 'dbcon.php';
session_start();


	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$enrollment = $_POST["enrollment"];
$cgpa= $_POST["cgpa"];
$passingyear= $_POST["passingyear"];
$branch= $_POST["branch"];
$year= $_POST["year"];
$division= $_POST["division"];
$age= $_POST["age"];
$password1= $_POST["password1"];
$password2= $_POST["password2"];





	if($password1!=$password2)
	{
		header("Location:index.php?error=Password mismatch");
	}
	else
	{


		$query = mysqli_query($conn,"SELECT * FROM STUDENT WHERE enrollment='$enrollment'")or die(mysqli_error());
		$count = mysqli_num_rows($query);

		if ($count > 0){ 
		echo "<script>
		alert('User Already Exist');
		</script>";
				$_POST = array();

		header("Location: customerLogin.php");
			
		}
		else
		{

			$query="INSERT INTO STUDENT(firstname,lastname,email,mobile,enrollment,cgpa,passingyear,branch,year,division,age) 
				VALUES ('$firstname','$lastname','$email','$mobile','$enrollment','$cgpa','$passingyear','$branch','$year','$division','$age')";


			$check=mysqli_query($conn,$query) or die(mysqli_error($conn));


				if(mysqli_affected_rows($conn)>0)
				{
				echo "<script>
				alert('Record Inserted Successfully');
				</script>";


				$query=mysqli_query($conn,"INSERT INTO STUDENTLOGIN VALUES('$enrollment','$email','$password')");
				header("Location: customerLogin.php");
				$_POST = array();
				echo "<script>
				alert('Record Inserted Successfully');
				</script>";
				}
				else
				{
				echo "<script>
					alert('Unsuccesful');
					</script>";
				}
		}
	}



 ?>