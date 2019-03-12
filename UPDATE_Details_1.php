<html>
	<head>
		<title>UPDATE DETAILS</title>
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
						<header><font face="Baskerville Old Face" size="+3">
							<CENTER><b><h2>UPDATE DETAILS</b></h2></font>
						</header>
						<center>
<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//echo "connected";
//mysql_query("create database sem_project") ;
//echo"database created ";
mysql_select_db("sem_project") or die("not selected");
$year1=$_SESSION['year11'];
$sem1=$_SESSION['sem11'];
$NOBACK=$_SESSION['back'];

$rollnumber=$_SESSION['rollnumber11'];
$_SESSION['year11']=$year1;
$_SESSION['sem11']=$sem1;
$_SESSION['rollnumber11']=$rollnumber;
$_SESSION['back']=$NOBACK;


$sub1="OPEN_ELECTIVE_1";
$sub2="DBMS";
$sub3="COMPUTER_GRAPHICS";
$sub4="COMPUTER_NETWORKS";
$sub5="DAA";
$sub6="DBMS_LAB";
$sub7="COMPUTER_NETWORKS_LAB";
$sub8="SOFT_SKILLS_LAB";
$sub9="QUANTATIVE_VERBAL_APPTITUDE_1";


?>
<center><form method="POST" action="updated_details_1.php"><center>
<font face="Baskerville Old Face" size="+2" color="red">                                     
** IF YOUR NOT UPDATING ALL DETAILS  SIMPLY GIVE AS "0" TO THE FIELD YOU DONT WANT TO UPDATE** <br>
 IF IT IS LIST "--" LEAVE IT LIKE THIS <br> IF IT IS BRANCH OR ACADEMIC YEAR "0000-0000" <br>
 IF IT IS DATE "0000-00-00"  </font>
<br><br>
<font face="Baskerville Old Face" size="+2">
<table>
<tr> <td> BATCH </td>
	 <td> <input type=text placeholder="YYYY-YYYY" required="required" name="batch" pattern="^2\d{3}-[0-9]{4}" title="Format Should be YYYY-YYYY"> </td> </tr>
<tr> <td> ACADEMIC YEAR </td>
	 <td> <input type="text" placeholder="YYYY-YYYY" required="required" name="ayear" pattern="^2\d{3}-[0-9]{4}" title="Format Should be YYYY-YYYY"> </td> </tr>
<tr> <td> ROLL NUMBER </td>
	 <td> <input type="text" placeholder=" " required="required" name="rollnumber" pattern="^[3][0-9]{11}" title="Only digits are allowed, 12 digits, Starting with 3"> </td> </tr>
<tr> <td> SECTION </td>
	 <td> <select name="section"><option value="0">---</option><option value="A">A-section</option><option value="B">B-section</option><option value="C">C-section</option></select> </td> </tr>
<tr> <td> SUBJECT </td>
	 <td> <select name="subject"><option value="0">---</option><option value="<?php echo $sub1;?>"><?php echo $sub1;?></option><option value="<?php echo $sub2;?>"><?php echo $sub2;?></option><option value="<?php echo $sub3;?>"><?php echo $sub3;?></option><option value="<?php echo $sub4;?>"><?php echo $sub4;?></option><option value="<?php echo $sub5;?>"><?php echo $sub5;?></option><option value="<?php echo $sub6;?>"><?php echo $sub6;?></option><option value="<?php echo $sub7;?>"><?php echo $sub7;?></option><option value="<?php echo $sub8;?>"><?php echo $sub8;?></option><option value="<?php echo $sub9;?>"><?php echo $sub9;?></option></select> </td> </tr>
<tr> <td> GRADE </td>
	 <td> <select name="grade" required><option value="">--</option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> SGPA </td>
	 <td> <input type=text placeholder="SGPA" required="required" name="sgpa"> </td> </tr>
<tr> <td> CGPA </td>
	 <td> <input type=text placeholder="CGPA" required="required" name="cgpa"> </td> </tr>
<tr> <td> PASS DATE </td>
	 <td> <input type=date placeholder="date" required="required" name="date"> </td> </tr>
<tr> <td> ATTENDANCE </td>
	 <td> <input type=text placeholder="Only Number" required="required" name="attendence"> </td> </tr>
</table>
	<input type=submit value=SUBMIT name=sub>
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
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>