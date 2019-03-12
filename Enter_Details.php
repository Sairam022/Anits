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
			text-align:center;
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
$batch=$_POST['batch'];
$year=$_POST['year'];
$sem=$_POST['sem'];
$_SESSION['batch1']=$batch;
$_SESSION['year1']=$year;
$_SESSION['sem1']=$sem;

$sub9="";
$sub1="";
$sub2="";
$sub3="";
$sub4="";
$sub5="";
$sub6="";
$sub7="";
$sub8="";

if($year=="2" && $sem=="1")
{
	$sub1="DATA STRUCTURES & ALGORITHAMS";
	$sub2="DIGITAL LOGICAL DESIGN";
	$sub3="DISCRETE MATHEMATICALS STRUCTURES";
	$sub4="O.O.P. WITH JAVA";
	$sub5="PSQT";
	$sub6="DATA STRUCTURES LAB";
	$sub7="DIGITAL ELECTONICS LAB";	
	$sub8="JAVA LAB";
}
else if($year=="2" && $sem=="2")
{
	$sub1="DATA COMMUNICATION";
	$sub2="MICROPROCESSOR AND INTERFACING";
	$sub3="OPERATING SYSTEM";
	$sub4="COMPUTER_ORGANIZATION";
	$sub5="FLAT";
	$sub6="MP LAB";
	$sub7="OPERATING SYSTEM LAB";	
	$sub8="HARDWARE LAB";
}
else if($year=="1" && $sem=="1")
{
$sub1="ENGLISH";
$sub2="ENGI_MATHEMATICS_1";
$sub3="ENGI_CHEMISTRY";
$sub4="PROFESSIONAL_E_H_V";
$sub5="BASIC_ELECTRONICS_ENGI";
$sub6="ENGI_CHEMISTRY_LAB";
$sub7="PROGRAMMING_WITH_C_LAB";
$sub8="NCC_NSS_SPORTS";

}
else if($year=="1" && $sem=="2")
{
$sub1="ENGI_MATHEMATICS_2";
$sub2="ENGI_PHYSICS";
$sub3="ENVIRONMENTAL_SCIENCES";
$sub4="ENGI_DRAWING";
$sub5="ELEMENTS_OF_ELECTRICAL_ENGI";
$sub6="ENGI_PHSICS_LAB";
$sub7="LANGUAGE_LAB";
$sub8="OOP_WITH_CPP_LAB";

}
else if($year=="3" && $sem=="1")
{
header('Location:Enter_Details_1.php');
}
else if($year=="3" && $sem=="2")
{
$sub1="COMPILER_DESIGN";
$sub2="SOFTWARE_ENGI";
$sub3="WEB_TECHNOLOGIES";
$sub4="COMPUTER_ARCHITECTURE";
$sub5="PROFESSIONAL_ELECTIVE_1";
$sub6="OPEN_SOURCE_T_LAB";
$sub7="SE_LAB_MINI_LAB";
$sub8="QUANTATIVE_VERBAL_APTITUDE_2";

}
else if($year=="4" && $sem=="1")
{
$sub1="OPEN_ELECTIVE_2";
$sub2="CRYPTOGRAPHY_AND_N_S";
$sub3="OOA_DESIGN";
$sub4="PROFEESIONAL_ELECTIVE_2";
$sub5="PROFESSIONAL_ELECTIVE_3";
$sub6="C_N_S_LAB";
$sub7="INDUSTRAIL_TRAINING_SEMINAR";
$sub8="PROJECT_1";
}
else if($year=="4" && $sem=="2")
{
header('Location:Enter_Details_2.php');
}


?>

<form method="POST" action="insert_details.php">
<center>
<font face="Baskerville Old Face" size="4px">            
<table>
<tr> <td> ACADEMIC YEAR </td>
	 <td> <input type="text" placeholder="YYYY-YYYY" required="required" name="ayear" pattern="^2\d{3}-[0-9]{4}" title="Format should be YYYY-YYYY"></td> <tr>
<tr> <td> ROLL NUMBER </td>
	 <td> <input type=text placeholder="ROLL NUMBER" required="required" name="rollnumber" pattern="^[3][0-9]{11}" title="Only digits are allowed, 12 digits, Starting with 3"></td> </tr>
<tr> <td> SECTION </td>
	 <td> <select name="section" required><option value=""> --SELECT--</option><option value="A">A-section</option><option value="B">B-section</option><option value="C">C-section</option></select> </td> </tr>
<tr> <td> <?php echo $sub1;?> </td>
	 <td> <select name="sub1" required><option value=""> -- </option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> <?php echo $sub2;?> </td> 
	 <td> <select name="sub2" required><option value=""> -- </option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> <?php echo $sub3;?> </td>
	 <td> <select name="sub3" required><option value=""> -- </option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> <?php echo $sub4;?> </td>
	 <td> <select name="sub4" required><option value=""> -- </option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> <?php echo $sub5;?> </td> 
	 <td> <select name="sub5" required><option value=""> -- </option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> <?php echo $sub6;?> </td>
	 <td> <select name="sub6" required><option value=""> -- </option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> <?php echo $sub7;?> </td>
	 <td> <select name="sub7" required><option value=""> -- </option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> <?php echo $sub8;?> </td>
	 <td> <select name="sub8" required><option value=""> -- </option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
<tr> <td> SGPA </td>
	 <td> <input type=text placeholder="SGPA" required="required" name="sgpa"> </td> </tr>
<tr> <td> CGPA </td>
	 <td> <input type=text placeholder="CGPA" required="required" name="cgpa"> </td> </tr>
<tr> <td> PASS DATE </td>
	 <td> <input type="date" placeholder="YYYY-MM-DD" required="required" name="date"> </td> </tr>
<tr> <td> ATTENDANCE </td>
	 <td> <input type=text placeholder="Only Number" required="required" name="attendence"> </td> </tr>
	</table>	
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