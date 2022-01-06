<?php 
include 'dbcon.php';
include 'session.php';
//session_start();


	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspchars($data);
  return $data;
}


$jobid = 11111;
$enrollment = $session_id;

	if($session_id=="CM101")
	{
		echo "<script> alert('Action Not Allowed')</script>";	
		header("Location:student-dash.php?error=Action Not Allowed");
	}
	else
	{


		$query ="SELECT * FROM APPLIEDINTERNS WHERE enrollment='$session_id'"; 
		$result=mysqli_query($conn,$query)or die(mysqli_error());
		$count = mysqli_num_rows($result);

		if ($count>0){ 
		echo "<script>
		alert('Already Applied Check Another');
		</script>";
		$_POST = array();
		header('location:applyintern.php');
	
			
		}
		else
		{
			echo "<script>
		alert('TEst');
		</script>";

			$query="INSERT INTO APPLIEDINTERNS	(jobid,enrollment) 
				VALUES ('$jobid	','$enrollment')";


			$check=mysqli_query($conn,$query) or die(mysqli_error($conn));


				if(mysqli_affected_rows($conn)>0)
				{
					

					echo "<script>
					alert('Internship Applied Successfully');
					</script>";
					header('location:student-dash.php');
				 }
				 else
				 {
				 	echo "<script>
					alert('There is Problem submitting you're request contact admin);
					</script>";
				 }

		}
	}



 ?>