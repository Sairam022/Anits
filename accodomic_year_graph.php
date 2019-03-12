<html>
	<head>
		<title>ACADEMIC STUDENT DATA</title>
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
							<CENTER><font face="Baskerville Old Face" size="+3">STUDENT DATA ACADEMIC YEAR WISE</font>
						</header><br>
<a onclick="window.print()"><img src="images/print.jpg" style="width:15%;cursor:pointer;"></a>
<script src="graph_2_field_file.js"></script>

<?php
 session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//echo "connected";
$me2="F";
mysql_select_db("sem_project") or die("not selected");
$d1="Y";
$de1=0;
$year=0;
$result="";
$data="";
$sem=0;

$a1=0;$a2=0;$a3=0;$a4=0;$a5=0;$a6=0;$a7=0;$a8=0;
$b1=0;$b2=0;$b3=0;$b4=0;$b5=0;$b6=0;$b7=0;$b8=0;

$sub1="";
$sub2="";
$sub3="";
$sub4="";
$sub5="";
$sub6="";
$sub7="";
$sub8="";
$sub9="";
$sub10="";
$sub11="";
$sub12="";
$acc_year=$_POST['ayear'];
$year=$_POST['year'];
$sem=$_POST['sem'];
$section=$_POST['section'];
$total1=0;

$_SESSION['ayear']=$acc_year;
$_SESSION['year']=$year;
$_SESSION['sem']=$sem;
$_SESSION['section']=$section;





$query= mysql_query("SELECT ACCODOMIC_YEAR,SECTION FROM 2_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ACCODOMIC_YEAR'];
			$mycheck_sec=$row['SECTION'];
			if($dbuid==$acc_year && $mycheck_sec==$section)
			{
				$dbuid1=1;
			}
		}

	}
$query= mysql_query("SELECT ACCODOMIC_YEAR,SECTION FROM 2_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ACCODOMIC_YEAR'];
			$mycheck_sec=$row['SECTION'];
			if($dbuid==$acc_year && $mycheck_sec==$section)
			{
				$dbuid2=1;
			}
		}

	}
$query= mysql_query("SELECT ACCODOMIC_YEAR,SECTION FROM 1_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ACCODOMIC_YEAR'];
		$mycheck_sec=$row['SECTION'];
			if($dbuid==$acc_year && $mycheck_sec==$section)
				{
				$dbuid3=1;
			}
		}

	}
$query= mysql_query("SELECT ACCODOMIC_YEAR,SECTION FROM 1_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ACCODOMIC_YEAR'];
$mycheck_sec=$row['SECTION'];
			if($dbuid==$acc_year && $mycheck_sec==$section)
						{
				$dbuid4=1;
			}
		}

	}
$query= mysql_query("SELECT ACCODOMIC_YEAR,SECTION FROM 3_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ACCODOMIC_YEAR'];
			$mycheck_sec=$row['SECTION'];
			if($dbuid==$acc_year && $mycheck_sec==$section)
						{
				$dbuid5=1;
			}
		}

	}
$query= mysql_query("SELECT ACCODOMIC_YEAR,SECTION FROM 3_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ACCODOMIC_YEAR'];
			$mycheck_sec=$row['SECTION'];
			if($dbuid==$acc_year && $mycheck_sec==$section)
						{
				$dbuid6=1;
			}
		}

	}
$query= mysql_query("SELECT ACCODOMIC_YEAR,SECTION FROM 4_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ACCODOMIC_YEAR'];
$mycheck_sec=$row['SECTION'];
			if($dbuid==$acc_year && $mycheck_sec==$section)
						{
				$dbuid7=1;
			}
		}

	}
$query= mysql_query("SELECT ACCODOMIC_YEAR,SECTION FROM 4_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ACCODOMIC_YEAR'];
$mycheck_sec=$row['SECTION'];
			if($dbuid==$acc_year && $mycheck_sec==$section)
						{
				$dbuid8=1;
			}
		}

	}











