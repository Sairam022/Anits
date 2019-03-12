<html>
	<head>
		<title>ADD STUDENT DATA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" type="image/jpg" href="images/res.jpg" />
	</head>
	<style>
	table {
	width: 75%;
	text-align: center;
	}
	input[type="text"], input[type="password"], input[type="email"], input[type="date"], input[type="search"], input[type="url"], select, textarea {
	width: 100%;
	}
	</style>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">ANITS</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="Admin_Home.html">Home</a></li>
					<li><a href="List1.html">Student Details</a></li>
					<li><a href="retrieve_complaints.php">Check Complaints</a></li>
					<li><a href="faculty_details_to_update.html">Update Faculty Subject Details</a></li>					
					<li><a href="faculty_details_to_delete.html">Delete Faculty Subject Details</a></li>					
					<li><a href="Student_data_to_enter.html">Add Student Data</a></li>
					<li><a href="DELETE_Details.html">Delete Student Data</a></li>
					<li><a href="main_instructions.html">Upload Student Data File</a></li>
					<li><a href="Student_data_to_update.html">Update Student Data</a></li>
					<li><a href="team.html">About Us</a></li>
					<li><a href="AdminLogin.html">Logout</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>STUDENT RESULT ANALYSIS</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<CENTER><font face="Baskerville Old Face" size="+3">ENTER DETAILS</font>
						</header><br>
<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//echo "connected";
//mysql_query("create database sem_project") ;
//echo"database created ";
mysql_select_db("sem_project") or die("not selected");
$batch=$_SESSION['batch1'];
$year=$_SESSION['year1'];
$sem=$_SESSION['sem1'];
$_SESSION['batch1']=$batch;
$_SESSION['year1']=$year;
$_SESSION['sem1']=$sem;

$sub1="PROFEESIONAL_ELECTIVE_4";
$sub2="PROFESSIONAL_ELECTIVE_5";
$sub3="PROJECT_2";


?>

<center>
<form method="POST" action="insert_details_2.php">
<font face="Baskerville Old Face" size="4px">
<table>
<tr> <td> ACADEMIC YEAR </td>
	 <td> <input type="text" placeholder="YYYY-YYYY" required="required" name="ayear" pattern="^2\d{3}-[0-9]{4}" title="Format should be YYYY-YYYY"> </td> </tr>
<tr> <td> ROLL NUMBER </td>
	 <td> <input type=text placeholder="ROLL NUMBER" required="required" name="rollnumber" pattern="^[3][0-9]{11}" title="Only digits are allowed, 12 digits, Starting with 3"> </td> </tr>
<tr> <td> SECTION </td> 
	 <td> <select name="section" required><option value=""> --SELECT-- </option><option value="A">A-section</option><option value="B">B-section</option><option value="C">C-section</option></select> </td> </tr>
<tr> <td> <?php echo $sub1;?> </td>
	 <td> <select name="sub1" required><option value="">--</option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> <?php echo $sub2;?> </td>
	 <td> <select name="sub2" required><option value="">--</option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> <?php echo $sub3;?> </td>
	 <td> <select name="sub3" required><option value="">--</option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> SGPA </td>
	 <td> <input type=text placeholder="SGPA" required="required" name="sgpa"> </td> </tr>
<tr> <td> CGPA </td>
	 <td> <input type=text placeholder="CGPA" required="required" name="cgpa"> </td> </tr>
<tr> <td> PASS DATE </td>
	 <td> <input type=date placeholder="date" required="required" name="date"> </td> </tr>
<tr> <td> ATTENDANCE </td>
	 <td> <input type=text placeholder="Only Number" required="required" name="attendence"> </td> </tr>
</table>
<center>
<input type=submit value=SUBMIT name=sub>        <input type="RESET" value="RESET" name="reset">
</table>
</center>
</form>

</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content" style="display: block;text-align: center;">
					<font face="Baskerville Old Face" size="5px" color="#ffffff">Designed & Developed By 3/4 <b><a href="team.html">DONT STOP</a></b> Team <br /> Department of CSE</font>
					</div>
					<div class="copyright">
					<font face="Baskerville Old Face" size="5px" color="#ffffff"> All Rights Reserved <br />©ANITS 2018-2019</font>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>        