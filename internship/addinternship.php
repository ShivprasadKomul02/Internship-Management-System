<?php 
include 'dbcon.php';
include 'session.php';
//session_start();


	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$date1="30-12-1899 9:25:52 AM";
$format = 'Y-m-d';


$jobid = $_POST["jobid"];	
$jobname = $_POST["jobname"]	;
$companyname = $_POST["companyname"]	;
$dateposted = date('Y-m-d H:i:s');
$location = $_POST["location"];	
$cgpa= $_POST["cgpa"];
$duration= $_POST["duration"]	;
$stipend= $_POST["stipend"];	
$lastdate=date("Y-m-d H:i:s", strtotime($_POST["lastdate"]));

$passingyear= $_POST["passingyear"];	
$description= $_POST["description"];




	if($session_id!="CM101")
	{
		echo "<script> alert('Action Not Allowed')</script>";	
		header("Location:index.php?error=Action Not Allowed");
	}
	else
	{


		$query ="SELECT * FROM INTERNSHIPINFO WHERE jobid='$jobid'"; 
		$result=mysqli_query($conn,$query)or die(mysqli_error());
		$count = mysqli_num_rows($result);

		if ($count>0){ 
		echo "<script>
		alert('Internship Already ADDED');
		</script>";
		$_POST = array();

		header("Location: addinternship.php");
			
		}
		else
		{

			$query="INSERT INTO INTERNSHIPINFO	(jobid,jobname,companyname,dateposted,location,duration,stipend,lastdate,cgpa,passingyear,description) 
				VALUES ('$jobid	','$jobname','$companyname	','$dateposted	','$location','$duration','$stipend','$lastdate','$cgpa','$passingyear','$description')";


			$check=mysqli_query($conn,$query) or die(mysqli_error($conn));


				if(mysqli_affected_rows($conn)>0)
				{
					
					echo "<script>
					alert('Internship Added Successfully');
					</script>";
					header("Location:admin-dash.php");
					
				// $query=mysqli_query($conn,"INSERT INTO STUDENTLOGIN VALUES('$enrollment','$email','$password')");
				// header("Location: customerLogin.php");
				// $_POST = array();
				// echo "<script>
				// alert('Record Inserted Successfully');
				// </script>";
				// }
				// else
				// {
				// echo "<script>
				// 	alert('Unsuccesful');
				// 	</script>";
				 }
		}
	}



 ?>