<html>
	<head>
		<title>SINGLE STUDENT DATA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" type="image/jpg" href="images/res.jpg" />
	<style>
table, th, td 
{
  border: 1px solid black;
  border-collapse: collapse;
  padding:1 px;
  font-style: times;
 font-size: 15px;
  text-align: center;
}
</style>

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
				<li><a href="Student_Home.html">Home</a></li>
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
							<CENTER><font face="Baskerville Old Face" size="+3"> SINGLE STUDENT DATA</font>
						</header><br>


<a onclick="window.print()"><img src="images/print.jpg" style="width: 15%;cursor: pointer;"></a>
<script src="graph_2_field_file.js"></script>

<?php
session_start();
mysql_connect('localhost','root','');   			//make a connection
mysql_select_db('sem_project') or die("database not connected");	//select db
$rn=$_SESSION['user'];
$fail="F";
$yes="Y";
$yes1="ES";
$no="O";
$dbuid=0;$dbuid1=0;$dbuid2=0;$dbuid3=0;$dbuid4=0;$dbuid5=0;$dbuid6=0;$dbuid7=0;$dbuid8=0;
$query= mysql_query("SELECT ROLL_NUMBER FROM 2_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ROLL_NUMBER'];
			
			if($dbuid==$rn)
			{
				$dbuid1=1;
			}
		}

	}
$query= mysql_query("SELECT ROLL_NUMBER FROM 2_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ROLL_NUMBER'];
			
			if($dbuid==$rn)
			{
				$dbuid2=1;
			}
		}

	}
$query= mysql_query("SELECT ROLL_NUMBER FROM 1_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rn)
				{
				$dbuid3=1;
			}
		}

	}
$query= mysql_query("SELECT ROLL_NUMBER FROM 1_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rn)
						{
				$dbuid4=1;
			}
		}

	}
$query= mysql_query("SELECT ROLL_NUMBER FROM 3_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rn)
						{
				$dbuid5=1;
			}
		}

	}
$query= mysql_query("SELECT ROLL_NUMBER FROM 3_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rn)
						{
				$dbuid6=1;
			}
		}

	}
$query= mysql_query("SELECT ROLL_NUMBER FROM 4_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rn)
						{
				$dbuid7=1;
			}
		}

	}
$query= mysql_query("SELECT ROLL_NUMBER FROM 4_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$rn)
						{
				$dbuid8=1;
			}
		}

	}






if($dbuid1!=1 &&  $dbuid2!=1 && $dbuid3!=1 && $dbuid4!=1 && $dbuid5!=1 && $dbuid6!=1 && $dbuid7!=1 && $dbuid8!=1)
{
?>
		<script>
		alert("PERSON DETAILS NOT AVILABLE");
		window.location.href="Student_Home.html";
		</script>
<?php


}









$sql="SELECT * FROM 1_1_table where ROLL_NUMBER='$rn' ";
$records=mysql_query($sql) or die("table not selected");
$count=mysql_num_rows($records);
?>
<table width="50%" border="1" cellpadding="1" cellspacing="1">
<center>
<font face="Baskerville Old Face" size="+2">1st Year Sem:1</font>
<tr>

<th>ROLL NUMBER</th>
<th>SECTION</th>
<th>BATCH</th>
<th>ACADEMIC YEAR</th>
<th>ENG</th>
<th>MATHS</th>
<th>CHEM</th>
<th>PEHV</th>
<th>BEE</th>
<th>CH LA</th>
<th>CP LA</th>
<!--<th>NCC_NSS</th>-->
<th>SGPA</th>
<th>CGPA</th>
<th>PASS DATA</th>
<th>ATD</th>
<th>N.O.A.</th>
<th>DT</th>
</tr>

