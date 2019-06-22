<!DOCTYPE HTML>

<html>
	<head>
		<title>Online Attendance Management System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header" class="alt">
				
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">About us</a></li>
					<li><a href="elements.html">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<div id="main" class="container">

				<!-- Content -->
					<!-- Form -->
					
								<h3>SIGN UP FORM FOR TEACHER </h3>

								<form method="post" action="signteach.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<label>Enter Name<input type="text" name="name" id="name" value="" placeholder="Name" /></label>
										
										<div class="6u 12u$(xsmall)">
											<label>Enter Email<input type="email" name="email" id="email" value="" placeholder="Email" /></label>
										</div>
										<div class="6u 12u$(xsmall)">
											<label>Enter Password<input type="password" name="pass" id="pass" value="" placeholder="password" /></label>
											<label>Retype Password<input type="password" name="pass1" id="pass" value="" placeholder="password" /></label>
											<label>Course<input type="text" name="course" id="course" value="" placeholder="course" /></label>

										</div>


										<!-- Break -->
										<div class="12u$">
											<div class="select-wrapper">
												<label>Branch</label>
												<select name="category" id="category">
													<option value="cs">Computer Science-</option>
													<option value="is">Information Science</option>
													<option value="mech">Mechanical</option>
													<option value="ece">Electronic and Communication</option>
													<option value="eee">Electrical Enigineering</option>
												</select>
											</div>

										</div><br/>
										<div class=12u$(xsmall)>
										<label>Enter Designation<input type="text" name="desi" id="desi" value="" placeholder="Designation" /></label><br/><br/></div>
										<!-- Break -->
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-low" name="priority" checked>
											<label for="priority-low">Male</label>
										</div>
										<div class="4u 12u$(small)">
											<input type="radio" id="priority-normal" name="priority">
											<label for="priority-normal">Female</label>
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" name="submit" value="submit" /></li>
												<li><input type="reset" value="Reset" class="alt" /></li>
											</ul>
										</div>
									</div> 
								</form>

									</div> 
								</form>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>