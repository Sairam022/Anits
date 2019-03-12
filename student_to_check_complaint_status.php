<html>
	<head>
		<title>Student Complaints</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />		
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" type="image/jpg" href="images/res.jpg" />
	</head>
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
				<li><a href="List_check.html">Home</a></li>
					<li><a href="ssingle_student_data_retrieve.php">Student Details</a></li>
					<li><a href="student_to_check_complaint_status.php">Complaint Status</a></li>
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
							<CENTER><font face="Baskerville Old Face" size="+3">COMPLAINTS</font>
						</header><br>

<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//echo "connected";
//mysql_query("create database sem_project") ;
//echo"database created ";
mysql_select_db("sem_project") or die("not selected1");
$userid=$_SESSION['user'];
$query= mysql_query("SELECT * FROM complaints_status where roll_number='$userid'")or die("not selected");
$numrows=mysql_num_rows($query);

if($numrows==0)
{
?>
		<script>
		alert("YOU HAVE NO PENDING COMPLAINTS  ");
		window.location.href="Student_Home.html";
		</script>
<?php	

}
	
?>
<center>
<table width="100%" border="0">
								<tr>
									<Td> <b>S.no
									<Td> <b>FACULTY NAME
									<Td> <b>BATCH
									<td> <b>ROLL NUMBER
									<td> <b>SECTION
									<td> <b>YEAR
									<td> <b>SEM
									<td> <b>COMPLAINT
									<td> <b>STATUS
									<td><b>REGISTERED DATE
								</tr>
<?php 
$dbbatch='BATCH';
$dbroll='roll_number';
$dbsection='SECTION';
$dbyear='YEAR';
$dbsem='SEM';
$dbfaculty_name='faculty_name';
$dbstatus='status';
$dbdate='com_date';
$dbcomplaint='complaint';
$solved="SOLVED";	
$c=1;
$count=0;
while($rows = mysql_fetch_array($query))
		{
	$count=$count+1;        
echo "
 		   <br>
  		  <tr> 
	<td>$c</td>
	<td> $rows[$dbfaculty_name] <br>  </td>
	<td> $rows[$dbbatch]   <br></td>
	<td> $rows[$dbroll]   <br></td>
	<td> $rows[$dbsection]   <br></td>
	<td> $rows[$dbyear]   <br></td>
	<td> $rows[$dbsem]   <br></td>	
<td> $rows[$dbcomplaint]   <br></td>
<td>";	if($rows[$dbstatus]==$solved){echo " 
<font style='color:GREEN;font-style:ITALIC;font-size:20'>	$rows[$dbstatus] </font>";}
else{
echo " 
<font style='color:RED;font-style:ITALIC;font-size:20'>	$rows[$dbstatus]</font>";
}
echo "
   <br></td>
<td> $rows[$dbdate]   <br></td>
                <td>";
$c++;
               
	}

$count=0;
?> <?php

		echo '</table><br><br>';			
 ?>

</center>
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