<?php
  if($count==0){
      echo '<tr><td colspan="17">No data to display</td></tr>';
   }
  else{
 while($row=mysql_fetch_row($records)){
    echo "<tr>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";

if($row[4]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[4].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[4].'</font></td>';
}

if($row[5]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[5].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[5].'</font></td>';
}

if($row[6]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[6].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[6].'</font></td>';
}

if($row[7]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[7].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[7].'</font></td>';
}

if($row[8]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[8].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[8].'</font></td>';
}

if($row[9]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[9].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[9].'</font></td>';
}

if($row[10]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[10].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[10].'</font></td>';
}


echo "<!--<td>".$row[11]."</td>-->";
echo "<td>".$row[12]."</td>";
echo "<td>".$row[13]."</td>";
echo "<td>".$row[14]."</td>";
echo "<td>".$row[15]."</td>";
echo "<td>".$row[16]."</td>";
if($row[17]==$yes)
{
echo '<td><font style="color:red;font-size:30;">'.$row[17].''.$yes1.'</font></td>';
}
else{
echo '<td><font style="color:green;font-size:30;">'.$row[17].''.$no.'</font></td>';
}
    
echo "</tr>";
 }
}
?>
</table>
<font size="10">
<pre>
ENG   - English				PEHV - Professional Ethics & Human Values
MATHS - Engineering Mathematics-1	BEE - Basic Electronics Engineering
CHEM  - Engineering Chemistry		CH LA - Engineering Chemistry Lab
CP LA - Programming With C Lab		N.O.A	- Number of Attempts
ATD	- Attendence			DT-DETAINED
</pre>
</font>

<?php
mysql_connect('localhost','root','');   			//make a connection
mysql_select_db('sem_project') or die("database not connected");	//select db
$rn=$_SESSION['user'];
$sql="SELECT * FROM 1_2_table where ROLL_NUMBER='$rn' ";
$records=mysql_query($sql) or die("table not selected");
$count=mysql_num_rows($records);
?>

<table width="50%" border="1" cellpadding="1" cellspacing="1">
<center>
<font face="Baskerville Old Face" size="+2">1st Year Sem:2</font>
<tr>
<th>ROLL NUMBER</th>
<th>SECTION</th>
<th>BATCH</th>
<th>ACADEMIC YEAR</th>
<th>MATHS-2</th>
<th>PHY</th>
<th>EN SC</th>
<th>EN DR</th>
<th>EEE</th>
<th>PH LA</th>
<th>LAN LA</th>
<th>C++ LA</th>
<th>SGPA</th>
<th>CGPA</th>
<th>PASS DATA</th>
<th>ATTENDENCE</th>
<th>N.O.A.</th>
<th>DT</th>
</tr>

<?php
  if($count==0){
      echo '<tr><td colspan="18">No data to display</td></tr>';
   }
  else{
 while($row=mysql_fetch_row($records)){
    echo "<tr>";
echo "<td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[0]."</td><td>".$row[1]."</td>";
if($row[4]==$fail)
{
echo '<td><font style="color:red;font-size:20;">'.$row[4].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:20;">'.$row[4].'</font></td>';
}

if($row[5]==$fail)
{
echo '<td><font style="color:red;font-size:20;">'.$row[5].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:20;">'.$row[5].'</font></td>';
}

if($row[6]==$fail)
{
echo '<td><font style="color:red;font-size:20;">'.$row[6].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:20;">'.$row[6].'</font></td>';
}

if($row[7]==$fail)
{
echo '<td><font style="color:red;font-size:20;">'.$row[7].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:20;">'.$row[7].'</font></td>';
}

if($row[8]==$fail)
{
echo '<td><font style="color:red;font-size:20;">'.$row[8].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:20;">'.$row[8].'</font></td>';
}

if($row[9]==$fail)
{
echo '<td><font style="color:red;font-size:20;">'.$row[9].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:20;">'.$row[9].'</font></td>';
}

if($row[10]==$fail)
{
echo '<td><font style="color:red;font-size:20;">'.$row[10].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:20;">'.$row[10].'</font></td>';
}

if($row[11]==$fail)
{
echo '<td><font style="color:red;font-size:20;">'.$row[11].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:20;">'.$row[11].'</font></td>';
}

echo "<td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td>";
if($row[17]==$yes)
{
echo '<td><font style="color:red;font-size:20;">'.$row[17].''.$yes1.'</font></td>';
}
else{
echo '<td><font style="color:green;font-size:20;">'.$row[17].''.$no.'</font></td>';
}
    echo "</tr>";
 }
}
?>
</table>
<font size="10">
<pre>
MATHS-2 - Engineering Mathematics-2		EEE	- Elements of Electrical Engineering
PHY	- Engineering Physics 			PH LA	- Engineering Physics Lab
EN SC	- Ennvironmental Sciences		LAN LA	- Language Lab
EN DR	- Engineering Drawing			C++ LA	- Object Oriented Programming with C++ Lab
N.O.A	- Number of Attempts			DT	- DETAINED 	
</pre>
</font>