if($year=="3" && $sem=="1")
{

if($dbuid5!=1)
{
?>
		<script>
		alert("ACCODOMIC YEAR  AND CLASS DETAILS NOT AVILABLE");
		window.location.href="Student_data_to_check_accodomic.html";
		</script>
<?php


}
else
{
header('Location:accodomic_year_graph1.php');
}
}
else if($year=="4" && $sem=="2")
{
if($dbuid8!=1)
{
?>
		<script>
		alert("ACADEMIC YEAR DETAILS NOT AVAILABLE");
		window.location.href="Student_data_to_check_accodomic.html";
		</script>
<?php


}
else 
{
header('Location:accodomic_year_graph2.php');
}
}
else if($year=="2" && $sem=="1")
{

if($dbuid1!=1)
{
?>
		<script>
		alert("ACADEMIC YEAR DETAILS NOT AVAILABLE");
		window.location.href="Student_data_to_check_accodomic.html";
		</script>
<?php


}
else
{


	$sub1="DATA_STRUCTURES_ALGORITHM";
	$sub2="DIGITAL_LOGICAL_DESIGN";
	$sub3="DMS";
	$sub4="OOPS_WITH_JAVA";
	$sub5="P_S_Q_T";
	$sub6="DATA_STRUCTURES_LAB";
	$sub7="DIGITAL_ELECTRONICS_LAB";	
	$sub8="JAVA_LAB";
$sub_code1="CSE211";
$sub_code2="CSE212";
$sub_code3="CSE213";
$sub_code4="CSE214";
$sub_code5="CSE215";
$sub_code6="CSE216";
$sub_code7="CSE217";
$sub_code8="CSE218";

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where DETAINED='$d1' AND SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' ");
$data=mysql_fetch_assoc($result);
$te1=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT DATA_STRUCTURES_ALGORITHM='$me2'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND DATA_STRUCTURES_ALGORITHM='$me2' ");
$data=mysql_fetch_assoc($result);
$b1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT DIGITAL_LOGICAL_DESIGN='$me2'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND DIGITAL_LOGICAL_DESIGN='$me2' ");
$data=mysql_fetch_assoc($result);
$b2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT DMS='$me2'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND DMS='$me2' ");
$data=mysql_fetch_assoc($result);
$b3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT OOPS_WITH_JAVA='$me2'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND OOPS_WITH_JAVA='$me2' ");
$data=mysql_fetch_assoc($result);
$b4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT P_S_Q_T='$me2'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND P_S_Q_T='$me2' ");
$data=mysql_fetch_assoc($result);
$b5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT DATA_STRUCTURES_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND DATA_STRUCTURES_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT DIGITAL_ELECTRONICS_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND DIGITAL_ELECTRONICS_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT JAVA_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND JAVA_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b8=$data['total'];


}
}
else if($year=="2" && $sem=="2")
{

if($dbuid2!=1)
{
?>
		<script>
		alert("ACADEMIC YEAR DETAILS NOT AVAILABLE");
		window.location.href="Student_data_to_check_accodomic.html";
		</script>
<?php


}
else
{

		$sub1="DATA_COMMUNICATION";
	$sub2="MICROPROCESSOR_INTERFACING";
	$sub3="OPERATING_SYSTEMS";
	$sub4="COMPUTER_ORGANIZATION";
	$sub5="FLAT";
	$sub6="MP_LAB";
	$sub7="OPERATING_SYSTEM_LAB";	
	$sub8="HARDWARE_LAB";

$sub_code1="CSE221";
$sub_code2="CSE222";
$sub_code3="CSE223";
$sub_code4="CSE224";
$sub_code5="CSE225";
$sub_code6="CSE226";
$sub_code7="CSE227";
$sub_code8="CSE228";

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where DETAINED='$d1'  AND SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' ");
$data=mysql_fetch_assoc($result);
$te1=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT DATA_COMMUNICATION='$me2'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND DATA_COMMUNICATION='$me2' ");
$data=mysql_fetch_assoc($result);
$b1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT MICROPROCESSOR_INTERFACING='$me2'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND MICROPROCESSOR_INTERFACING='$me2' ");
$data=mysql_fetch_assoc($result);
$b2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT OPERATING_SYSTEMS='$me2'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND OPERATING_SYSTEMS='$me2' ");
$data=mysql_fetch_assoc($result);
$b3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT COMPUTER_ORGANIZATION='$me2'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND COMPUTER_ORGANIZATION='$me2' ");
$data=mysql_fetch_assoc($result);
$b4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT FLAT='$me2'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND FLAT='$me2' ");
$data=mysql_fetch_assoc($result);
$b5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT MP_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND MP_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT OPERATING_SYSTEM_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND OPERATING_SYSTEM_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT HARDWARE_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND HARDWARE_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b8=$data['total'];




}
}
else if($year=="1" && $sem=="1")
{

if($dbuid3!=1)
{
?>
		<script>
		alert("ACADEMIC YEAR DETAILS NOT AVAILABLE");
		window.location.href="Student_data_to_check_accodomic.html";
		</script>
<?php


}
else {
$sub1="ENGLISH";
$sub2="ENGI_MATHEMATICS_1";
$sub3="ENGI_CHEMISTRY";
$sub4="PROFESSIONAL_E_H_V";
$sub5="BASIC_ELECTRONICS_ENGI";
$sub6="ENGI_CHEMISTRY_LAB";
$sub7="PROGRAMMING_WITH_C_LAB";
$sub8="NCC_NSS_SPORTS";

$sub_code1="CSE111";
$sub_code2="CSE112";
$sub_code3="CSE113";
$sub_code4="CSE114";
$sub_code5="CSE115";
$sub_code6="CSE116";
$sub_code7="CSE117";
$sub_code8="CSEAC1";

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where DETAINED='$d1' AND SECTION='$section' AND ACCODOMIC_YEAR='$acc_year'  AND SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' ");
$data=mysql_fetch_assoc($result);
$te1=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ENGLISH='$me2'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ENGLISH='$me2' ");
$data=mysql_fetch_assoc($result);
$b1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ENGI_MATHEMATICS_1='$me2'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ENGI_MATHEMATICS_1='$me2' ");
$data=mysql_fetch_assoc($result);
$b2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ENGI_CHEMISTRY='$me2'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ENGI_CHEMISTRY='$me2' ");
$data=mysql_fetch_assoc($result);
$b3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT PROFESSIONAL_E_H_V='$me2'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND PROFESSIONAL_E_H_V='$me2' ");
$data=mysql_fetch_assoc($result);
$b4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT BASIC_ELECTRONICS_ENGI='$me2'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND BASIC_ELECTRONICS_ENGI='$me2' ");
$data=mysql_fetch_assoc($result);
$b5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ENGI_CHEMISTRY_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ENGI_CHEMISTRY_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT PROGRAMMING_WITH_C_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND PROGRAMMING_WITH_C_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT NCC_NSS_SPORTS='$me2'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NCC_NSS_SPORTS='$me2' ");
$data=mysql_fetch_assoc($result);
$b8=$data['total'];
}
}
else if($year=="1" && $sem=="2")
{

if($dbuid4!=1)
{
?>
		<script>
		alert("ACADEMIC YEAR DETAILS NOT AVAILABLE");
		window.location.href="Student_data_to_check_accodomic.html";
		</script>
<?php


}
else {
$sub1="ENGI_MATHEMATICS_2";
$sub2="ENGI_PHYSICS";
$sub3="ENVIRONMENTAL_SCIENCES";
$sub4="ENGI_DRAWING";
$sub5="ELEMENTS_OF_ELECTRICAL_ENGI";
$sub6="ENGI_PHYSICS_LAB";
$sub7="LANGUAGE_LAB";
$sub8="OOP_WITH_CPP_LAB";

$sub_code1="CSE121";
$sub_code2="CSE122";
$sub_code3="CSE123";
$sub_code4="CSE124";
$sub_code5="CSE125";
$sub_code6="CSE126";
$sub_code7="CSE127";
$sub_code8="CSE128";

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where DETAINED='$d1'  AND SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' ");
$data=mysql_fetch_assoc($result);
$te1=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ENGI_MATHEMATICS_2='$me2'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ENGI_MATHEMATICS_2='$me2' ");
$data=mysql_fetch_assoc($result);
$b1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ENGI_PHYSICS='$me2'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ENGI_PHYSICS='$me2' ");
$data=mysql_fetch_assoc($result);
$b2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ENVIRONMENTAL_SCIENCES='$me2'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ENVIRONMENTAL_SCIENCES='$me2' ");
$data=mysql_fetch_assoc($result);
$b3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ENGI_DRAWING='$me2'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ENGI_DRAWING='$me2' ");
$data=mysql_fetch_assoc($result);
$b4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ELEMENTS_OF_ELECTRICAL_ENGI='$me2' ");
$data=mysql_fetch_assoc($result);
$b5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT ENGI_PHYSICS_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND ENGI_PHYSICS_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT LANGUAGE_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND LANGUAGE_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT OOP_WITH_CPP_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND OOP_WITH_CPP_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b8=$data['total'];
}
}
else if($year=="3" && $sem=="2")
{
if($dbuid6!=1)
{
?>
		<script>
		alert("ACADEMIC YEAR DETAILS NOT AVAILABLE");
		window.location.href="Student_data_to_check_accodomic.html";
		</script>
<?php


}
else {

$sub1="COMPILER_DESIGN";
$sub2="SOFTWARE_ENGI";
$sub3="WEB_TECHNOLOGIES";
$sub4="COMPUTER_ARCHITECTURE";
$sub5="PROFESSIONAL_ELECTIVE_1";
$sub6="OPEN_SOURCE_T_LAB";
$sub7="SE_LAB_MINI_LAB";
$sub8="QUANTATIVE_VERBAL_APTITUDE_2";
$sub_code1="CSE321";
$sub_code2="CSE322";
$sub_code3="CSE323";
$sub_code4="CSE324";
$sub_code5="CSE325";
$sub_code6="CSE326";
$sub_code7="CSE327";
$sub_code8="CSE328";



$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where DETAINED='$d1' AND SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' ");
$data=mysql_fetch_assoc($result);
$te1=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT COMILER_DESIGN='$me2'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND COMILER_DESIGN='$me2' ");
$data=mysql_fetch_assoc($result);
$b1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT SOFTWARE_ENGI='$me2'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND SOFTWARE_ENGI='$me2' ");
$data=mysql_fetch_assoc($result);
$b2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT WEB_TECHNOLOGIES='$me2'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND WEB_TECHNOLOGIES='$me2' ");
$data=mysql_fetch_assoc($result);
$b3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT COMPUTER_ARCHITECTURE='$me2'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND COMPUTER_ARCHITECTURE='$me2' ");
$data=mysql_fetch_assoc($result);
$b4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT PROFESSIONAL_ELECTIVE_1='$me2'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND PROFESSIONAL_ELECTIVE_1='$me2' ");
$data=mysql_fetch_assoc($result);
$b5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT OPEN_SOURCE_T_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND OPEN_SOURCE_T_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT SE_LAB_MINI_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND SE_LAB_MINI_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND QUANTATIVE_VERBAL_APTITUDE_2='$me2' ");
$data=mysql_fetch_assoc($result);
$b8=$data['total'];
}
}
else if($year=="4" && $sem=="1")
{
if($dbuid7!=1)
{
?>
		<script>
		alert("ACADEMIC YEAR DETAILS NOT AVAILABLE");
		window.location.href="Student_data_to_check_accodomic.html";
		</script>
<?php


}
else {

$sub1="OPEN_ELECTIVE_2";
$sub2="CRYPTOGRAPHY_AND_N_S";
$sub3="OOA_DESIGN";
$sub4="PROFEESIONAL_ELECTIVE_2";
$sub5="PROFESSIONAL_ELECTIVE_3";
$sub6="C_N_S_LAB";
$sub7="INDUSTRAIL_TRAINING_SEMINAR";
$sub8="PROJECT_1";

$sub_code1="CSE411";
$sub_code2="CSE412";
$sub_code3="CSE413";
$sub_code4="CSE414";
$sub_code5="CSE415";
$sub_code6="CSE416";
$sub_code7="CSE417";
$sub_code8="CSE418";

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where DETAINED='$d1'  AND SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' ");
$data=mysql_fetch_assoc($result);
$te1=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT OPEN_ELECTIVE_2='$me2'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND OPEN_ELECTIVE_2='$me2' ");
$data=mysql_fetch_assoc($result);
$b1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT CRYPTOGRAPHY_AND_N_S='$me2'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND CRYPTOGRAPHY_AND_N_S='$me2' ");
$data=mysql_fetch_assoc($result);
$b2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT OOA_DESIGN='$me2'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND OOA_DESIGN='$me2' ");
$data=mysql_fetch_assoc($result);
$b3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT PROFEESIONAL_ELECTIVE_2='$me2'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND PROFEESIONAL_ELECTIVE_2='$me2' ");
$data=mysql_fetch_assoc($result);
$b4=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT PROFESSIONAL_ELECTIVE_3='$me2'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND PROFESSIONAL_ELECTIVE_3='$me2' ");
$data=mysql_fetch_assoc($result);
$b5=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT C_N_S_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND C_N_S_LAB='$me2' ");
$data=mysql_fetch_assoc($result);
$b6=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND INDUSTRAIL_TRAINING_SEMINAR='$me2' ");
$data=mysql_fetch_assoc($result);
$b7=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT PROJECT_1='$me2'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND PROJECT_1='$me2' ");
$data=mysql_fetch_assoc($result);
$b8=$data['total'];




}
}








