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
$year1=$_POST['year'];
$sem1=$_POST['sem'];
$NOBACK=$_POST['noback'];
$rollnumber=$_POST['rollnumber'];
$_SESSION['year11']=$year1;
$_SESSION['sem11']=$sem1;
$_SESSION['rollnumber11']=$rollnumber;
$_SESSION['back']=$NOBACK;


$sub1="";
$sub2="";
$sub3="";
$sub4="";
$sub5="";
$sub6="";
$sub7="";




if($year1=="2" && $sem1=="1")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 2_1_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rollnumber)
			{
				$check=1;
			}	
		}
if($check==1)
{
	$sub1="DATA_STRUCTURES_ALGORITHM";
	$sub2="DIGITAL_LOGICAL_DESIGN";
	$sub3="DMS";
	$sub4="OOPS_WITH_JAVA";
	$sub5="P_S_Q_T";
	$sub6="DATA_STRUCTURES_LAB";
	$sub7="DIGITAL_ELECTRONICS_LAB";	
	$sub8="JAVA_LAB";
}
else
{
?>
		<script>
		alert("STUDENT DATA NOT EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else if($year1=="2" && $sem1=="2")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 2_2_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rollnumber)
			{
				$check=1;
			}	
		}
if($check==1)
{
		$sub1="DATA_COMMUNICATION";
	$sub2="MICROPROCESSOR_INTERFACING";
	$sub3="OPERATING_SYSTEMS";
	$sub4="COMPUTER_ORGANIZATION";
	$sub5="FLAT";
	$sub6="MP_LAB";
	$sub7="OPERATING_SYSTEM_LAB";	
	$sub8="HARDWARE_LAB";

}
else
{
?>
		<script>
		alert("STUDENT DATA NOT EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else if($year1=="1" && $sem1=="1")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 1_1_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rollnumber)
			{
				$check=1;
			}	
		}
if($check==1)
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
else
{
?>
		<script>
		alert("STUDENT DATA NOT EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else if($year1=="1" && $sem1=="2")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 1_2_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rollnumber)
			{
				$check=1;
			}	
		}
if($check==1)
{
	$sub1="ENGI_MATHEMATICS_2";
$sub2="ENGI_PHYSICS";
$sub3="ENVIRONMENTAL_SCIENCES";
$sub4="ENGI_DRAWING";
$sub5="ELEMENTS_OF_ELECTRICAL_ENGI";
$sub6="ENGI_PHYSICS_LAB";
$sub7="LANGUAGE_LAB";
$sub8="OOP_WITH_CPP_LAB";


}
else
{
?>
		<script>
		alert("STUDENT DATA NOT EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else if($year1=="3" && $sem1=="1")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 3_1_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rollnumber)
			{
				$check=1;
			}	
		}
if($check==1)
{
	header('Location:UPDATE_Details_1.php');

}
else
{
?>
		<script>
		alert("STUDENT DATA NOT EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else if($year1=="3" && $sem1=="2")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 3_2_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rollnumber)
			{
				$check=1;
			}	
		}
if($check==1)
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
else
{
?>
		<script>
		alert("STUDENT DATA NOT EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	

}
else if($year1=="4" && $sem1=="1")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 4_1_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rollnumber)
			{
				$check=1;
			}	
		}
if($check==1)
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
else
{
?>
		<script>
		alert("STUDENT DATA NOT EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else if($year1=="4" && $sem1=="2")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 4_2_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rollnumber)
			{
				$check=1;
			}	
		}
if($check==1)
{
header('Location:UPDATE_Details_2.php');

}
else
{
?>
		<script>
		alert("STUDENT DATA NOT EXIST");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST*");
		window.location.href="Student_data_to_update.html";
		</script>
<?php	
}	
}

?>
<form method="POST" action="updated_details.php">
<center>                                    
<font face="Baskerville Old Face" color="RED" size="+2">
** IF YOUR NOT UPDATING ALL DETAILS  SIMPLY GIVE AS "0" TO THE FIELD YOU DONT WANT TO UPDATE** <br>
 IF IT IS LIST "--" LEAVE IT LIKE THIS <br> IF IT IS BRANCH OR ACADEMIC YEAR "0000-0000" <br>
 IF IT IS DATE "0000-00-00" <br>
</font>
<font face="Baskerville Old Face" size="+2">
<table>
<tr> <td> BATCH </td>
	 <td> <input type=text placeholder="YYYY-YYYY" required="required" name="batch" pattern="^2\d{3}-[0-9]{4}" title="Format should be YYYY-YYYY"> </td> </tr>
<tr> <td> ACADEMIC YEAR </td>
	 <td> <input type="text" placeholder="YYYY-YYYY" required="required" name="ayear" pattern="^2\d{3}-[0-9]{4}" title="Format should be YYYY-YYYY"> </td> </tr>
<tr> <td> ROLL NUMBER </td>
	 <td> <input type="text" placeholder=" " required="required" name="rollnumber" pattern="^[3][0-9]{11}" title="Only digits are allowed, 12 digits, Starting with 3"> </td> </tr>
<tr> <td> SECTION </td>
	 <td> <select name="section"><option value="0">---</option><option value="A">A-section</option><option value="B">B-section</option><option value="C">C-section</option></select> </td> </tr>
<tr> <td> SUBJECT </td> 
	 <td> <select name="subject"><option value="0">---</option><option value="<?php echo $sub1;?>"><?php echo $sub1;?></option><option value="<?php echo $sub2;?>"><?php echo $sub2;?></option><option value="<?php echo $sub3;?>"><?php echo $sub3;?></option><option value="<?php echo $sub4;?>"><?php echo $sub4;?></option><option value="<?php echo $sub5;?>"><?php echo $sub5;?></option><option value="<?php echo $sub6;?>"><?php echo $sub6;?></option><option value="<?php echo $sub7;?>"><?php echo $sub7;?></option><option value="<?php echo $sub8;?>"><?php echo $sub8;?></option></select> </td> </tr>
<tr> <td> GRADE </td>
	 <td> <select name="grade"><option value="">--</option><option value="O">'O'-grade</option><option value="A+">'A+'-grade</option><option value="A">'A'-grade</option><option value="B+">'B+'-grade</option><option value="B">'B'-grade</option><option value="C">'C'-grade</option><option value="P">'P'-grade</option><option value="F">'F'-grade</option></select> </td> </tr>
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