<?php
mysql_connect('localhost','root','');   			//make a connection
mysql_select_db('sem_project') or die("database not connected");	//select db
$rn=$_SESSION['user'];
$sql="SELECT * FROM 2_1_table where ROLL_NUMBER='$rn' ";
$records=mysql_query($sql) or die("table not selected");
$count=mysql_num_rows($records);
?>

<table width="50%" border="1" cellpadding="1" cellspacing="1">
<center>
<font face="Baskerville Old Face" size="+2">2nd Year Sem:1</font>
</center>
<tr>
<th>ROLL NUMBER</th>
<th>SECTION</th>
<th>BATCH</th>
<th>ACADEMIC YEAR</th>
<th>DS</th>
<th>DLD</th>
<th>DMS</th>
<th>JAVA</th>
<th>PSQT</th>
<th>DS LAB</th>
<th>DE LAB</th>
<th>JAVA LAB</th>
<th>SGPA</th>
<th>CGPA</th>
<th>PASS DATE</th>
<th>ATD</th>
<th>N.O.A.</th>
<th>DT</th>
</tr>

<?php
  if($count==0){
      echo '<tr><td colspan="18">No data to display</td></tr>';
   }
  else{
 while($row=mysql_fetch_row($records)){
    echo "<tr>";
echo "<td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[0]."</td><td>".$row[1]."</td>";
if($row[4]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[4].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[4].'</font></td>';
}

if($row[5]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[5].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[5].'</font></td>';
}

if($row[6]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[6].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[6].'</font></td>';
}

if($row[7]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[7].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[7].'</font></td>';
}

if($row[8]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[8].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[8].'</font></td>';
}

if($row[9]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[9].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[9].'</font></td>';
}

if($row[10]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[10].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[10].'</font></td>';
}

if($row[11]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[11].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[11].'</font></td>';
}

echo "<td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td>";
if($row[17]==$yes)
{
echo '<td><font style="color:red;font-size:30;">'.$row[17].''.$yes1.'</font></td>';
}
else{
echo '<td><font style="color:green;font-size:30;">'.$row[17].''.$no.'</font></td>';
}
    echo "</tr>";
 }
}
?>
</table>
<pre>
DS	- Data Structures				PSQT	- Probability, Statistics & Queuing Theory
DLD	- Digital Logic Design				DS LAB	- Data Structures Lab
DMS	- Discrete Mathematical Structures		DE LAB	- Digital Electronics Lab
JAVA	- Object Oriented Programming with JAVA  	N.O.A	- Number of Attempts
ATD	- Attendance					DT	- DETAINED
</pre>

<?php
mysql_connect('localhost','root','');   			//make a connection
mysql_select_db('sem_project') or die("database not connected");	//select db
$rn=$_SESSION['user'];
$sql="SELECT * FROM 2_2_table where ROLL_NUMBER='$rn' ";
$records=mysql_query($sql) or die("table not selected");
$count=mysql_num_rows($records);
?>

