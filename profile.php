<html>
<head>
<title>Dashboard</title>

<link rel="stylesheet" type="text/css" href="dashboard.css" />

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
?> !!!!</h2>
</div>
<div class="logout">

<h2><a href="teach_home.php">Home</a> | <a href="profile.php">Profile</a> | <a href="index.html">Logout</a></h2>
</div>
</div>
<br><br>
<h3>Details of the teacher are:</h3> 
<div class="button">
<?php
echo "Name : ";
echo $_SESSION['Name'];
echo ("<br>Email_id : "); 
echo $_SESSION['Email_id'];
echo ("<br>Course : "); 
echo $_SESSION['course'];
echo ("<br>Branch : "); 
echo $_SESSION['branch'];
echo ("<br>Designation : "); 
echo $_SESSION['Designation'];
?>
</div>

</body>
</html>