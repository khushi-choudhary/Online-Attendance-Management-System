<?php
$conn = new mysqli("localhost","root","","online_attendance");
if(!$conn)
{
echo "connection failed";
exit(0);
}
session_start();
if(isset($_POST['submit'])){
$cname=$_POST['cname'];
$cid=$_POST['cid'];
$sem=$_POST['sem'];
$sec=$_POST['sec'];
$rnstart=$_POST['rnstart'];
$rnend=$_POST['rnend'];
$temail=$_SESSION['Email_id'];
session_start();
$sql = "INSERT INTO attendance (cname,cid,sem,sec,rnstart,rnend,temail) VALUES ('$cname', '$cid', '$sem' , '$sec' , '$rnstart' , '$rnend', '$temail');";

if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
			   echo "<script>alert('SUCCESSFULLY REGISTERED');
			   window.location.href='teach_home.php';</script>";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
	}
			$conn->close();
?>