<table width="50%" border="1" cellpadding="1" cellspacing="1">
<center>
<font face="Baskerville Old Face" size="+2">2nd Year Sem:2</font>
</center>
<tr>
<th>ROLL NUMBER</th>
<th>SECTION</th>
<th>BATCH</th>
<th>ACADEMIC YEAR</th>
<th>DC</th>
<th>MP</th>
<th>OS</th>
<th>CO</th>
<th>FLAT</th>
<th>MP LAB</th>
<th>OS LAB</th>
<th>HW LAB</th>
<th>SGPA</th>
<th>CGPA</th>
<th>PASS DATE</th>
<th>ATTENDACE</th>
<th>N.O.A.</th>
<th>DT</th>
</tr>

<?php
  if($count==0){
      echo '<tr><td colspan="18">No data to display</td></tr>';
   }
  else{
 while($row=mysql_fetch_row($records)){
    echo "<tr>";
echo "<td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[0]."</td><td>".$row[1]."</td>";
if($row[4]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[4].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[4].'</font></td>';
}

if($row[5]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[5].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[5].'</font></td>';
}

if($row[6]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[6].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[6].'</font></td>';
}

if($row[7]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[7].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[7].'</font></td>';
}

if($row[8]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[8].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[8].'</font></td>';
}

if($row[9]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[9].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[9].'</font></td>';
}

if($row[10]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[10].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[10].'</font></td>';
}

if($row[11]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[11].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[11].'</font></td>';
}

echo "<td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td>";
if($row[17]==$yes)
{
echo '<td><font style="color:red;font-size:30;">'.$row[17].''.$yes1.'</font></td>';
}
else{
echo '<td><font style="color:green;font-size:30;">'.$row[17].''.$no.'</font></td>';
}
    echo "</tr>";
 }
}
?>
</table>
<pre>
DC	- Data Communication		FLAT	- Formal Languages and Autometa Theory
MP	- Microprocessors		MP LAB	- Microprocessors Lab
OS	- Operating Systems		OS LAB	- Operating Systems Lab
CO	- Computer Organization		HW LAB	- Hardware Lab
N.O.A	- Number of Attempts		DT	- DETAINED
</pre>

<?php
mysql_connect('localhost','root','');   			//make a connection
mysql_select_db('sem_project') or die("database not connected");	//select db
$rn=$_SESSION['user'];
$sql="SELECT * FROM 3_1_table where ROLL_NUMBER='$rn' ";
$records=mysql_query($sql) or die("table not selected");
$count=mysql_num_rows($records);
?>

<table width="50%" border="1" cellpadding="1" cellspacing="1">
<center>
<font face="Baskerville Old Face" size="+2">3rd Year Sem:1</font>
</center>
<tr>
<th>ROLL NUMBER</th>
<th>SECTION</th>
<th>BATCH</th>
<th>ACADEMIC YEAR</th>
<th>OE-1</th>
<th>DBMS</th>
<th>CG</th>
<th>CN</th>
<th>DAA</th>
<th>DBMS LAB</th>
<th>CN LAB</th>
<th>SS LAB</th>
<th>Q&VA-1</th>
<th>SGPA</th>
<th>CGPA</th>
<th>PASS DATE</th>
<th>ATD</th>
<th>N.O.A.</th>
<td><b>DT</b></td>
</tr>

<?php
  if($count==0){
      echo '<tr><td colspan="19">No data to display</td></tr>';
   }
  else{
 while($row=mysql_fetch_row($records)){
    echo "<tr>";
echo "<td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[0]."</td><td>".$row[1]."</td>";
if($row[4]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[4].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[4].'</font></td>';
}

if($row[5]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[5].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[5].'</font></td>';
}

if($row[6]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[6].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[6].'</font></td>';
}

if($row[7]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[7].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[7].'</font></td>';
}

if($row[8]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[8].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[8].'</font></td>';
}

if($row[9]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[9].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[9].'</font></td>';
}

if($row[10]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[10].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[10].'</font></td>';
}

if($row[11]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[11].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[11].'</font></td>';
}
if($row[12]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[12].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[12].'</font></td>';
}


echo "<td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[17]."</td>";
if($row[18]==$yes)
{
echo '<td><font style="color:red;font-size:20;">'.$row[18].''.$yes1.'</font></td>';
}
else{
echo '<td><font style="color:green;font-size:20;">'.$row[18].''.$no.'</font></td>';
}
    echo "</tr>";
 }
}
?>
</table>
<pre>
OE-1	- Open Elective - 1			DAA	-	Design and Analysis of Algorithms
DBMS	- DataBase Management Systems		DBMS LAB	- DataBase Management Systems Lab
CG	- Computer Graphics			CN LAB	- Computer Networks Lab
CN	- Computer Networks			SS LAB - Soft Skills Lab
Q&VA-1	- Quantatitive & Verbal Aptitude - 1	N.O.A	- Number of Attempts
DT	- Detained				ATD	- Attendence
</pre>
</font>