$dataPoints1 = array(
	array("label"=> $sub_code1, "y"=>$a1),
	array("label"=> $sub_code2, "y"=>$a2),
	array("label"=> $sub_code3, "y"=>$a3),
	array("label"=> $sub_code4, "y"=>$a4),
	array("label"=> $sub_code5, "y"=>$a5),
	array("label"=> $sub_code6, "y"=>$a6),
	array("label"=> $sub_code7, "y"=>$a7),
	array("label"=> $sub_code8, "y"=>$a8),
				
);
$dataPoints2 = array(
array("label"=> $sub_code1, "y"=>$b1),
	array("label"=> $sub_code2, "y"=>$b2),
	array("label"=> $sub_code3, "y"=>$b3),
	array("label"=> $sub_code4, "y"=>$b4),
	array("label"=> $sub_code5, "y"=>$b5),
	array("label"=> $sub_code6, "y"=>$b6),
	array("label"=> $sub_code7, "y"=>$b7),
	array("label"=> $sub_code8, "y"=>$b8),
				
);
?>
<body>
<center>
<div id="chartContainer" style="height: 300px; width: 850px;"></div>
	<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "<?php echo $acc_year; ?>  <?php echo $year; ?>- YEAR  <?php echo $sem; ?>- SEM    <?php echo $section; ?> -SECTION DETAILS"
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "PASS",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "FAIL",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}

