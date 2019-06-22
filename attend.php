<html>
<head>

<title>Dashboard</title>

<link rel="stylesheet" type="text/css" href="dashboard.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="my_js.js"></script>

</head>

<body background="#006666">

<div class="header">
<div class="tname">
<h2>
<?php
$conn = new mysqli("localhost","root","","online_attendance");
session_start();
echo "Status update for CID : ";
$cid=$_POST['cid'];
echo $cid;
$conn->close();
?></h2>
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
$query= "select *from attendance where cid=$cid;";
$result=mysqli_query($conn, $query) or die (mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_array($result)) {
    
        $cname = $row['cname'];
		$sem = $row['sem'];
		$sec = $row['sec'];
		$rnstart=$row['rnstart'];
		$rnend=$row['rnend'];
		$start=substr($rnstart,7,3);
		$end=substr($rnend,7,3);
		$usn=substr($rnstart,0,7);
		echo "<marquee><h3>COURSE NAME : $cname , SEC : $sec , SEM : $sem</h3></marquee>";
		
		}
		}
		else {
      echo "<script>alert('invalid username/password');
      window.location.href= 'index.html#two';</script>";
}
$i=$start-1;
$i++;
while($i<=$end)
{
echo "<div class=button1 id=$i> $usn$i <button id=$i onclick='myFunction(this)'><i class='fa fa-plus'></i></button></div>";
$i++;
}
?>
<script>

var count=0;
function myFunction(obj)
{
var id = obj.id;
count = count+1;
document.getElementById(id).style.backgroundColor = "green";
}

function disp()
{
	alert('Total Students Present are : '+count);
    window.location.href= 'teach_home.php';
}

</script>

<br/><br/>
<div class="button2">
<h2><input type="submit" name="submit" value="Submit" id="sub" onclick='disp()'/></h2></div>
</body>
</html>