<?php
mysql_connect('localhost','root','');   			//make a connection
mysql_select_db('sem_project') or die("database not connected");	//select db
$rn=$_SESSION['user'];
$sql="SELECT * FROM 3_2_table where ROLL_NUMBER='$rn' ";
$records=mysql_query($sql) or die("table not selected");
$count=mysql_num_rows($records);
?>

<table width="50%" border="1" cellpadding="1" cellspacing="1">
<center>
<font face="Baskerville Old Face" size="+2">3rd Year Sem:2
<tr>
<th>ROLL NUMBER</th>
<th>SECTION</th>
<th>BATCH</th>
<th>ACADEMIC YEAR</th>
<th>CD</th>
<th>SE</th>
<th>WT</th>
<th>CA</th>
<th>PE-1</th>
<th>OST LAB</th>
<th>SE LAB</th>
<th>Q&VA-2</th>
<th>SGPA</th>
<th>CGPA</th>
<th>PASS DATE</th>
<th>ATTENDANCE</th>
<th>N.O.A.</th>
<th>DT</th>
</tr>

<?php
  if($count==0){
      echo '<tr><td colspan="18">No data to display</td></tr>';
   }
  else{
 while($row=mysql_fetch_row($records)){
    echo "<tr>";
echo "<td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[0]."</td><td>".$row[1]."</td>";
if($row[4]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[4].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[4].'</font></td>';
}

if($row[5]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[5].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[5].'</font></td>';
}

if($row[6]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[6].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[6].'</font></td>';
}

if($row[7]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[7].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[7].'</font></td>';
}

if($row[8]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[8].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[8].'</font></td>';
}

if($row[9]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[9].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[9].'</font></td>';
}

if($row[10]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[10].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[10].'</font></td>';
}

if($row[11]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[11].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[11].'</font></td>';
}

echo "<td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td>";
if($row[17]==$yes)
{
echo '<td><font style="color:red;font-size:30;">'.$row[17].''.$yes1.'</font></td>';
}
else{
echo '<td><font style="color:green;font-size:30;">'.$row[17].''.$no.'</font></td>';
}
    echo "</tr>";
 }
}
?>
</table>
<pre>
CD	- Compiler Design		PE-1	- Professional Elective-1
SE	- Software Engineering		OST LAB	- Open Source Technologies Lab
WT	- Web Technlogies		SE LAB	- Software Engineering Lab
CA	- Computer Architecture		Q&VA-2	- Quantative & Aptitiude - 2
N.O.A	- Number of Attempts		DT	- DETAINED
</pre>
</font>

<?php
mysql_connect('localhost','root','');   			//make a connection
mysql_select_db('sem_project') or die("database not connected");	//select db
$rn=$_SESSION['user'];
$sql="SELECT * FROM 4_1_table where ROLL_NUMBER='$rn' ";
$records=mysql_query($sql) or die("table not selected");
$count=mysql_num_rows($records);
?>

