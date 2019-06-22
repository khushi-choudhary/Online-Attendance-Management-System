<html>
<head>
<title>Dashboard</title>

<link rel="stylesheet" type="text/css" href="dashboard.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="my_js.js"></script>
</head>
<body>

<div class="header">
<div class="tname">
<h2>
<?php
$conn = new mysqli("localhost","root","","online_attendance");
session_start();
echo "Welcome ";
echo $_SESSION['Name'];
$conn->close();
?> !!</h2>
</div>
<div class="logout">

<h2><a href="teach_home.php">Home</a> | <a href="profile.php">Profile</a> | <a href="index.html">Logout</a></h2>
</div>
</div>


<?php
$conn = new mysqli("localhost","root","","online_attendance");
if(!$conn)
{
echo "connection failed";
exit(0);
}

$temail=$_SESSION['Email_id'];
$query= "SELECT * FROM attendance where temail='$temail';";
$result=mysqli_query($conn, $query) or die (mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    
        $cname = $row['cname'];
		$cid = $row['cid'];
		$sem = $row['sem'];
		$sec = $row['sec'];
		
		echo "<div class='button courses'><form action=attend.php method=post>";
		echo "CNAME : ";
		echo $cname;
		echo ("<br> CID : ");
		echo "<input type=text name=cid value=$cid readonly id=x>";
		echo ("<br> SEM : ");
		echo $sem;
		echo ("<br> SEC :");
		echo $sec;
		echo "<br><input type=submit value='Enter Status' name=enter>"; 
		echo "</form></div>";;
}}
?>
</div>

<div class="button plus">
<button id="popup" onclick="div_show()"><i class="fa fa-plus"></i></button>
</div>

<div id="abc">
<div id="popupContact">
<form action="course_update.php" id="form2" method="post" name="form2">
<h2>Course Taught</h2>
<hr>
<input id="cname" name="cname" placeholder="Course Name" type="text" Required/>
<input id="cid" name="cid" placeholder="Course ID" type="text" Required />
<input id="sec" name="sec" placeholder="Section" type="text" Required />
<input id="sem" name="sem" placeholder="Semester" type="text" Required />
<input id="rnstart" name="rnstart" placeholder="Rollno Start" type="text" Required/>
<input id="rnend" name="rnend" placeholder="Rollno End" type="text" Required/>
<input type="submit" name="submit">
<input type="button" value="Cancel" onclick="div_hide()"> 
</form>
</div>
</div>
</body>
</html>







