<?php

$conn = new mysqli("localhost","root","","online_attendance");

if(isset($_POST["submit"]))
{    
        $Name = $_POST['name'];
		$email = $_POST['email'];
        $password = $_POST['pass'];
		$retype_pass = $_POST['pass1'];
		$course = $_POST['course'];
		$branch = $_POST['category'];
		$designation = $_POST['desi'];
		echo $Name;
		if($password!=$retype_pass)
		{
		echo "<script>alert('Password mismatched');
			   window.location.href='elements.php';</script>";
			   }
		
		
		$sql = "INSERT INTO teacher (Name, Email_id, course,branch,Designation,password) VALUES ('$Name', '$email', '$course' , '$branch' , '$designation' , '$password');";

		if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
			   echo "<script>alert('SUCCESSFULLY REGISTERED');
			   window.location.href='index.html';</script>";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
			}
			$conn->close();
?>