<table width="50%" border="1" cellpadding="1" cellspacing="1">
<center>
<font face="Baskerville Old Face" size="+2">4th Year Sem:1
<tr>
<th>ROLL NUMBER</th>
<th>SECTION</th>
<th>BATCH</th>
<th>ACADEMIC YEAR</th>
<th>OE-2</th>
<th>CNS</th>
<th>OOA</th>
<th>PE-2</th>
<th>PE-3</th>
<th>CNS LAB</th>
<th>ITS</th>
<th>P-1</th>
<th>SGPA</th>
<th>CGPA</th>
<th>PASS DATE</th>
<th>ATD</th>
<th>N.O.A.</th>
<th>DT</th>
</tr>

<?php
  if($count==0){
      echo '<tr><td colspan="18">No data to display</td></tr>';
   }
  else{
 while($row=mysql_fetch_row($records)){
    echo "<tr>";
echo "<td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[0]."</td><td>".$row[1]."</td>";
if($row[4]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[4].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[4].'</font></td>';
}

if($row[5]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[5].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[5].'</font></td>';
}

if($row[6]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[6].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[6].'</font></td>';
}

if($row[7]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[7].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[7].'</font></td>';
}

if($row[8]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[8].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[8].'</font></td>';
}

if($row[9]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[9].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[9].'</font></td>';
}

if($row[10]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[10].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[10].'</font></td>';
}

if($row[11]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[11].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[11].'</font></td>';
}

echo "<td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td>";
if($row[17]==$yes)
{
echo '<td><font style="color:red;font-size:30;">'.$row[17].''.$yes1.'</font></td>';
}
else{
echo '<td><font style="color:green;font-size:30;">'.$row[17].''.$no.'</font></td>';
}
    echo "</tr>";
 }
}
?>
</table>
<pre>
OE-2	- Open Elective-2			PE-3	- Professional Elective-3
CNS	- Crptography and Network Security	CNS LAB	- Cryptography & Network Security Lab
OOA	- Object Oriented Analysis & Design	ITS	- Industrial Training & Seminar
PE-2	- Professional Elective-2		P-1	- Project-1
N.O.A	- Number of Attempts			DT	- Detained
ATD	- Attendence
</pre>
</font>

<?php
mysql_connect('localhost','root','');   			//make a connection
mysql_select_db('sem_project') or die("database not connected");	//select db
$rn=$_SESSION['user'];
$sql="SELECT * FROM 4_2_table where ROLL_NUMBER='$rn' ";
$records=mysql_query($sql) or die("table not selected");
$count=mysql_num_rows($records);
?>

<table width="50%" border="1" cellpadding="1" cellspacing="1">
<center>
<font face="Baskerville Old Face" size="+2">4rd Year Sem:2
<tr>
<th>ROLL NUMBER</th>
<th>SECTION</th>
<th>BATCH</th>
<th>ACADEMIC YEAR</th>
<th>PE-4</th>
<th>PE-5</th>
<th>P-2</th>
<th>SGPA</th>
<th>CGPA</th>
<th>PASS DATE</th>
<th>ATTENDANCE</th>
<th>N.O.A</th>
<th>DT</th>
</tr>

<?php
  if($count==0){
      echo '<tr><td colspan="13">No data to display</td></tr>';
   }
  else{
 while($row=mysql_fetch_row($records)){
    echo "<tr>";
echo "<td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[0]."</td><td>".$row[1]."</td>";
if($row[4]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[4].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[4].'</font></td>';
}

if($row[5]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[5].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[5].'</font></td>';
}

if($row[6]==$fail)
{
echo '<td><font style="color:red;font-size:30;">'.$row[6].'</font></td>';
}
else
{
echo '<td><font style="color:green;font-size:30;">'.$row[6].'</font></td>';
}


echo "<td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td>";
if($row[12]==$yes)
{
echo '<td><font style="color:red;font-size:30;">'.$row[12].''.$yes1.'</font></td>';
}
else{
echo '<td><font style="color:green;font-size:30;">'.$row[12].''.$no.'</font></td>';
}
    echo "</tr>";
 }
}
?>
</table>
<pre>
PE-4	- Professional Elective-4	N.O.A	- Number of Attempts
PE-5	- Professional Elective-5
P-2	- Project-2			DT	- DETAINED	
</pre>
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