function myFunction()
{
	window.print();
}

</script>
<center><br><br><table border="1" style="height:40;width:60;">
<tr>
	<th>SUB_CODE</th>
	<th>SUB_NAME</th>
	<th>ACADEMIC_YEAR</th>
	<th>YEAR</th>
<th>SEMESTER</th>
<th>TOTAL_STUDENTS</th>
<th>PASS</th>
<th>FAIL</th>
</tr>
<tr>
	<td><?php echo $sub_code1;?></td>
	<td><?php echo $sub1;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a1;?></td>
	<td><?php echo $b1;?></td>
	
	
</tr>
<tr>
	<td><?php echo $sub_code2;?></td>
	<td><?php echo $sub2;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a2;?></td>
	<td><?php echo $b2;?></td>
	
	
</tr>
<tr>
	<td><?php echo $sub_code3;?></td>
	<td><?php echo $sub3;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a3;?></td>
	<td><?php echo $b3;?></td>
	
	
</tr>
<tr>
	<td><?php echo $sub_code4;?></td>
	<td><?php echo $sub4;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a4;?></td>
	<td><?php echo $b4;?></td>
	
	
</tr>
<tr>
	<td><?php echo $sub_code5;?></td>
	<td><?php echo $sub5;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a5;?></td>
	<td><?php echo $b5;?></td>
	
	
</tr>
<tr>
	<td><?php echo $sub_code6;?></td>
	<td><?php echo $sub6;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a6;?></td>
	<td><?php echo $b6;?></td>
	
	
</tr>
<tr>
	<td><?php echo $sub_code7;?></td>
	<td><?php echo $sub7;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a7;?></td>
	<td><?php echo $b7;?></td>
	
	
</tr>
<tr>
	<td><?php echo $sub_code8;?></td>
	<td><?php echo $sub8;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a8;?></td>
	<td><?php echo $b8;?></td>
	
	
</tr>

</table>

<!--DETAINED :<?php echo $te1;?>-->
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