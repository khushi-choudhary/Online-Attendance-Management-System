<?php

$conn = new mysqli("localhost","root","","online_attendance");
if(!$conn)
{
echo "connection failed";
exit(0);
}
session_start();
if(isset($_POST['login'])){
$email_id=$_POST['uname'];
$pass=$_POST['psw'];
$query="SELECT * FROM teacher where Email_id='$email_id';";
$result=mysqli_query($conn, $query) or die (mysqli_error($conn));
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    
        $Name = $row['Name'];
		$email = $row['Email_id'];
		$course = $row['course'];
		$branch = $row['branch'];
		$designation = $row['Designation'];
		$password = $row['password'];

		
    if (!strcmp($password, $pass )) {
		$_SESSION['Name'] = $Name;
		$_SESSION['Email_id'] = $email;
		$_SESSION['course']  = $course;
		$_SESSION['branch'] = $branch;
		$_SESSION['Designation'] = $designation;
	    $_SESSION['password'] = $password;
		echo $course;
      header('location: teach_home.php');
    }
    else {
      echo "<script>alert('invalid password');
      window.location.href= 'index.html#two';</script>";

    }
  }
  }
  else {
      echo "<script>alert('invalid username');
      window.location.href= 'index.html#two';</script>";

    }}
?>