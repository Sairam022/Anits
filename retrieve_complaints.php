<html>
	<head>
		<title>COMPLAINTS</title>
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
							<CENTER><font face="Baskerville Old Face" size="+3">COMPLAINTS</font>
						</header>
						<br>

<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//echo "connected";
//mysql_query("create database sem_project") ;
//echo"database created ";
mysql_select_db("sem_project") or die("not selected1");
$query= mysql_query("SELECT * FROM complaints")or die("not selected");
$h=$_SESSION['administrator_name'];	
$k="admin";
if($h!=$k)
{
?>
		<script>
		alert("YOU CAN'T ACCESS THIS PAGE ");
		window.location.href="List.html";
		</script>
<?php	

}
	
?>
<center>
<table width="100%" border="0">
								<tr>
									<Td> <b>S.no
									<Td> <b>BATCH
									<td> <b>ROLL NUMBER
									<td> <b>SECTION
									<td> <b>YEAR
									<td> <b>SEM
									<td> <b>COMPLAINTS
									<td><b>DELETE
								</tr>
<?php 
$dbbatch='BATCH';
$dbroll='roll_number';
$dbsection='SECTION';
$dbyear='YEAR';
$dbsem='SEM';
$dbcomplaint='complaint';
	$c=1;
$count=0;
echo '<form method="post" action="del_complaints.php">';
while($rows = mysql_fetch_array($query))
		{
	$count=$count+1;        
$id=$rows['S_NO'];
echo "
 		 
  		  <tr> 
	<td>$c</td>
	<td> $rows[$dbbatch] <br>  </td>
	<td> $rows[$dbroll]   <br></td>
	<td> $rows[$dbsection]   <br></td>
	<td> $rows[$dbyear]   <br></td>
	<td> $rows[$dbsem]   <br></td>
	<td> $rows[$dbcomplaint]   <br></td>
                <td>";echo "<input type='checkbox'  id='Delete$count' name='ch[]' value='$id' ><label for='Delete$count'></td> </tr>";
$c++;
               
	}

$count=0;
?> <?php

		echo '</table><br><br><center><input type="submit" value="DELETE"></form>';			
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