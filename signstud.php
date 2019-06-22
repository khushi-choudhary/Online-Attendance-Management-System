
<?php

$conn = new mysqli("localhost","root","","online_attendance");
if(isset($_POST["submit1"]))
{    
        $Name = $_POST['name1'];
		$usn = $_POST['usn'];
		$email = $_POST['email1'];
        $password = $_POST['pass2'];
		$retype_pass = $_POST['pass3'];
		$sem = $_POST['course1'];
		$branch = $_POST['branch1'];
		if($password!=$retype_pass)
		{
		echo "<script>alert('Password mismatched');
			   window.location.href='student.html';</script>";
			   }
		
		
		
		$sql = "INSERT INTO student (id, Name,sem,Branch,Email_id,Password) VALUES ('$usn', '$Name', '$sem' , '$branch' , '$email' , '$password');";

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



