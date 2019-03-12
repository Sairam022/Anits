<html>
	<head>
		<title>BATCH DATA</title>
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
							<CENTER><font face="Baskerville Old Face" size="+3">STUDENT DATA BATCH WISE</font>
						</header><br>
<a onclick="window.print()"><img src="images/print.jpg" style="width:15%;cursor:pointer;"></a>
<br>



<?php
 session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//echo "connected";
$me2="F";
mysql_select_db("sem_project") or die("not selected");
$batch=$_POST['batch'];
$year=$_POST['year'];
$sem=$_POST['sem'];
$total1=0;
$tot_student="";
$tot_student1="";
$tot_student2="";
$tot_section="";
$tot_section1="";
$tot_section2="";
$tot_section_per="";
$tot_section_per1="";
$tot_section_per2="";


$tot_student_a="";
$tot_student_b="";
$tot_student_c="";
$tot_section_a="";
$tot_section_b="";
$tot_section_c="";
$tot_section_per_a="";
$tot_section_per_b="";
$tot_section_per_c="";
$accodomic_year="";

$d1="Y";
$te1=0;
$sub1="";
$sub2="";
$sub3="";
$sub4="";
$sub5="";
$sub6="";
$sub7="";
$sub8="";
$sub9="";
$total="";$total2="";$total1="";
$total1="";$total2="";$total3="";$total4="";$total5="";$total6="";$total7="";$total8="";
$a1="";$a2="";$a3="";$a4="";$a5="";$a6="";$a7="";$a8="";$a9="";
$p1="";$p2="";$p3="";$p4="";$p5="";$p6="";$p7="";$p8="";
$p9="";
$a11="";$a12="";$a13="";$a14="";$a15="";$a16="";$a17="";$a18="";$a19="";
$p11="";$p12="";$p13="";$p14="";$p15="";$p16="";$p17="";$p18="";
$p19="";

$a21="";$a22="";$a23="";$a24="";$a25="";$a26="";$a27="";$a28="";$a29="";

$p21="";$p22="";$p23="";$p24="";$p25="";$p26="";$p27="";$p28="";$p29="";
$space="";
$dbsection="";$dbbatch="";
$dbyear=0;
$dbsem=0;
$faculty_name="";
$dbsubject="";
$s1_faculty_C="";$s2_faculty_C="";$s3_faculty_C="";$s4_faculty_C="";$s5_faculty_C="";$s6_faculty_C="";$s7_faculty_C="";$s8_faculty_C="";$s9_faculty_C="";
$s1_faculty_A="";$s2_faculty_A="";$s3_faculty_A="";$s4_faculty_A="";$s5_faculty_A="";$s6_faculty_A="";$s7_faculty_A="";$s8_faculty_A="";$s9_faculty_A="";
$s1_faculty_B="";$s2_faculty_B="";$s3_faculty_B="";$s4_faculty_B="";$s5_faculty_B="";$s6_faculty_B="";$s7_faculty_B="";$s8_faculty_B="";$s9_faculty_B="";

$sec_a="A";
$sec_b="B";
$sec_c="C";

$query= mysql_query("SELECT BATCH FROM 2_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid=$row['BATCH'];
			if($dbuid==$batch)
			{
				$dbuid1=1;
			}
		}

	}
$query= mysql_query("SELECT BATCH FROM 2_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid=$row['BATCH'];
			if($dbuid==$batch)
			{
				$dbuid2=1;
			}
		}

	}
$query= mysql_query("SELECT BATCH FROM 1_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid=$row['BATCH'];
			if($dbuid==$batch)
				{
				$dbuid3=1;
			}
		}

	}
$query= mysql_query("SELECT BATCH FROM 1_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid=$row['BATCH'];
			if($dbuid==$batch)
						{
				$dbuid4=1;
			}
		}

	}
$query= mysql_query("SELECT BATCH FROM 3_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid=$row['BATCH'];
			if($dbuid==$batch)
						{
				$dbuid5=1;
			}
		}

	}
$query= mysql_query("SELECT BATCH FROM 3_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid=$row['BATCH'];
			if($dbuid==$batch)
						{
				$dbuid6=1;
			}
		}

	}
$query= mysql_query("SELECT BATCH FROM 4_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid=$row['BATCH'];
			if($dbuid==$batch)
						{
				$dbuid7=1;
			}
		}

	}
$query= mysql_query("SELECT BATCH FROM 4_2_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid=$row['BATCH'];
			if($dbuid==$batch)
						{
				$dbuid8=1;
			}
		}

	}








if($dbuid1!=1 &&  $dbuid2!=1 && $dbuid3!=1 && $dbuid4!=1 && $dbuid5!=1 && $dbuid6!=1 && $dbuid7!=1 && $dbuid8!=1)
{
?>
		<script>
		alert("BATCH DETAILS NOT AVILABLE");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php


}
echo "";
if($year==3 && $sem==1)
{
	$sub1="OPEN_ELECTIVE_1";
$sub2="DBMS";
$sub3="COMPUTER_GRAPHICS";
$sub4="COMPUTER_NETWORKS";
$sub5="DAA";
$sub6="DBMS_LAB";
$sub7="COMPUTER_NETWORKS_LAB";
$sub8="SOFT_SKILLS_LAB";
$sub9="QANTATIVE_VERBAL_APPTITUDE_1";
//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];
//section-B
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 3_1_table where BATCH='$batch' AND SECTION='$sec_b'");
$data1=mysql_fetch_assoc($result1);
$total2=$data1['total1'];
//section-C
$result2=mysql_query("select count(ROLL_NUMBER) as total2 from 3_1_table where BATCH='$batch' AND SECTION='$sec_c'");
$data2=mysql_fetch_assoc($result2);
$total3=$data2['total2'];


//section-a
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT OPEN_ELECTIVE_1='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$p1=($a1 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT DBMS='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$p2=($a2 / $total1)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT COMPUTER_GRAPHICS='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$p3=($a3 / $total1)* 100;
echo "my".$p3.$total1;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT COMPUTER_NETWORKS='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$p4=($a4 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT DAA='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$p5=($a5 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT DBMS_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$p6=($a6 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT COMPUTER_NETWORKS_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];


$p7=($a7 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT SOFT_SKILLS_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$p8=($a8 / $total1)*100;


$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT QANTATIVE_VERBAL_APTITUDE_1='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a9=$data['total'];

$p9=($a9 / $total1)*100;

//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT OPEN_ELECTIVE_1='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a11=$data['total'];

$p11=($a11 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT DBMS='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a12=$data['total'];

$p12=($a12 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT COMPUTER_GRAPHICS='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a13=$data['total'];

$p13=($a13 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT COMPUTER_NETWORKS='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a14=$data['total'];

$p14=($a14 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT DAA='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a15=$data['total'];

$p15=($a15 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT DBMS_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a16=$data['total'];

$p16=($a16 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT COMPUTER_NETWORKS_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a17=$data['total'];


$p17=($a17 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT SOFT_SKILLS_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a18=$data['total'];

$p18=($a18 / $total2)*100;


$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT QANTATIVE_VERBAL_APTITUDE_1='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a19=$data['total'];

$p19=($a19 / $total2)*100;



//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT OPEN_ELECTIVE_1='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a21=$data['total'];

$p21=(($a21 / $total3) * 100);

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT DBMS='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a22=$data['total'];

$p22=($a22 / $total3)*100;

echo "ww".$a22;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT COMPUTER_GRAPHICS='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a23=$data['total'];

$p23=($a23 / $total3)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT COMPUTER_NETWORKS='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a24=$data['total'];

$p24=($a24 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT DAA='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a25=$data['total'];

$p25=($a25 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT DBMS_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a26=$data['total'];

$p26=($a26 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT COMPUTER_NETWORKS_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a27=$data['total'];


$p27=($a27 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT SOFT_SKILLS_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a28=$data['total'];

$p28=($a28 / $total3)*100;


$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where BATCH='$batch' AND NOT QANTATIVE_VERBAL_APTITUDE_1='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a29=$data['total'];

$p29=($a29 / $total3)*100;

//section a
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where SECTION='$sec_a' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_a=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where SECTION='$sec_a' AND BATCH='$batch' AND NOT OPEN_ELECTIVE_1='$me2' AND NOT DBMS='$me2' AND NOT COMPUTER_GRAPHICS='$me2' AND NOT COMPUTER_NETWORKS='$me2' AND NOT DAA='$me2' AND NOT DBMS_LAB='$me2' AND NOT COMPUTER_NETWORKS_LAB='$me2' AND NOT SOFT_SKILLS_LAB='$me2' AND NOT QANTATIVE_VERBAL_APTITUDE_1='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_a=$data['total'];

$tot_section_per_a=($tot_section_a/$tot_student_a)* 100;

//section-b
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where SECTION='$sec_b' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_b=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where SECTION='$sec_b' AND BATCH='$batch' AND NOT OPEN_ELECTIVE_1='$me2' AND NOT DBMS='$me2' AND NOT COMPUTER_GRAPHICS='$me2' AND NOT COMPUTER_NETWORKS='$me2' AND NOT DAA='$me2' AND NOT DBMS_LAB='$me2' AND NOT COMPUTER_NETWORKS_LAB='$me2' AND NOT SOFT_SKILLS_LAB='$me2' AND NOT QANTATIVE_VERBAL_APTITUDE_1='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_b=$data['total'];

$tot_section_per_b=($tot_section_b/$tot_student_b)* 100;
//sectio-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where SECTION='$sec_c' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_c=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where SECTION='$sec_c' AND BATCH='$batch' AND NOT OPEN_ELECTIVE_1='$me2' AND NOT DBMS='$me2' AND NOT COMPUTER_GRAPHICS='$me2' AND NOT COMPUTER_NETWORKS='$me2' AND NOT DAA='$me2' AND NOT DBMS_LAB='$me2' AND NOT COMPUTER_NETWORKS_LAB='$me2' AND NOT SOFT_SKILLS_LAB='$me2' AND NOT QANTATIVE_VERBAL_APTITUDE_1='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_c=$data['total'];
$tot_section_per_c=($tot_section_c/$tot_student_c)* 100;
$querys= mysql_query("SELECT * FROM 3_1_table where BATCH='$batch'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
				$accodomic_year=$row['ACCODOMIC_YEAR'];
		}


			$temp=(String)$accodomic_year;
			$toyear=substr($temp,-4,+9);
			$from_year=substr($temp,-9,+4);
			$from_year1=$from_year-1;
			$toyear1=$toyear-1;
			$from_year2=$from_year-2;
			$toyear2=$toyear-2;
			$ac_year1="$from_year1-$toyear1";	
			$ac_year2="$from_year2-$toyear2";	
				

		$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where ACCODOMIC_YEAR='$ac_year1'");
		$data=mysql_fetch_assoc($result);
		$tot_student1=$data['total'];
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where ACCODOMIC_YEAR='$ac_year1' AND NOT OPEN_ELECTIVE_1='$me2' AND NOT DBMS='$me2' AND NOT COMPUTER_GRAPHICS='$me2' AND NOT COMPUTER_NETWORKS='$me2' AND NOT DAA='$me2' AND NOT DBMS_LAB='$me2' AND NOT COMPUTER_NETWORKS_LAB='$me2' AND NOT SOFT_SKILLS_LAB='$me2' AND NOT QANTATIVE_VERBAL_APTITUDE_1='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section1=$data['total'];

$tot_section_per1=($tot_section1/$tot_student1)*100;

		$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where ACCODOMIC_YEAR='$ac_year2'");
		$data=mysql_fetch_assoc($result);
		$tot_student2=$data['total'];
		
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where ACCODOMIC_YEAR='$ac_year2'  AND NOT OPEN_ELECTIVE_1='$me2' AND NOT DBMS='$me2' AND NOT COMPUTER_GRAPHICS='$me2' AND NOT COMPUTER_NETWORKS='$me2' AND NOT DAA='$me2' AND NOT DBMS_LAB='$me2' AND NOT COMPUTER_NETWORKS_LAB='$me2' AND NOT SOFT_SKILLS_LAB='$me2' AND NOT QANTATIVE_VERBAL_APTITUDE_1='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section2=$data['total'];

$tot_section_per2=($tot_section2/$tot_student2)*100;





		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch'");
		$data=mysql_fetch_assoc($result);
		$tot_student=$data['total'];
echo "what".$tot_student."wee";		
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_1_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch' AND NOT OPEN_ELECTIVE_1='$me2' AND NOT DBMS='$me2' AND NOT COMPUTER_GRAPHICS='$me2' AND NOT COMPUTER_NETWORKS='$me2' AND NOT DAA='$me2' AND NOT DBMS_LAB='$me2' AND NOT COMPUTER_NETWORKS_LAB='$me2' AND NOT SOFT_SKILLS_LAB='$me2' AND NOT QANTATIVE_VERBAL_APTITUDE_1='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section=$data['total'];

$tot_section_per=($tot_section/$tot_student)*100;



	}
	else
	{

						?>
		<script>
		window.alert("SOME DATA IS MISSING");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php


	}





$querys= mysql_query("SELECT * FROM faculty_details where BATCH='$batch' AND year1='$year' AND sem='$sem'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
			$dbsection=$row['section'];
			$dbsubject=$row['subject'];
			$faculty_name=$row['name'];
			$dbbatch=$row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];

		if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem && $dbsection==$sec_c && $dbsubject==$sub1)
		{
			$s1_faculty_C=$faculty_name;
			
			if($s1_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p21 WHERE BATCH='$batch' AND year1=$year AND section='$sec_c' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			

		}				
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem && $dbsubject==$sub2)
		{
			$s2_faculty_C=$faculty_name;

	if($s2_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p22 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem  && $dbsubject==$sub3)
		{
			$s3_faculty_C=$faculty_name;
	if($s3_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p23 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub4)
		{
			$s4_faculty_C=$faculty_name;

			if($s4_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p24 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub5)
		{
			$s5_faculty_C=$faculty_name;

			if($s5_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p25 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub6)
		{
			$s6_faculty_C=$faculty_name;
			if($s6_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p26 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub7)
		{
			$s7_faculty_C=$faculty_name;
			if($s7_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p27 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub8)
		{
			$s8_faculty_C=$faculty_name;

		if($s8_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p28 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub9)
		{
			$s9_faculty_C=$faculty_name;
						if($s9_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p29 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub9' AND name='$s9_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub1)
		{
			$s1_faculty_A=$faculty_name;


			if($s1_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p1 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_A' ") or die("120121");
			


			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub2)
		{
			$s2_faculty_A=$faculty_name;

			if($s2_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p2 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub3)
		{
			$s3_faculty_A=$faculty_name;
			if($s3_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p3 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub4)
		{
			$s4_faculty_A=$faculty_name;
			if($s4_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p4 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub5)
		{
			$s5_faculty_A=$faculty_name;
			if($s5_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p5 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub6)
		{
			$s6_faculty_A=$faculty_name;
			if($s6_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p6 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			





		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub7)
		{
			$s7_faculty_A=$faculty_name;

			if($s7_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p7 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub8)
		{
			$s8_faculty_A=$faculty_name;
			if($s8_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p8 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub9)
		{
			$s9_faculty_A=$faculty_name;
if($s9_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p9 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub9' AND name='$s9_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub1)
		{
			$s1_faculty_B=$faculty_name;
				if($s1_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p11 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub2)
		{
			$s2_faculty_B=$faculty_name;

			if($s2_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p12 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub3)
		{
			$s3_faculty_B=$faculty_name;
			if($s3_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p13 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub4)
		{
			$s4_faculty_B=$faculty_name;

			if($s4_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p14 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			








		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub5)
		{
			$s5_faculty_B=$faculty_name;
				if($s5_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p15 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub6)
		{
			$s6_faculty_B=$faculty_name;
				if($s6_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p16 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub7)
		{
			$s7_faculty_B=$faculty_name;

			if($s7_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p17 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub8)
		{
			$s8_faculty_B=$faculty_name;
			if($s8_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p18 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub9)
		{
			$s9_faculty_B=$faculty_name;
			if($s9_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p19 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub9' AND name='$s9_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else
{

}



		}//while loop end

}
else
{
?>
		<script>
		window.alert("NO FACULTY DATA EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php
}

}
else if($year==3 && $sem==2)
{
$sub1="COMILER_DESIGN";
$sub2="SOFTWARE_ENGI";
$sub3="WEB_TECHNOLOGIES";
$sub4="COMPUTER_ARCHITECTURE";
$sub5="PROFESSIONAL_ELECTIVE_1";
$sub6="OPEN_SOURCE_T_LAB";
$sub7="SE_LAB_MINI_LAB";
$sub8="QUANTATIVE_VERBAL_APTITUDE_2";
//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];
//section-B
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 3_2_table where BATCH='$batch' AND SECTION='$sec_b'");
$data1=mysql_fetch_assoc($result1);
$total2=$data1['total1'];
//section-C
$result2=mysql_query("select count(ROLL_NUMBER) as total2 from 3_2_table where BATCH='$batch' AND SECTION='$sec_c'");
$data2=mysql_fetch_assoc($result2);
$total3=$data2['total2'];


//section-a
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT COMILER_DESIGN='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$p1=($a1 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT SOFTWARE_ENGI='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$p2=($a2 / $total1)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT WEB_TECHNOLOGIES='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$p3=($a3 / $total1)* 100;
echo "my".$p3.$total1;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT COMPUTER_ARCHITECTURE='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$p4=($a4 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT PROFESSIONAL_ELECTIVE_1='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$p5=($a5 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT OPEN_SOURCE_T_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$p6=($a6 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT SE_LAB_MINI_LAB='$me2'AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];


$p7=($a7 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$p8=($a8 / $total1)*100;



//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT COMILER_DESIGN='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a11=$data['total'];

$p11=($a11 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT SOFTWARE_ENGI='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a12=$data['total'];

$p12=($a12 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND  NOT WEB_TECHNOLOGIES='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a13=$data['total'];

$p13=($a13 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND  NOT COMPUTER_ARCHITECTURE='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a14=$data['total'];

$p14=($a14 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT PROFESSIONAL_ELECTIVE_1='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a15=$data['total'];

$p15=($a15 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT OPEN_SOURCE_T_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a16=$data['total'];

$p16=($a16 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT SE_LAB_MINI_LAB='$me2'AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a17=$data['total'];


$p17=($a17 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a18=$data['total'];

$p18=($a18 / $total2)*100;




//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT COMILER_DESIGN='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a21=$data['total'];

$p21=(($a21 / $total3) * 100);

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT SOFTWARE_ENGI='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a22=$data['total'];

$p22=($a22 / $total3)*100;

echo "ww".$a22;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT WEB_TECHNOLOGIES='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a23=$data['total'];

$p23=($a23 / $total3)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT COMPUTER_ARCHITECTURE='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a24=$data['total'];

$p24=($a24 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT PROFESSIONAL_ELECTIVE_1='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a25=$data['total'];

$p25=($a25 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND  NOT OPEN_SOURCE_T_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a26=$data['total'];

$p26=($a26 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT SE_LAB_MINI_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a27=$data['total'];


$p27=($a27 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where BATCH='$batch' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a28=$data['total'];

$p28=($a28 / $total3)*100;


//section_A
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$sec_a' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_a=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$sec_a' AND BATCH='$batch' AND NOT COMILER_DESIGN='$me2' AND NOT SOFTWARE_ENGI='$me2' AND NOT WEB_TECHNOLOGIES='$me2' AND NOT COMPUTER_ARCHITECTURE='$me2' AND NOT PROFESSIONAL_ELECTIVE_1='$me2' AND NOT OPEN_SOURCE_T_LAB='$me2' AND NOT SE_LAB_MINI_LAB='$me2' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_a=$data['total'];

$tot_section_per_a=($tot_section_a/$tot_student_a)* 100;
//section_B
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$sec_b' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_b=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$sec_b' AND BATCH='$batch' AND NOT COMILER_DESIGN='$me2' AND NOT SOFTWARE_ENGI='$me2' AND NOT WEB_TECHNOLOGIES='$me2' AND NOT COMPUTER_ARCHITECTURE='$me2' AND NOT PROFESSIONAL_ELECTIVE_1='$me2' AND NOT OPEN_SOURCE_T_LAB='$me2' AND NOT SE_LAB_MINI_LAB='$me2' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_b=$data['total'];

$tot_section_per_b=($tot_section_b/$tot_student_b)* 100;

//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$sec_c' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_c=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where SECTION='$sec_c' AND BATCH='$batch' AND NOT COMILER_DESIGN='$me2' AND NOT SOFTWARE_ENGI='$me2' AND NOT WEB_TECHNOLOGIES='$me2' AND NOT COMPUTER_ARCHITECTURE='$me2' AND NOT PROFESSIONAL_ELECTIVE_1='$me2' AND NOT OPEN_SOURCE_T_LAB='$me2' AND NOT SE_LAB_MINI_LAB='$me2' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_c=$data['total'];

$tot_section_per_c=($tot_section_c/$tot_student_c)* 100;

$querys= mysql_query("SELECT * FROM 3_2_table where BATCH='$batch'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
				$accodomic_year=$row['ACCODOMIC_YEAR'];
			
		}


			$temp=(String)$accodomic_year;
			$toyear=substr($temp,-4,+9);
			$from_year=substr($temp,-9,+4);
			$from_year1=$from_year-1;
			$toyear1=$toyear-1;
			$from_year2=$from_year-2;
			$toyear2=$toyear-2;
			$ac_year1="$from_year1-$toyear1";	
			$ac_year2="$from_year2-$toyear2";	


		$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where ACCODOMIC_YEAR='$ac_year1' ");
		$data=mysql_fetch_assoc($result);
		$tot_student1=$data['total'];
		
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 3_2_table where ACCODOMIC_YEAR='$ac_year1' AND  NOT COMILER_DESIGN='$me2' AND NOT SOFTWARE_ENGI='$me2' AND NOT WEB_TECHNOLOGIES='$me2' AND NOT COMPUTER_ARCHITECTURE='$me2' AND NOT PROFESSIONAL_ELECTIVE_1='$me2' AND NOT OPEN_SOURCE_T_LAB='$me2' AND NOT SE_LAB_MINI_LAB='$me2' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2'");
		$data=mysql_fetch_assoc($result1);
		$tot_section1=$data['total1'];
$tot_section_per1=($tot_section1/$tot_student1)*100;



		$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where ACCODOMIC_YEAR='$ac_year2'");
		$data=mysql_fetch_assoc($result);
		$tot_student2=$data['total'];
		
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 3_2_table where ACCODOMIC_YEAR='$ac_year2' AND NOT COMILER_DESIGN='$me2' AND NOT SOFTWARE_ENGI='$me2' AND NOT WEB_TECHNOLOGIES='$me2' AND NOT COMPUTER_ARCHITECTURE='$me2' AND NOT PROFESSIONAL_ELECTIVE_1='$me2' AND NOT OPEN_SOURCE_T_LAB='$me2' AND NOT SE_LAB_MINI_LAB='$me2' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2'");
		$data=mysql_fetch_assoc($result1);
		$tot_section2=$data['total1'];
$tot_section_per2=($tot_section2/$tot_student2)*100;


		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 3_2_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch'");
		$data=mysql_fetch_assoc($result);
		$tot_student=$data['total'];
		
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 3_2_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch' AND NOT COMILER_DESIGN='$me2' AND NOT SOFTWARE_ENGI='$me2' AND NOT WEB_TECHNOLOGIES='$me2' AND NOT COMPUTER_ARCHITECTURE='$me2' AND NOT PROFESSIONAL_ELECTIVE_1='$me2' AND NOT OPEN_SOURCE_T_LAB='$me2' AND NOT SE_LAB_MINI_LAB='$me2' AND NOT QUANTATIVE_VERBAL_APTITUDE_2='$me2'");
		$data=mysql_fetch_assoc($result1);
		$tot_section=$data['total1'];
$tot_section_per=($tot_section/$tot_student)*100;



	}
	else
	{

						?>
		<script>
		window.alert("SOME DATA IS MISSING");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php


	}





$querys= mysql_query("SELECT * FROM faculty_details where BATCH='$batch' AND year1='$year' AND sem='$sem'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
			$dbsection=$row['section'];
			$dbsubject=$row['subject'];
			$faculty_name=$row['name'];
			$dbbatch=$row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];

		if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem && $dbsection==$sec_c && $dbsubject==$sub1)
		{
			$s1_faculty_C=$faculty_name;
			
			if($s1_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p21 WHERE BATCH='$batch' AND year1=$year AND section='$sec_c' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			

		}				
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem && $dbsubject==$sub2)
		{
			$s2_faculty_C=$faculty_name;

	if($s2_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p22 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem  && $dbsubject==$sub3)
		{
			$s3_faculty_C=$faculty_name;
	if($s3_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p23 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub4)
		{
			$s4_faculty_C=$faculty_name;

			if($s4_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p24 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub5)
		{
			$s5_faculty_C=$faculty_name;

			if($s5_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p25 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub6)
		{
			$s6_faculty_C=$faculty_name;
			if($s6_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p26 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub7)
		{
			$s7_faculty_C=$faculty_name;
			if($s7_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p27 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub8)
		{
			$s8_faculty_C=$faculty_name;

		if($s8_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p28 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub1)
		{
			$s1_faculty_A=$faculty_name;


			if($s1_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p1 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub2)
		{
			$s2_faculty_A=$faculty_name;

			if($s2_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p2 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub3)
		{
			$s3_faculty_A=$faculty_name;
			if($s3_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p3 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub4)
		{
			$s4_faculty_A=$faculty_name;
			if($s4_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p4 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub5)
		{
			$s5_faculty_A=$faculty_name;
			if($s5_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p5 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub6)
		{
			$s6_faculty_A=$faculty_name;
			if($s6_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p6 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			





		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub7)
		{
			$s7_faculty_A=$faculty_name;

			if($s7_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p7 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub8)
		{
			$s8_faculty_A=$faculty_name;
			if($s8_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p8 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub1)
		{
			$s1_faculty_B=$faculty_name;
				if($s1_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p11 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub2)
		{
			$s2_faculty_B=$faculty_name;

			if($s2_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p12 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub3)
		{
			$s3_faculty_B=$faculty_name;
			if($s3_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p13 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub4)
		{
			$s4_faculty_B=$faculty_name;

			if($s4_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p14 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			








		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub5)
		{
			$s5_faculty_B=$faculty_name;
				if($s5_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p15 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub6)
		{
			$s6_faculty_B=$faculty_name;
				if($s6_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p16 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub7)
		{
			$s7_faculty_B=$faculty_name;

			if($s7_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p17 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub8)
		{
			$s8_faculty_B=$faculty_name;
			if($s8_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p18 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else
{

}



		}//while loop end

}
else
{
?>
		<script>
		window.alert("NO FACULTY DATA EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php
}







}
else if($year==4 && $sem==1)
{
$sub1="OPEN_ELECTIVE_2";
$sub2="CRYPTOGRAPHY_AND_N_S";
$sub3="OOA_DESIGN";
$sub4="PROFEESIONAL_ELECTIVE_2";
$sub5="PROFESSIONAL_ELECTIVE_3";
$sub6="C_N_S_LAB";
$sub7="INDUSTRAIL_TRAINING_SEMINAR";
$sub8="PROJECT_1";
//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];
//section-B
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 4_1_table where BATCH='$batch' AND SECTION='$sec_b'");
$data1=mysql_fetch_assoc($result1);
$total2=$data1['total1'];
//section-C
$result2=mysql_query("select count(ROLL_NUMBER) as total2 from 4_1_table where BATCH='$batch' AND SECTION='$sec_c'");
$data2=mysql_fetch_assoc($result2);
$total3=$data2['total2'];


//section-a
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND  NOT OPEN_ELECTIVE_2='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$p1=($a1 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT CRYPTOGRAPHY_AND_N_S='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$p2=($a2 / $total1)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT OOA_DESIGN='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$p3=($a3 / $total1)* 100;
echo "my".$p3.$total1;
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT PROFEESIONAL_ELECTIVE_2='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$p4=($a4 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT PROFESSIONAL_ELECTIVE_3='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$p5=($a5 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT C_N_S_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$p6=($a6 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];


$p7=($a7 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT PROJECT_1='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$p8=($a8 / $total1)*100;



//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT OPEN_ELECTIVE_2='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a11=$data['total'];

$p11=($a11 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT CRYPTOGRAPHY_AND_N_S='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a12=$data['total'];

$p12=($a12 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND  NOT OOA_DESIGN='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a13=$data['total'];

$p13=($a13 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND  NOT PROFEESIONAL_ELECTIVE_2='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a14=$data['total'];

$p14=($a14 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT PROFESSIONAL_ELECTIVE_3='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a15=$data['total'];

$p15=($a15 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT C_N_S_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a16=$data['total'];

$p16=($a16 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a17=$data['total'];


$p17=($a17 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT PROJECT_1='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a18=$data['total'];

$p18=($a18 / $total2)*100;




//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT OPEN_ELECTIVE_2='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a21=$data['total'];

$p21=(($a21 / $total3) * 100);

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT CRYPTOGRAPHY_AND_N_S='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a22=$data['total'];

$p22=($a22 / $total3)*100;

echo "ww".$a22;
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT OOA_DESIGN='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a23=$data['total'];

$p23=($a23 / $total3)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT PROFEESIONAL_ELECTIVE_2='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a24=$data['total'];

$p24=($a24 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT PROFESSIONAL_ELECTIVE_3='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a25=$data['total'];

$p25=($a25 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND  NOT C_N_S_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a26=$data['total'];

$p26=($a26 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a27=$data['total'];


$p27=($a27 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where BATCH='$batch' AND NOT PROJECT_1='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a28=$data['total'];

$p28=($a28 / $total3)*100;


//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$sec_a' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_a=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$sec_a' AND BATCH='$batch' AND NOT OPEN_ELECTIVE_2='$me2' AND NOT CRYPTOGRAPHY_AND_N_S='$me2' AND NOT OOA_DESIGN='$me2' AND NOT PROFEESIONAL_ELECTIVE_2='$me2' AND NOT PROFESSIONAL_ELECTIVE_3='$me2' AND NOT C_N_S_LAB='$me2' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2' AND NOT PROJECT_1='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_a=$data['total'];

$tot_section_per_a=($tot_section_a/$tot_student_a)*100;

//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$sec_b' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_b=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$sec_b' AND BATCH='$batch' AND NOT OPEN_ELECTIVE_2='$me2' AND NOT CRYPTOGRAPHY_AND_N_S='$me2' AND NOT OOA_DESIGN='$me2' AND NOT PROFEESIONAL_ELECTIVE_2='$me2' AND NOT PROFESSIONAL_ELECTIVE_3='$me2' AND NOT C_N_S_LAB='$me2' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2' AND NOT PROJECT_1='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_b=$data['total'];

$tot_section_per_b=($tot_section_b/$tot_student_b)*100;
//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$sec_c' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_c=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where SECTION='$sec_c' AND BATCH='$batch' AND NOT OPEN_ELECTIVE_2='$me2' AND NOT CRYPTOGRAPHY_AND_N_S='$me2' AND NOT OOA_DESIGN='$me2' AND NOT PROFEESIONAL_ELECTIVE_2='$me2' AND NOT PROFESSIONAL_ELECTIVE_3='$me2' AND NOT C_N_S_LAB='$me2' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2' AND NOT PROJECT_1='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_c=$data['total'];

$tot_section_per_c=($tot_section_c/$tot_student_c)*100;

$querys= mysql_query("SELECT * FROM 4_1_table where BATCH='$batch'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
				$accodomic_year=$row['ACCODOMIC_YEAR'];
			
		}

						$temp=(String)$accodomic_year;
			$toyear=substr($temp,-4,+9);
			$from_year=substr($temp,-9,+4);
			$from_year1=$from_year-1;
			$toyear1=$toyear-1;
			$from_year2=$from_year-2;
			$toyear2=$toyear-2;
			$ac_year1="$from_year1-$toyear1";	
			$ac_year2="$from_year2-$toyear2";	

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where ACCODOMIC_YEAR='$ac_year1' ");
		$data=mysql_fetch_assoc($result);
		$tot_student1=$data['total'];
		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where ACCODOMIC_YEAR='$ac_year1'  AND NOT OPEN_ELECTIVE_2='$me2' AND NOT CRYPTOGRAPHY_AND_N_S='$me2' AND NOT OOA_DESIGN='$me2' AND NOT PROFEESIONAL_ELECTIVE_2='$me2' AND NOT PROFESSIONAL_ELECTIVE_3='$me2' AND NOT C_N_S_LAB='$me2' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2' AND NOT PROJECT_1='$me2'");
$data=mysql_fetch_assoc($result);
		$tot_section1=$data['total'];

$tot_section_per1=($tot_section1/$tot_student1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where ACCODOMIC_YEAR='$ac_year2' ");
		$data=mysql_fetch_assoc($result);
		$tot_student2=$data['total'];
		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where ACCODOMIC_YEAR='$ac_year2'  AND NOT OPEN_ELECTIVE_2='$me2' AND NOT CRYPTOGRAPHY_AND_N_S='$me2' AND NOT OOA_DESIGN='$me2' AND NOT PROFEESIONAL_ELECTIVE_2='$me2' AND NOT PROFESSIONAL_ELECTIVE_3='$me2' AND NOT C_N_S_LAB='$me2' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2' AND NOT PROJECT_1='$me2'");
$data=mysql_fetch_assoc($result);
		$tot_section2=$data['total'];

$tot_section_per2=($tot_section2/$tot_student2)*100;


		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch'");
		$data=mysql_fetch_assoc($result);
		$tot_student=$data['total'];
		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_1_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch' AND NOT OPEN_ELECTIVE_2='$me2' AND NOT CRYPTOGRAPHY_AND_N_S='$me2' AND NOT OOA_DESIGN='$me2' AND NOT PROFEESIONAL_ELECTIVE_2='$me2' AND NOT PROFESSIONAL_ELECTIVE_3='$me2' AND NOT C_N_S_LAB='$me2' AND NOT INDUSTRAIL_TRAINING_SEMINAR='$me2' AND NOT PROJECT_1='$me2'");
$data=mysql_fetch_assoc($result);
		$tot_section=$data['total'];

$tot_section_per=($tot_section/$tot_student)*100;



	}
	else
	{

						?>
		<script>
		window.alert("SOME DATA IS MISSING");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php


	}





$querys= mysql_query("SELECT * FROM faculty_details where BATCH='$batch' AND year1='$year' AND sem='$sem'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
			$dbsection=$row['section'];
			$dbsubject=$row['subject'];
			$faculty_name=$row['name'];
			$dbbatch=$row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];

		if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem && $dbsection==$sec_c && $dbsubject==$sub1)
		{
			$s1_faculty_C=$faculty_name;
			
			if($s1_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p21 WHERE BATCH='$batch' AND year1=$year AND section='$sec_c' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			

		}				
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem && $dbsubject==$sub2)
		{
			$s2_faculty_C=$faculty_name;

	if($s2_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p22 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem  && $dbsubject==$sub3)
		{
			$s3_faculty_C=$faculty_name;
	if($s3_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p23 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub4)
		{
			$s4_faculty_C=$faculty_name;

			if($s4_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p24 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub5)
		{
			$s5_faculty_C=$faculty_name;

			if($s5_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p25 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub6)
		{
			$s6_faculty_C=$faculty_name;
			if($s6_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p26 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub7)
		{
			$s7_faculty_C=$faculty_name;
			if($s7_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p27 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub8)
		{
			$s8_faculty_C=$faculty_name;

		if($s8_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p28 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub1)
		{
			$s1_faculty_A=$faculty_name;


			if($s1_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p1 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub2)
		{
			$s2_faculty_A=$faculty_name;

			if($s2_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p2 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub3)
		{
			$s3_faculty_A=$faculty_name;
			if($s3_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p3 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub4)
		{
			$s4_faculty_A=$faculty_name;
			if($s4_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p4 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub5)
		{
			$s5_faculty_A=$faculty_name;
			if($s5_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p5 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub6)
		{
			$s6_faculty_A=$faculty_name;
			if($s6_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p6 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			





		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub7)
		{
			$s7_faculty_A=$faculty_name;

			if($s7_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p7 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub8)
		{
			$s8_faculty_A=$faculty_name;
			if($s8_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p8 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub1)
		{
			$s1_faculty_B=$faculty_name;
				if($s1_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p11 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub2)
		{
			$s2_faculty_B=$faculty_name;

			if($s2_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p12 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub3)
		{
			$s3_faculty_B=$faculty_name;
			if($s3_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p13 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub4)
		{
			$s4_faculty_B=$faculty_name;

			if($s4_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p14 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			








		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub5)
		{
			$s5_faculty_B=$faculty_name;
				if($s5_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p15 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub6)
		{
			$s6_faculty_B=$faculty_name;
				if($s6_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p16 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub7)
		{
			$s7_faculty_B=$faculty_name;

			if($s7_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p17 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub8)
		{
			$s8_faculty_B=$faculty_name;
			if($s8_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p18 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else
{

}



		}//while loop end

}
else
{
?>
		<script>
		window.alert("NO FACULTY DATA EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php
}





}
else if($year==1 && $sem==1)
{
$sub1="ENGLISH";
$sub2="ENGI_MATHEMATICS_1";
$sub3="ENGI_CHEMISTRY";
$sub4="PROFESSIONAL_E_H_V";
$sub5="BASIC_ELECTRONICS_ENGI";
$sub6="ENGI_CHEMISTRY_LAB";
$sub7="PROGRAMMING_WITH_C_LAB";
$sub8="NCC_NSS_SPORTS";

//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];
//section-B
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 1_1_table where BATCH='$batch' AND SECTION='$sec_b'");
$data1=mysql_fetch_assoc($result1);
$total2=$data1['total1'];
//section-C
$result2=mysql_query("select count(ROLL_NUMBER) as total2 from 1_1_table where BATCH='$batch' AND SECTION='$sec_c'");
$data2=mysql_fetch_assoc($result2);
$total3=$data2['total2'];


//section-a
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND   NOT ENGLISH='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$p1=($a1 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT ENGI_MATHEMATICS_1='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$p2=($a2 / $total1)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT ENGI_CHEMISTRY='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$p3=($a3 / $total1)* 100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT PROFESSIONAL_E_H_V='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$p4=($a4 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT BASIC_ELECTRONICS_ENGI='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$p5=($a5 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT ENGI_CHEMISTRY_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$p6=($a6 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT PROGRAMMING_WITH_C_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];


$p7=($a7 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT NCC_NSS_SPORTS='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$p8=($a8 / $total1)*100;



//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT ENGLISH='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a11=$data['total'];

$p11=($a11 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT ENGI_MATHEMATICS_1='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a12=$data['total'];

$p12=($a12 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND  NOT ENGI_CHEMISTRY='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a13=$data['total'];

$p13=($a13 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND  NOT PROFESSIONAL_E_H_V='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a14=$data['total'];

$p14=($a14 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT BASIC_ELECTRONICS_ENGI='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a15=$data['total'];

$p15=($a15 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT ENGI_CHEMISTRY_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a16=$data['total'];

$p16=($a16 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT PROGRAMMING_WITH_C_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a17=$data['total'];


$p17=($a17 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT NCC_NSS_SPORTS='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a18=$data['total'];

$p18=($a18 / $total2)*100;




//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT ENGLISH='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a21=$data['total'];

$p21=(($a21 / $total3) * 100);

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT ENGI_MATHEMATICS_1='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a22=$data['total'];

$p22=($a22 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT ENGI_CHEMISTRY='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a23=$data['total'];

$p23=($a23 / $total3)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT PROFESSIONAL_E_H_V='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a24=$data['total'];

$p24=($a24 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT BASIC_ELECTRONICS_ENGI='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a25=$data['total'];

$p25=($a25 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND  NOT ENGI_CHEMISTRY_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a26=$data['total'];

$p26=($a26 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT PROGRAMMING_WITH_C_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a27=$data['total'];


$p27=($a27 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where BATCH='$batch' AND NOT NCC_NSS_SPORTS='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a28=$data['total'];

$p28=($a28 / $total3)*100;

//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$sec_a' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_a=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$sec_a' AND BATCH='$batch' AND NOT ENGLISH='$me2' AND NOT ENGI_MATHEMATICS_1='$me2' AND NOT ENGI_CHEMISTRY='$me2' AND NOT PROFESSIONAL_E_H_V='$me2' AND NOT BASIC_ELECTRONICS_ENGI='$me2' AND NOT ENGI_CHEMISTRY_LAB='$me2' AND NOT PROGRAMMING_WITH_C_LAB='$me2' AND NOT NCC_NSS_SPORTS='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_a=$data['total'];

$tot_section_per_a=($tot_section_a/$tot_student_a)*100;


//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$sec_b' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_b=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$sec_b' AND BATCH='$batch' AND NOT ENGLISH='$me2' AND NOT ENGI_MATHEMATICS_1='$me2' AND NOT ENGI_CHEMISTRY='$me2' AND NOT PROFESSIONAL_E_H_V='$me2' AND NOT BASIC_ELECTRONICS_ENGI='$me2' AND NOT ENGI_CHEMISTRY_LAB='$me2' AND NOT PROGRAMMING_WITH_C_LAB='$me2' AND NOT NCC_NSS_SPORTS='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_b=$data['total'];

$tot_section_per_b=($tot_section_b/$tot_student_b)*100;


//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$sec_c' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_c=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where SECTION='$sec_c' AND BATCH='$batch' AND NOT ENGLISH='$me2' AND NOT ENGI_MATHEMATICS_1='$me2' AND NOT ENGI_CHEMISTRY='$me2' AND NOT PROFESSIONAL_E_H_V='$me2' AND NOT BASIC_ELECTRONICS_ENGI='$me2' AND NOT ENGI_CHEMISTRY_LAB='$me2' AND NOT PROGRAMMING_WITH_C_LAB='$me2' AND NOT NCC_NSS_SPORTS='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_c=$data['total'];

$tot_section_per_c=($tot_section_c/$tot_student_c)*100;


$querys= mysql_query("SELECT * FROM 1_1_table where BATCH='$batch'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
				$accodomic_year=$row['ACCODOMIC_YEAR'];
			
		}
		


					$temp=(String)$accodomic_year;
			$toyear=substr($temp,-4,+9);
			$from_year=substr($temp,-9,+4);
			$from_year1=$from_year-1;
			$toyear1=$toyear-1;
			$from_year2=$from_year-2;
			$toyear2=$toyear-2;
			$ac_year1="$from_year1-$toyear1";	
			$ac_year2="$from_year2-$toyear2";	

		$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where ACCODOMIC_YEAR='$ac_year2' ");
		$data=mysql_fetch_assoc($result);
		$tot_student2=$data['total'];
		
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where ACCODOMIC_YEAR='$ac_year2' AND  NOT ENGLISH='$me2' AND NOT ENGI_MATHEMATICS_1='$me2' AND NOT ENGI_CHEMISTRY='$me2' AND NOT PROFESSIONAL_E_H_V='$me2' AND NOT BASIC_ELECTRONICS_ENGI='$me2' AND NOT ENGI_CHEMISTRY_LAB='$me2' AND NOT PROGRAMMING_WITH_C_LAB='$me2' AND NOT NCC_NSS_SPORTS='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section2=$data['total'];

$tot_section_per2=($tot_section2/$tot_student2)*100;


		$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where ACCODOMIC_YEAR='$ac_year1' ");
		$data=mysql_fetch_assoc($result);
		$tot_student1=$data['total'];
		
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where ACCODOMIC_YEAR='$ac_year1'  AND NOT ENGLISH='$me2' AND NOT ENGI_MATHEMATICS_1='$me2' AND NOT ENGI_CHEMISTRY='$me2' AND NOT PROFESSIONAL_E_H_V='$me2' AND NOT BASIC_ELECTRONICS_ENGI='$me2' AND NOT ENGI_CHEMISTRY_LAB='$me2' AND NOT PROGRAMMING_WITH_C_LAB='$me2' AND NOT NCC_NSS_SPORTS='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section1=$data['total'];

$tot_section_per1=($tot_section1/$tot_student1)*100;




		$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch'");
		$data=mysql_fetch_assoc($result);
		$tot_student=$data['total'];
		
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_1_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch' AND NOT ENGLISH='$me2' AND NOT ENGI_MATHEMATICS_1='$me2' AND NOT ENGI_CHEMISTRY='$me2' AND NOT PROFESSIONAL_E_H_V='$me2' AND NOT BASIC_ELECTRONICS_ENGI='$me2' AND NOT ENGI_CHEMISTRY_LAB='$me2' AND NOT PROGRAMMING_WITH_C_LAB='$me2' AND NOT NCC_NSS_SPORTS='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section=$data['total'];

$tot_section_per=($tot_section/$tot_student)*100;



	}
	else
	{

						?>
		<script>
		window.alert("SOME DATA IS MISSING");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php


	}







$querys= mysql_query("SELECT * FROM faculty_details where BATCH='$batch' AND year1='$year' AND sem='$sem'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
			$dbsection=$row['section'];
			$dbsubject=$row['subject'];
			$faculty_name=$row['name'];
			$dbbatch=$row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];

		if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem && $dbsection==$sec_c && $dbsubject==$sub1)
		{
			$s1_faculty_C=$faculty_name;
			
			if($s1_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p21 WHERE BATCH='$batch' AND year1=$year AND section='$sec_c' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			

		}				
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem && $dbsubject==$sub2)
		{
			$s2_faculty_C=$faculty_name;

	if($s2_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p22 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem  && $dbsubject==$sub3)
		{
			$s3_faculty_C=$faculty_name;
	if($s3_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p23 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub4)
		{
			$s4_faculty_C=$faculty_name;

			if($s4_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p24 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub5)
		{
			$s5_faculty_C=$faculty_name;

			if($s5_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p25 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub6)
		{
			$s6_faculty_C=$faculty_name;
			if($s6_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p26 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub7)
		{
			$s7_faculty_C=$faculty_name;
			if($s7_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p27 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub8)
		{
			$s8_faculty_C=$faculty_name;

		if($s8_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p28 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub1)
		{
			$s1_faculty_A=$faculty_name;


			if($s1_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p1 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub2)
		{
			$s2_faculty_A=$faculty_name;

			if($s2_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p2 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub3)
		{
			$s3_faculty_A=$faculty_name;
			if($s3_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p3 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub4)
		{
			$s4_faculty_A=$faculty_name;
			if($s4_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p4 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub5)
		{
			$s5_faculty_A=$faculty_name;
			if($s5_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p5 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub6)
		{
			$s6_faculty_A=$faculty_name;
			if($s6_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p6 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			





		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub7)
		{
			$s7_faculty_A=$faculty_name;

			if($s7_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p7 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub8)
		{
			$s8_faculty_A=$faculty_name;
			if($s8_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p8 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub1)
		{
			$s1_faculty_B=$faculty_name;
				if($s1_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p11 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub2)
		{
			$s2_faculty_B=$faculty_name;

			if($s2_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p12 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub3)
		{
			$s3_faculty_B=$faculty_name;
			if($s3_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p13 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub4)
		{
			$s4_faculty_B=$faculty_name;

			if($s4_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p14 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			








		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub5)
		{
			$s5_faculty_B=$faculty_name;
				if($s5_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p15 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub6)
		{
			$s6_faculty_B=$faculty_name;
				if($s6_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p16 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub7)
		{
			$s7_faculty_B=$faculty_name;

			if($s7_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p17 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub8)
		{
			$s8_faculty_B=$faculty_name;
			if($s8_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p18 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else
{

}



		}//while loop end

}
else
{
?>
		<script>
		window.alert("NO FACULTY DATA EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php
}





}
else if($year==1 && $sem==2)
{
$sub1="ENGI_MATHEMATICS_2";
$sub2="ENGI_PHYSICS";
$sub3="ENVIRONMENTAL_SCIENCES";
$sub4="ENGI_DRAWING";
$sub5="ELEMENTS_OF_ELECTRICAL_ENGI";
$sub6="ENGI_PHYSICS_LAB";
$sub7="LANGUAGE_LAB";
$sub8="OOP_WITH_CPP_LAB";

//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];
//section-B
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 1_2_table where BATCH='$batch' AND SECTION='$sec_b'");
$data1=mysql_fetch_assoc($result1);
$total2=$data1['total1'];
//section-C
$result2=mysql_query("select count(ROLL_NUMBER) as total2 from 1_2_table where BATCH='$batch' AND SECTION='$sec_c'");
$data2=mysql_fetch_assoc($result2);
$total3=$data2['total2'];


//section-a
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND   NOT ENGI_MATHEMATICS_2='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$p1=($a1 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENGI_PHYSICS='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$p2=($a2 / $total1)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENVIRONMENTAL_SCIENCES='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$p3=($a3 / $total1)* 100;
echo "my".$p3.$total1;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENGI_DRAWING='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$p4=($a4 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$p5=($a5 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENGI_PHYSICS_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$p6=($a6 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT LANGUAGE_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];


$p7=($a7 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT OOP_WITH_CPP_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$p8=($a8 / $total1)*100;



//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENGI_MATHEMATICS_2='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a11=$data['total'];

$p11=($a11 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENGI_PHYSICS='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a12=$data['total'];

$p12=($a12 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND  NOT ENVIRONMENTAL_SCIENCES='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a13=$data['total'];

$p13=($a13 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND  NOT ENGI_DRAWING='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a14=$data['total'];

$p14=($a14 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a15=$data['total'];

$p15=($a15 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENGI_PHYSICS_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a16=$data['total'];

$p16=($a16 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT LANGUAGE_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a17=$data['total'];


$p17=($a17 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT OOP_WITH_CPP_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a18=$data['total'];

$p18=($a18 / $total2)*100;




//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENGI_MATHEMATICS_2='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a21=$data['total'];

$p21=(($a21 / $total3) * 100);

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENGI_PHYSICS='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a22=$data['total'];

$p22=($a22 / $total3)*100;

echo "ww".$a22;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENVIRONMENTAL_SCIENCES='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a23=$data['total'];

$p23=($a23 / $total3)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ENGI_DRAWING='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a24=$data['total'];

$p24=($a24 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a25=$data['total'];

$p25=($a25 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND  NOT ENGI_PHYSICS_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a26=$data['total'];

$p26=($a26 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT LANGUAGE_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a27=$data['total'];


$p27=($a27 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where BATCH='$batch' AND NOT OOP_WITH_CPP_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a28=$data['total'];

$p28=($a28 / $total3)*100;

//sectio-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$sec_a' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_a=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$sec_a' AND BATCH='$batch' AND NOT ENGI_MATHEMATICS_2='$me2' AND NOT ENGI_PHYSICS='$me2' AND NOT ENVIRONMENTAL_SCIENCES='$me2' AND NOT ENGI_DRAWING='$me2' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2' AND NOT ENGI_PHYSICS_LAB='$me2' AND NOT LANGUAGE_LAB='$me2' AND NOT OOP_WITH_CPP_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_a=$data['total'];

$tot_section_per_a=($tot_section_a/$tot_student_a)*100;

//sectio-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$sec_b' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_b=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$sec_b' AND BATCH='$batch' AND NOT ENGI_MATHEMATICS_2='$me2' AND NOT ENGI_PHYSICS='$me2' AND NOT ENVIRONMENTAL_SCIENCES='$me2' AND NOT ENGI_DRAWING='$me2' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2' AND NOT ENGI_PHYSICS_LAB='$me2' AND NOT LANGUAGE_LAB='$me2' AND NOT OOP_WITH_CPP_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_b=$data['total'];

$tot_section_per_b=($tot_section_b/$tot_student_b)*100;

//sectio-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$sec_c' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_c=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where SECTION='$sec_c' AND BATCH='$batch' AND NOT ENGI_MATHEMATICS_2='$me2' AND NOT ENGI_PHYSICS='$me2' AND NOT ENVIRONMENTAL_SCIENCES='$me2' AND NOT ENGI_DRAWING='$me2' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2' AND NOT ENGI_PHYSICS_LAB='$me2' AND NOT LANGUAGE_LAB='$me2' AND NOT OOP_WITH_CPP_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_c=$data['total'];

$tot_section_per_c=($tot_section_c/$tot_student_c)*100;


$querys= mysql_query("SELECT * FROM 1_2_table where BATCH='$batch'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
				$accodomic_year=$row['ACCODOMIC_YEAR'];
			
		}

			$temp=(String)$accodomic_year;
			$toyear=substr($temp,-4,+9);
			$from_year=substr($temp,-9,+4);
			$from_year1=$from_year-1;
			$toyear1=$toyear-1;
			$from_year2=$from_year-2;
			$toyear2=$toyear-2;
			$ac_year1="$from_year1-$toyear1";	
			$ac_year2="$from_year2-$toyear2";	

		$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where ACCODOMIC_YEAR='$ac_year1' ");
		$data=mysql_fetch_assoc($result);
		$tot_student1=$data['total'];
		$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where ACCODOMIC_YEAR='$ac_year1'   AND NOT ENGI_MATHEMATICS_2='$me2' AND NOT ENGI_PHYSICS='$me2' AND NOT ENVIRONMENTAL_SCIENCES='$me2' AND NOT ENGI_DRAWING='$me2' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2' AND NOT ENGI_PHYSICS_LAB='$me2' AND NOT LANGUAGE_LAB='$me2' AND NOT OOP_WITH_CPP_LAB='$me2'");
$data=mysql_fetch_assoc($result);
		$tot_section1=$data['total'];

$tot_section_per1=($tot_section1/$tot_student1)*100;

		$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where ACCODOMIC_YEAR='$ac_year2' ");
		$data=mysql_fetch_assoc($result);
		$tot_student2=$data['total'];
		$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where ACCODOMIC_YEAR='$ac_year2'   AND NOT ENGI_MATHEMATICS_2='$me2' AND NOT ENGI_PHYSICS='$me2' AND NOT ENVIRONMENTAL_SCIENCES='$me2' AND NOT ENGI_DRAWING='$me2' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2' AND NOT ENGI_PHYSICS_LAB='$me2' AND NOT LANGUAGE_LAB='$me2' AND NOT OOP_WITH_CPP_LAB='$me2'");
$data=mysql_fetch_assoc($result);
		$tot_section2=$data['total'];

$tot_section_per2=($tot_section2/$tot_student2)*100;



		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch'");
		$data=mysql_fetch_assoc($result);
		$tot_student=$data['total'];
		$result=mysql_query("select count(ROLL_NUMBER) as total from 1_2_table where ACCODOMIC_YEAR='$accodomic_year'  AND BATCH='$batch' AND NOT ENGI_MATHEMATICS_2='$me2' AND NOT ENGI_PHYSICS='$me2' AND NOT ENVIRONMENTAL_SCIENCES='$me2' AND NOT ENGI_DRAWING='$me2' AND NOT ELEMENTS_OF_ELECTRICAL_ENGI='$me2' AND NOT ENGI_PHYSICS_LAB='$me2' AND NOT LANGUAGE_LAB='$me2' AND NOT OOP_WITH_CPP_LAB='$me2'");
$data=mysql_fetch_assoc($result);
		$tot_section=$data['total'];

$tot_section_per=($tot_section/$tot_student)*100;



	}
	else
	{

						?>
		<script>
		window.alert("SOME DATA IS MISSING");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php


	}






$querys= mysql_query("SELECT * FROM faculty_details where BATCH='$batch' AND year1='$year' AND sem='$sem'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
			$dbsection=$row['section'];
			$dbsubject=$row['subject'];
			$faculty_name=$row['name'];
			$dbbatch=$row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];

		if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem && $dbsection==$sec_c && $dbsubject==$sub1)
		{
			$s1_faculty_C=$faculty_name;
			
			if($s1_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p21 WHERE BATCH='$batch' AND year1=$year AND section='$sec_c' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			

		}				
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem && $dbsubject==$sub2)
		{
			$s2_faculty_C=$faculty_name;

	if($s2_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p22 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem  && $dbsubject==$sub3)
		{
			$s3_faculty_C=$faculty_name;
	if($s3_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p23 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub4)
		{
			$s4_faculty_C=$faculty_name;

			if($s4_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p24 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub5)
		{
			$s5_faculty_C=$faculty_name;

			if($s5_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p25 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub6)
		{
			$s6_faculty_C=$faculty_name;
			if($s6_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p26 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub7)
		{
			$s7_faculty_C=$faculty_name;
			if($s7_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p27 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub8)
		{
			$s8_faculty_C=$faculty_name;

		if($s8_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p28 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub1)
		{
			$s1_faculty_A=$faculty_name;


			if($s1_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p1 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub2)
		{
			$s2_faculty_A=$faculty_name;

			if($s2_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p2 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub3)
		{
			$s3_faculty_A=$faculty_name;
			if($s3_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p3 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub4)
		{
			$s4_faculty_A=$faculty_name;
			if($s4_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p4 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub5)
		{
			$s5_faculty_A=$faculty_name;
			if($s5_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p5 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub6)
		{
			$s6_faculty_A=$faculty_name;
			if($s6_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p6 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			





		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub7)
		{
			$s7_faculty_A=$faculty_name;

			if($s7_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p7 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub8)
		{
			$s8_faculty_A=$faculty_name;
			if($s8_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p8 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub1)
		{
			$s1_faculty_B=$faculty_name;
				if($s1_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p11 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub2)
		{
			$s2_faculty_B=$faculty_name;

			if($s2_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p12 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub3)
		{
			$s3_faculty_B=$faculty_name;
			if($s3_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p13 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub4)
		{
			$s4_faculty_B=$faculty_name;

			if($s4_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p14 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			








		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub5)
		{
			$s5_faculty_B=$faculty_name;
				if($s5_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p15 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub6)
		{
			$s6_faculty_B=$faculty_name;
				if($s6_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p16 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub7)
		{
			$s7_faculty_B=$faculty_name;

			if($s7_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p17 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub8)
		{
			$s8_faculty_B=$faculty_name;
			if($s8_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p18 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else
{

}



		}//while loop end

}
else
{
?>
		<script>
		window.alert("NO FACULTY DATA EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php
}





}
else if($year==2 && $sem==1)
{
	$sub1="DATA_STRUCTURES_ALGORITHM";
	$sub2="DIGITAL_LOGICAL_DESIGN";
	$sub3="DMS";
	$sub4="OOPS_WITH_JAVA";
	$sub5="P_S_Q_T";
	$sub6="DATA_STRUCTURES_LAB";
	$sub7="DIGITAL_ELECTRONICS_LAB";	
	$sub8="JAVA_LAB";

//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];
//section-B
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 2_1_table where BATCH='$batch' AND SECTION='$sec_b'");
$data1=mysql_fetch_assoc($result1);
$total2=$data1['total1'];
//section-C
$result2=mysql_query("select count(ROLL_NUMBER) as total2 from 2_1_table where BATCH='$batch' AND SECTION='$sec_c'");
$data2=mysql_fetch_assoc($result2);
$total3=$data2['total2'];


//section-a
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND   NOT DATA_STRUCTURES_ALGORITHM='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$p1=($a1 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DIGITAL_LOGICAL_DESIGN='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$p2=($a2 / $total1)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DMS='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$p3=($a3 / $total1)* 100;
echo "my".$p3.$total1;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT OOPS_WITH_JAVA='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$p4=($a4 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT P_S_Q_T='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$p5=($a5 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DATA_STRUCTURES_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$p6=($a6 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DIGITAL_ELECTRONICS_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];


$p7=($a7 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT JAVA_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$p8=($a8 / $total1)*100;



//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DATA_STRUCTURES_ALGORITHM='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a11=$data['total'];

$p11=($a11 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DIGITAL_LOGICAL_DESIGN='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a12=$data['total'];

$p12=($a12 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND  NOT DMS='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a13=$data['total'];

$p13=($a13 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND  NOT OOPS_WITH_JAVA='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a14=$data['total'];

$p14=($a14 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT P_S_Q_T='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a15=$data['total'];

$p15=($a15 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DATA_STRUCTURES_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a16=$data['total'];

$p16=($a16 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DIGITAL_ELECTRONICS_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a17=$data['total'];


$p17=($a17 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT JAVA_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a18=$data['total'];

$p18=($a18 / $total2)*100;




//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DATA_STRUCTURES_ALGORITHM='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a21=$data['total'];

$p21=(($a21 / $total3) * 100);

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DIGITAL_LOGICAL_DESIGN='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a22=$data['total'];

$p22=($a22 / $total3)*100;

echo "ww".$a22;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DMS='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a23=$data['total'];

$p23=($a23 / $total3)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT OOPS_WITH_JAVA='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a24=$data['total'];

$p24=($a24 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT P_S_Q_T='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a25=$data['total'];

$p25=($a25 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND  NOT DATA_STRUCTURES_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a26=$data['total'];

$p26=($a26 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT DIGITAL_ELECTRONICS_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a27=$data['total'];


$p27=($a27 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where BATCH='$batch' AND NOT JAVA_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a28=$data['total'];

$p28=($a28 / $total3)*100;

//SECTION-A
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 2_1_table where SECTION='$sec_a' AND BATCH='$batch'");
$data1=mysql_fetch_assoc($result1);
$tot_student_a=$data1['total1'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$sec_a' AND BATCH='$batch' AND NOT DATA_STRUCTURES_ALGORITHM='$me2' AND NOT DIGITAL_LOGICAL_DESIGN='$me2' AND NOT DMS='$me2' AND NOT OOPS_WITH_JAVA='$me2' AND NOT P_S_Q_T='$me2' AND NOT DATA_STRUCTURES_LAB='$me2' AND NOT DIGITAL_ELECTRONICS_LAB='$me2' AND NOT JAVA_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_a=$data['total'];

$tot_section_per_a=($tot_section_a/$tot_student_a)*100;

//SECTION-B
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 2_1_table where SECTION='$sec_b' AND BATCH='$batch'");
$data1=mysql_fetch_assoc($result1);
$tot_student_b=$data1['total1'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$sec_b' AND BATCH='$batch' AND NOT DATA_STRUCTURES_ALGORITHM='$me2' AND NOT DIGITAL_LOGICAL_DESIGN='$me2' AND NOT DMS='$me2' AND NOT OOPS_WITH_JAVA='$me2' AND NOT P_S_Q_T='$me2' AND NOT DATA_STRUCTURES_LAB='$me2' AND NOT DIGITAL_ELECTRONICS_LAB='$me2' AND NOT JAVA_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_b=$data['total'];

$tot_section_per_b=($tot_section_b/$tot_student_b)*100;

//SECTION-C
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 2_1_table where SECTION='$sec_c' AND BATCH='$batch'");
$data1=mysql_fetch_assoc($result1);
$tot_student_c=$data1['total1'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where SECTION='$sec_c' AND BATCH='$batch' AND NOT DATA_STRUCTURES_ALGORITHM='$me2' AND NOT DIGITAL_LOGICAL_DESIGN='$me2' AND NOT DMS='$me2' AND NOT OOPS_WITH_JAVA='$me2' AND NOT P_S_Q_T='$me2' AND NOT DATA_STRUCTURES_LAB='$me2' AND NOT DIGITAL_ELECTRONICS_LAB='$me2' AND NOT JAVA_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_c=$data['total'];

$tot_section_per_c=($tot_section_c/$tot_student_c)*100;


$querys= mysql_query("SELECT * FROM 2_1_table where BATCH='$batch'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
				$accodomic_year=$row['ACCODOMIC_YEAR'];
			
		}
	
		$temp=(String)$accodomic_year;
			$toyear=substr($temp,-4,+9);
			$from_year=substr($temp,-9,+4);
			$from_year1=$from_year-1;
			$toyear1=$toyear-1;
			$from_year2=$from_year-2;
			$toyear2=$toyear-2;
			$ac_year1="$from_year1-$toyear1";	
			$ac_year2="$from_year2-$toyear2";	
	

		$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where ACCODOMIC_YEAR='$ac_year1' ");
		$data=mysql_fetch_assoc($result);
		$tot_student1=$data['total'];
		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where ACCODOMIC_YEAR='$ac_year1'  AND NOT DATA_STRUCTURES_ALGORITHM='$me2' AND NOT DIGITAL_LOGICAL_DESIGN='$me2' AND NOT DMS='$me2' AND NOT OOPS_WITH_JAVA='$me2' AND NOT P_S_Q_T='$me2' AND NOT DATA_STRUCTURES_LAB='$me2' AND NOT DIGITAL_ELECTRONICS_LAB='$me2' AND NOT JAVA_LAB='$me2'");
$data=mysql_fetch_assoc($result);
		$tot_section1=$data['total'];

$tot_section_per1=($tot_section1/$tot_student1)*100;


		$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where ACCODOMIC_YEAR='$ac_year2' ");
		$data=mysql_fetch_assoc($result);
		$tot_student2=$data['total'];
		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where ACCODOMIC_YEAR='$ac_year2'  AND NOT DATA_STRUCTURES_ALGORITHM='$me2' AND NOT DIGITAL_LOGICAL_DESIGN='$me2' AND NOT DMS='$me2' AND NOT OOPS_WITH_JAVA='$me2' AND NOT P_S_Q_T='$me2' AND NOT DATA_STRUCTURES_LAB='$me2' AND NOT DIGITAL_ELECTRONICS_LAB='$me2' AND NOT JAVA_LAB='$me2'");
$data=mysql_fetch_assoc($result);
		$tot_section2=$data['total'];

$tot_section_per2=($tot_section2/$tot_student2)*100;



		$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch'");
		$data=mysql_fetch_assoc($result);
		$tot_student=$data['total'];
		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 2_1_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch' AND NOT DATA_STRUCTURES_ALGORITHM='$me2' AND NOT DIGITAL_LOGICAL_DESIGN='$me2' AND NOT DMS='$me2' AND NOT OOPS_WITH_JAVA='$me2' AND NOT P_S_Q_T='$me2' AND NOT DATA_STRUCTURES_LAB='$me2' AND NOT DIGITAL_ELECTRONICS_LAB='$me2' AND NOT JAVA_LAB='$me2'");
$data=mysql_fetch_assoc($result);
		$tot_section=$data['total'];

$tot_section_per=($tot_section/$tot_student)*100;



	}
	else
	{

						?>
		<script>
		window.alert("SOME DATA IS MISSING");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php


	}







$querys= mysql_query("SELECT * FROM faculty_details where BATCH='$batch' AND year1='$year' AND sem='$sem'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
			$dbsection=$row['section'];
			$dbsubject=$row['subject'];
			$faculty_name=$row['name'];
			$dbbatch=$row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];

		if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem && $dbsection==$sec_c && $dbsubject==$sub1)
		{
			$s1_faculty_C=$faculty_name;
			
			if($s1_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p21 WHERE BATCH='$batch' AND year1=$year AND section='$sec_c' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			

		}				
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem && $dbsubject==$sub2)
		{
			$s2_faculty_C=$faculty_name;

	if($s2_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p22 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem  && $dbsubject==$sub3)
		{
			$s3_faculty_C=$faculty_name;
	if($s3_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p23 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub4)
		{
			$s4_faculty_C=$faculty_name;

			if($s4_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p24 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub5)
		{
			$s5_faculty_C=$faculty_name;

			if($s5_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p25 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub6)
		{
			$s6_faculty_C=$faculty_name;
			if($s6_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p26 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub7)
		{
			$s7_faculty_C=$faculty_name;
			if($s7_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p27 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub8)
		{
			$s8_faculty_C=$faculty_name;

		if($s8_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p28 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub1)
		{
			$s1_faculty_A=$faculty_name;


			if($s1_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p1 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub2)
		{
			$s2_faculty_A=$faculty_name;

			if($s2_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p2 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub3)
		{
			$s3_faculty_A=$faculty_name;
			if($s3_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p3 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub4)
		{
			$s4_faculty_A=$faculty_name;
			if($s4_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p4 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub5)
		{
			$s5_faculty_A=$faculty_name;
			if($s5_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p5 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub6)
		{
			$s6_faculty_A=$faculty_name;
			if($s6_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p6 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			





		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub7)
		{
			$s7_faculty_A=$faculty_name;

			if($s7_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p7 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub8)
		{
			$s8_faculty_A=$faculty_name;
			if($s8_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p8 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub1)
		{
			$s1_faculty_B=$faculty_name;
				if($s1_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p11 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub2)
		{
			$s2_faculty_B=$faculty_name;

			if($s2_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p12 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub3)
		{
			$s3_faculty_B=$faculty_name;
			if($s3_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p13 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub4)
		{
			$s4_faculty_B=$faculty_name;

			if($s4_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p14 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			








		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub5)
		{
			$s5_faculty_B=$faculty_name;
				if($s5_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p15 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub6)
		{
			$s6_faculty_B=$faculty_name;
				if($s6_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p16 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub7)
		{
			$s7_faculty_B=$faculty_name;

			if($s7_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p17 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub8)
		{
			$s8_faculty_B=$faculty_name;
			if($s8_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p18 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else
{

}



		}//while loop end

}
else
{
?>
		<script>
		window.alert("NO FACULTY DATA EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php
}





}
else if($year==2 && $sem==2)
{
		$sub1="DATA_COMMUNICATION";
	$sub2="MICROPROCESSOR_INTERFACING";
	$sub3="OPERATING_SYSTEMS";
	$sub4="COMPUTER_ORGANIZATION";
	$sub5="FLAT";
	$sub6="MP_LAB";
	$sub7="OPERATING_SYSTEM_LAB";	
	$sub8="HARDWARE_LAB";

//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];
//section-B
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 2_2_table where BATCH='$batch' AND SECTION='$sec_b'");
$data1=mysql_fetch_assoc($result1);
$total2=$data1['total1'];
//section-C
$result2=mysql_query("select count(ROLL_NUMBER) as total2 from 2_2_table where BATCH='$batch' AND SECTION='$sec_c'");
$data2=mysql_fetch_assoc($result2);
$total3=$data2['total2'];


//section-a
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND   NOT DATA_COMMUNICATION='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$p1=($a1 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT MICROPROCESSOR_INTERFACING='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$p2=($a2 / $total1)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT OPERATING_SYSTEMS='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$p3=($a3 / $total1)* 100;
echo "my".$p3.$total1;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT COMPUTER_ORGANIZATION='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a4=$data['total'];

$p4=($a4 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT FLAT='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a5=$data['total'];

$p5=($a5 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT MP_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a6=$data['total'];

$p6=($a6 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT OPERATING_SYSTEM_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a7=$data['total'];


$p7=($a7 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT HARDWARE_LAB='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a8=$data['total'];

$p8=($a8 / $total1)*100;



//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT DATA_COMMUNICATION='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a11=$data['total'];

$p11=($a11 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT MICROPROCESSOR_INTERFACING='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a12=$data['total'];

$p12=($a12 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND  NOT OPERATING_SYSTEMS='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a13=$data['total'];

$p13=($a13 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND  NOT COMPUTER_ORGANIZATION='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a14=$data['total'];

$p14=($a14 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT FLAT='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a15=$data['total'];

$p15=($a15 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT MP_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a16=$data['total'];

$p16=($a16 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT OPERATING_SYSTEM_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a17=$data['total'];


$p17=($a17 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT HARDWARE_LAB='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a18=$data['total'];

$p18=($a18 / $total2)*100;




//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT DATA_COMMUNICATION='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a21=$data['total'];

$p21=(($a21 / $total3) * 100);

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT MICROPROCESSOR_INTERFACING='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a22=$data['total'];

$p22=($a22 / $total3)*100;

echo "ww".$a22;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT OPERATING_SYSTEMS='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a23=$data['total'];

$p23=($a23 / $total3)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT COMPUTER_ORGANIZATION='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a24=$data['total'];

$p24=($a24 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT FLAT='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a25=$data['total'];

$p25=($a25 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND  NOT MP_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a26=$data['total'];

$p26=($a26 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT OPERATING_SYSTEM_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a27=$data['total'];


$p27=($a27 / $total3)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where BATCH='$batch' AND NOT HARDWARE_LAB='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a28=$data['total'];

$p28=($a28 / $total3)*100;
//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$sec_a' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_a=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$sec_a' AND BATCH='$batch' AND NOT DATA_COMMUNICATION='$me2' AND NOT MICROPROCESSOR_INTERFACING='$me2' AND NOT OPERATING_SYSTEMS='$me2' AND NOT COMPUTER_ORGANIZATION='$me2' AND NOT FLAT='$me2' AND NOT MP_LAB='$me2' AND NOT OPERATING_SYSTEM_LAB='$me2' AND NOT HARDWARE_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_a=$data['total'];

$tot_section_per_a=($tot_section_a/$tot_student_a)*100;


//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$sec_b' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_b=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$sec_b' AND BATCH='$batch' AND NOT DATA_COMMUNICATION='$me2' AND NOT MICROPROCESSOR_INTERFACING='$me2' AND NOT OPERATING_SYSTEMS='$me2' AND NOT COMPUTER_ORGANIZATION='$me2' AND NOT FLAT='$me2' AND NOT MP_LAB='$me2' AND NOT OPERATING_SYSTEM_LAB='$me2' AND NOT HARDWARE_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_b=$data['total'];

$tot_section_per_b=($tot_section_b/$tot_student_b)*100;
//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$sec_c' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_c=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where SECTION='$sec_c' AND BATCH='$batch' AND NOT DATA_COMMUNICATION='$me2' AND NOT MICROPROCESSOR_INTERFACING='$me2' AND NOT OPERATING_SYSTEMS='$me2' AND NOT COMPUTER_ORGANIZATION='$me2' AND NOT FLAT='$me2' AND NOT MP_LAB='$me2' AND NOT OPERATING_SYSTEM_LAB='$me2' AND NOT HARDWARE_LAB='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_c=$data['total'];

$tot_section_per_c=($tot_section_c/$tot_student_c)*100;

$querys= mysql_query("SELECT * FROM 2_2_table where BATCH='$batch'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
				$accodomic_year=$row['ACCODOMIC_YEAR'];
			
		}

					$temp=(String)$accodomic_year;
			$toyear=substr($temp,-4,+9);
			$from_year=substr($temp,-9,+4);
			$from_year1=$from_year-1;
			$toyear1=$toyear-1;
			$from_year2=$from_year-2;
			$toyear2=$toyear-2;
			$ac_year1="$from_year1-$toyear1";	
			$ac_year2="$from_year2-$toyear2";	


				$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where ACCODOMIC_YEAR='$ac_year1' ");
		$data=mysql_fetch_assoc($result);
		$tot_student1=$data['total'];
		
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where ACCODOMIC_YEAR='$ac_year1'  AND NOT DATA_COMMUNICATION='$me2' AND NOT MICROPROCESSOR_INTERFACING='$me2' AND NOT OPERATING_SYSTEMS='$me2' AND NOT COMPUTER_ORGANIZATION='$me2' AND NOT FLAT='$me2' AND NOT MP_LAB='$me2' AND NOT OPERATING_SYSTEM_LAB='$me2' AND NOT HARDWARE_LAB='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section1=$data['total'];

$tot_section_per1=($tot_section1/$tot_student1)*100;


				$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where ACCODOMIC_YEAR='$ac_year2' ");
		$data=mysql_fetch_assoc($result);
		$tot_student2=$data['total'];
		
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where ACCODOMIC_YEAR='$ac_year2'  AND NOT DATA_COMMUNICATION='$me2' AND NOT MICROPROCESSOR_INTERFACING='$me2' AND NOT OPERATING_SYSTEMS='$me2' AND NOT COMPUTER_ORGANIZATION='$me2' AND NOT FLAT='$me2' AND NOT MP_LAB='$me2' AND NOT OPERATING_SYSTEM_LAB='$me2' AND NOT HARDWARE_LAB='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section2=$data['total'];

$tot_section_per2=($tot_section2/$tot_student2)*100;



		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch'");
		$data=mysql_fetch_assoc($result);
		$tot_student=$data['total'];
		
$result=mysql_query("select count(ROLL_NUMBER) as total from 2_2_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch' AND NOT DATA_COMMUNICATION='$me2' AND NOT MICROPROCESSOR_INTERFACING='$me2' AND NOT OPERATING_SYSTEMS='$me2' AND NOT COMPUTER_ORGANIZATION='$me2' AND NOT FLAT='$me2' AND NOT MP_LAB='$me2' AND NOT OPERATING_SYSTEM_LAB='$me2' AND NOT HARDWARE_LAB='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section=$data['total'];

$tot_section_per=($tot_section/$tot_student)*100;



	}
	else
	{

						?>
		<script>
		window.alert("SOME DATA IS MISSING");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php


	}











$querys= mysql_query("SELECT * FROM faculty_details where BATCH='$batch' AND year1='$year' AND sem='$sem'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
			$dbsection=$row['section'];
			$dbsubject=$row['subject'];
			$faculty_name=$row['name'];
			$dbbatch=$row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];

		if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem && $dbsection==$sec_c && $dbsubject==$sub1)
		{
			$s1_faculty_C=$faculty_name;
			
			if($s1_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p21 WHERE BATCH='$batch' AND year1=$year AND section='$sec_c' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			

		}				
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem && $dbsubject==$sub2)
		{
			$s2_faculty_C=$faculty_name;

	if($s2_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p22 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem  && $dbsubject==$sub3)
		{
			$s3_faculty_C=$faculty_name;
	if($s3_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p23 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub4)
		{
			$s4_faculty_C=$faculty_name;

			if($s4_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p24 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub5)
		{
			$s5_faculty_C=$faculty_name;

			if($s5_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p25 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub6)
		{
			$s6_faculty_C=$faculty_name;
			if($s6_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p26 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub7)
		{
			$s7_faculty_C=$faculty_name;
			if($s7_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p27 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_c && $dbsubject==$sub8)
		{
			$s8_faculty_C=$faculty_name;

		if($s8_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p28 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub1)
		{
			$s1_faculty_A=$faculty_name;


			if($s1_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p1 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub2)
		{
			$s2_faculty_A=$faculty_name;

			if($s2_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p2 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub3)
		{
			$s3_faculty_A=$faculty_name;
			if($s3_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p3 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub4)
		{
			$s4_faculty_A=$faculty_name;
			if($s4_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p4 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub5)
		{
			$s5_faculty_A=$faculty_name;
			if($s5_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p5 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub6)
		{
			$s6_faculty_A=$faculty_name;
			if($s6_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p6 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			





		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub7)
		{
			$s7_faculty_A=$faculty_name;

			if($s7_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p7 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub8)
		{
			$s8_faculty_A=$faculty_name;
			if($s8_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p8 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub1)
		{
			$s1_faculty_B=$faculty_name;
				if($s1_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p11 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub2)
		{
			$s2_faculty_B=$faculty_name;

			if($s2_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p12 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub3)
		{
			$s3_faculty_B=$faculty_name;
			if($s3_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p13 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub4)
		{
			$s4_faculty_B=$faculty_name;

			if($s4_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p14 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub4' AND name='$s4_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			








		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub5)
		{
			$s5_faculty_B=$faculty_name;
				if($s5_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p15 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub5' AND name='$s5_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub6)
		{
			$s6_faculty_B=$faculty_name;
				if($s6_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p16 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub6' AND name='$s6_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			







		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub7)
		{
			$s7_faculty_B=$faculty_name;

			if($s7_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p17 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub7' AND name='$s7_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub8)
		{
			$s8_faculty_B=$faculty_name;
			if($s8_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p18 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub8' AND name='$s8_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			






		}
else
{

}



		}//while loop end

}
else
{
?>
		<script>
		window.alert("NO FACULTY DATA EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php
}





}
else if($year==4 && $sem==2)
{
	$sub1="PROFEESIONAL_ELECTIVE_4";
$sub2="PROFESSIONAL_ELECTIVE_5";
$sub3="PROJECT_2";

//section-A
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];
//section-B
$result1=mysql_query("select count(ROLL_NUMBER) as total1 from 4_2_table where BATCH='$batch' AND SECTION='$sec_b'");
$data1=mysql_fetch_assoc($result1);
$total2=$data1['total1'];
//section-C
$result2=mysql_query("select count(ROLL_NUMBER) as total2 from 4_2_table where BATCH='$batch' AND SECTION='$sec_c'");
$data2=mysql_fetch_assoc($result2);
$total3=$data2['total2'];


//section-a
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND   NOT PROFEESIONAL_ELECTIVE_4='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$p1=($a1 / $total1)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND NOT PROFESSIONAL_ELECTIVE_5='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$p2=($a2 / $total1)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND NOT PROJECT_2='$me2' AND SECTION='$sec_a'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$p3=($a3 / $total1)* 100;
echo "my".$p3.$total1;
//section-B
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND NOT PROFEESIONAL_ELECTIVE_4='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a11=$data['total'];

$p11=($a11 / $total2)*100;

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND NOT PROFESSIONAL_ELECTIVE_5='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a12=$data['total'];

$p12=($a12 / $total2)*100;
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND  NOT PROJECT_2='$me2' AND SECTION='$sec_b'");
$data=mysql_fetch_assoc($result);
$a13=$data['total'];

$p13=($a13 / $total2)*100;
//section-C
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND NOT PROFEESIONAL_ELECTIVE_4='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a21=$data['total'];

$p21=(($a21 / $total3) * 100);

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND NOT PROFESSIONAL_ELECTIVE_5='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a22=$data['total'];

$p22=($a22 / $total3)*100;

echo "ww".$a22;
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where BATCH='$batch' AND NOT PROJECT_2='$me2' AND SECTION='$sec_c'");
$data=mysql_fetch_assoc($result);
$a23=$data['total'];

$p23=($a23 / $total3)*100;
//section A
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$sec_a' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_a=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$sec_a' AND BATCH='$batch' AND NOT PROFEESIONAL_ELECTIVE_4='$me2' AND NOT PROFESSIONAL_ELECTIVE_5='$me2' AND NOT PROJECT_2='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_a=$data['total'];
$tot_section_per_a=($tot_section_a/$tot_student_a)*100;

//section B
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$sec_b' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_b=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$sec_b' AND BATCH='$batch' AND NOT PROFEESIONAL_ELECTIVE_4='$me2' AND NOT PROFESSIONAL_ELECTIVE_5='$me2' AND NOT PROJECT_2='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_b=$data['total'];
$tot_section_per_b=($tot_section_b/$tot_student_b)*100;

//section C
$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$sec_c' AND BATCH='$batch'");
$data=mysql_fetch_assoc($result);
$tot_student_c=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$sec_c' AND BATCH='$batch' AND NOT PROFEESIONAL_ELECTIVE_4='$me2' AND NOT PROFESSIONAL_ELECTIVE_5='$me2' AND NOT PROJECT_2='$me2'");
$data=mysql_fetch_assoc($result);
$tot_section_c=$data['total'];
$tot_section_per_c=($tot_section_c/$tot_student_c)*100;

$querys= mysql_query("SELECT * FROM 4_2_table where BATCH='$batch'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
				$accodomic_year=$row['ACCODOMIC_YEAR'];
			
		}

			
					$temp=(String)$accodomic_year;
			$toyear=substr($temp,-4,+9);
			$from_year=substr($temp,-9,+4);
			$from_year1=$from_year-1;
			$toyear1=$toyear-1;
			$from_year2=$from_year-2;
			$toyear2=$toyear-2;
			$ac_year1="$from_year1-$toyear1";	
			$ac_year2="$from_year2-$toyear2";	

		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where ACCODOMIC_YEAR='$ac_year1' ");
		$data=mysql_fetch_assoc($result);
		$tot_student1=$data['total'];
		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where ACCODOMIC_YEAR='$ac_year1'   AND NOT PROFEESIONAL_ELECTIVE_4='$me2' AND NOT PROFESSIONAL_ELECTIVE_5='$me2' AND NOT PROJECT_2='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section1=$data['total'];

$tot_section_per1=($tot_section1/$tot_student1)*100;


		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where ACCODOMIC_YEAR='$ac_year2' ");
		$data=mysql_fetch_assoc($result);
		$tot_student2=$data['total'];
		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where ACCODOMIC_YEAR='$ac_year2'   AND NOT PROFEESIONAL_ELECTIVE_4='$me2' AND NOT PROFESSIONAL_ELECTIVE_5='$me2' AND NOT PROJECT_2='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section2=$data['total'];

$tot_section_per2=($tot_section2/$tot_student2)*100;

		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where ACCODOMIC_YEAR='$accodomic_year' AND BATCH='$batch'");
		$data=mysql_fetch_assoc($result);
		$tot_student=$data['total'];
		
		$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where ACCODOMIC_YEAR='$accodomic_year'  AND BATCH='$batch' AND NOT PROFEESIONAL_ELECTIVE_4='$me2' AND NOT PROFESSIONAL_ELECTIVE_5='$me2' AND NOT PROJECT_2='$me2'");
		$data=mysql_fetch_assoc($result);
		$tot_section=$data['total'];

$tot_section_per=($tot_section/$tot_student)*100;



	}
	else
	{

						?>
		<script>
		window.alert("SOME DATA IS MISSING");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php


	}



$querys= mysql_query("SELECT * FROM faculty_details where BATCH='$batch' AND year1='$year' AND sem='$sem'") ;
	$numrows=mysql_num_rows($querys);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($querys))
		{
			$dbsection=$row['section'];
			$dbsubject=$row['subject'];
			$faculty_name=$row['name'];
			$dbbatch=$row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];

		if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem && $dbsection==$sec_c && $dbsubject==$sub1)
		{
			$s1_faculty_C=$faculty_name;
			
			if($s1_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p21 WHERE BATCH='$batch' AND year1=$year AND section='$sec_c' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			

		}				
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem && $dbsubject==$sub2)
		{
			$s2_faculty_C=$faculty_name;

	if($s2_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p22 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsection==$sec_c && $dbsem==$sem  && $dbsubject==$sub3)
		{
			$s3_faculty_C=$faculty_name;
	if($s3_faculty_C!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p23 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_c' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_C' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub1)
		{
			$s1_faculty_A=$faculty_name;


			if($s1_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p1 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub2)
		{
			$s2_faculty_A=$faculty_name;

			if($s2_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p2 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			


		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_a && $dbsubject==$sub3)
		{
			$s3_faculty_A=$faculty_name;
			if($s3_faculty_A!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p3 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_a' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_A' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub1)
		{
			$s1_faculty_B=$faculty_name;
				if($s1_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p11 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub1' AND name='$s1_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			



		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub2)
		{
			$s2_faculty_B=$faculty_name;

			if($s2_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p12 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub2' AND name='$s2_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else if($dbbatch==$batch && $dbyear==$year && $dbsem==$sem   && $dbsection==$sec_b && $dbsubject==$sub3)
		{
			$s3_faculty_B=$faculty_name;
			if($s3_faculty_B!=$space)
			{
			 mysql_query("UPDATE faculty_details SET pass_percentage=$p13 WHERE BATCH='$batch' AND year1=$year  AND section='$sec_b' AND sem=$sem AND subject='$sub3' AND name='$s3_faculty_B' ") or die("120121");
			
			}
			else
			{
				?>
		<script>
		window.alert("FACULTY DATA Not EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php

			}			




		}
else
{

}



		}//while loop end

}
else
{
?>
		<script>
		window.alert("NO FACULTY DATA EXIST");
		window.location.href="Student_data_to_check_batch.html";
		</script>
<?php
}





}
else
{

}
echo "";


$date1=date("d-m-Y");
?>
<br>
<center>
	<font size=05 color="blue"><u> <?php echo $year;?>/4(CSE A,B&C)SEM-<?php echo $sem;?> RESULT ANALYSIS (<?php echo $accodomic_year;?>)</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date:<?php echo $date1;?></font>
	<br><br>
	<table border="1" style="height:40;width:60;">
	<tr>
	<th> SUBJECT NAME </th>
	<th colspan="3"> SECTION-A (<?php echo $tot_student_a;?>)</th>
	<th colspan="3"> SECTION-B (<?php echo $tot_student_b;?>)</th>
	<th colspan="3"> SECTION-C (<?php echo $tot_student_c;?>)</th>
	</tr>
<tr>
	<th></th>
	<th>Faculty_name_A</th>
	<th>PASS</th>
	<th>PASS%</th>
<th>FACULTY_NAME_B</th>
<th>PASS</th>
<th>PASS%</th>
<th>FACULTY_NAME_C</th>
<th>PASS</th>
<th>PASS%</th>

</tr>

<tr>
	<th><?php echo $sub1;?></th>
	<td><?php echo $s1_faculty_A;?></td>
	<td><?php echo $a1;?></td>
	<td><?php echo $p1;?></td>
	<td><?php echo $s1_faculty_B;?></td>
	<td><?php echo $a11;?></td>
	<td><?php echo $p11;?></td>
	<td><?php echo $s1_faculty_C;?></td>
	<td><?php echo $a21;?></td>
	<td><?php echo $p21;?></td>
</tr>
<tr>
	<th><?php echo $sub2;?></th>
	<td><?php echo $s2_faculty_A;?></td>
	<td><?php echo $a2;?></td>
	<td><?php echo $p2;?></td>
	<td><?php echo $s2_faculty_B;?></td>
	<td><?php echo $a12;?></td>
	<td><?php echo $p12;?></td>
	<td><?php echo $s2_faculty_C;?></td>
	<td><?php echo $a22;?></td>
	<td><?php echo $p22;?></td>
</tr>

<tr>
	<th><?php echo $sub3;?></th>
	<td><?php echo $s3_faculty_A;?></td>
	<td><?php echo $a3;?></td>
	<td><?php echo $p3;?></td>
	<td><?php echo $s3_faculty_B;?></td>
	<td><?php echo $a13;?></td>
	<td><?php echo $p13;?></td>
	<td><?php echo $s3_faculty_C;?></td>
	<td><?php echo $a23;?></td>
	<td><?php echo $p23;?></td>
</tr>

<tr>
	<th><?php echo $sub4;?></th>
	<td><?php echo $s4_faculty_A;?></td>
	<td><?php echo $a4;?></td>
	<td><?php echo $p4;?></td>
	<td><?php echo $s4_faculty_B;?></td>
	<td><?php echo $a14;?></td>
	<td><?php echo $p14;?></td>
	<td><?php echo $s4_faculty_C;?></td>
	<td><?php echo $a24;?></td>
	<td><?php echo $p24;?></td>
</tr>

<tr>
	<th><?php echo $sub5;?></th>
	<td><?php echo $s5_faculty_A;?></td>
	<td><?php echo $a5;?></td>
	<td><?php echo $p5;?></td>
	<td><?php echo $s5_faculty_B;?></td>
	<td><?php echo $a15;?></td>
	<td><?php echo $p15;?></td>
	<td><?php echo $s5_faculty_C;?></td>
	<td><?php echo $a25;?></td>
	<td><?php echo $p25;?></td>
</tr>

<tr>
	<td><?php echo $sub6;?></th>
	<td><?php echo $s6_faculty_A;?></td>
	<td><?php echo $a6;?></td>
	<td><?php echo $p6;?></td>
	<td><?php echo $s6_faculty_B;?></td>
	<td><?php echo $a16;?></td>
	<td><?php echo $p16;?></td>
	<td><?php echo $s6_faculty_C;?></td>
	<td><?php echo $a26;?></td>
	<td><?php echo $p26;?></td>
</tr>

<tr>
	<th><?php echo $sub7;?></th>
	<td><?php echo $s7_faculty_A;?></td>
	<td><?php echo $a7;?></td>
	<td><?php echo $p7;?></td>
	<td><?php echo $s7_faculty_B;?></td>
	<td><?php echo $a17;?></td>
	<td><?php echo $p17;?></td>
	<td><?php echo $s7_faculty_C;?></td>
	<td><?php echo $a27;?></td>
	<td><?php echo $p27;?></td>
</tr>

<tr>
	<th><?php echo $sub8;?></th>
	<td><?php echo $s8_faculty_A;?></td>
	<td><?php echo $a8;?></td>
	<td><?php echo $p8;?></td>
	<td><?php echo $s8_faculty_B;?></td>
	<td><?php echo $a18;?></td>
	<td><?php echo $p18;?></td>
	<td><?php echo $s8_faculty_C;?></td>
	<td><?php echo $a28;?></td>
	<td><?php echo $p28;?></td>
</tr>

<tr>
	<th><?php echo $sub9;?></th>
	<td><?php echo $s9_faculty_A;?></td>
	<td><?php echo $a9;?></td>
	<td><?php echo $p9;?></td>
	<td><?php echo $s9_faculty_B;?></td>
	<td><?php echo $a19;?></td>
	<td><?php echo $p19;?></td>
	<td><?php echo $s9_faculty_C;?></td>
	<td><?php echo $a29;?></td>
	<td><?php echo $p29;?></td>
</tr>

</table>
</center>
<font size=05 face="Baskerville Old Face">
<pre>Section-A PASS : <?php echo $tot_section_a;?>/<?php echo $tot_student_a;?>=<?php echo $tot_section_per_a;?>				Section-B PASS : <?php echo $tot_section_b;?>/<?php echo $tot_student_b;?>=<?php echo $tot_section_per_b;?>                          Section-C PASS : <?php echo $tot_section_c;?>/<?php echo $tot_student_c;?>=<?php echo $tot_section_per_c;?></font></pre>

<font size=04 color="blue"><p>TOTAL NO.OF STUDENTS IN <?php echo $year;?>-<?php echo $sem;?> SEMESTER(<?php echo $accodomic_year;?>) (WHOLE PASS : <?php echo $tot_section;?>/<?php echo $tot_student;?>=<?php echo $tot_section_per;?>)</font> 
<font size=04 color="red"><p>TOTAL NO.OF STUDENTS IN <?php echo $year;?>-<?php echo $sem;?> SEMESTER(<?php echo $ac_year1;?>) (WHOLE PASS : <?php echo $tot_section1;?>/<?php echo $tot_student1;?>=<?php echo $tot_section_per1;?>)</font> 
<font size=04 color="black"><p>TOTAL NO.OF STUDENTS IN <?php echo $year;?>-<?php echo $sem;?> SEMESTER(<?php echo $ac_year2;?>) (WHOLE PASS : <?php echo $tot_section2;?>/<?php echo $tot_student2;?>=<?php echo $tot_section_per2;?>)</font> 
<br><br><br><br><br><br>
<font size=04 face="Baskerville Old Face">
<pre><b>G.PRANITHA																					Dr. R.Sivaranjani
Result Analysis in charge																			HOD,CSE</b></pre>
</div>
				</div>
			</section>

		<!-- Footer -->
					<footer id="footer">
				<div class="inner">
					<div class="content">
					<pre><center><font size=04 color="white">           	©Copyrights ANITS 2018-2019 All Rights Reserved. Designed & Developed By <br>     3/4 "  " TEAM  DEPARTMENT OF CSE</font></center></pre>						
					</div>
					<div class="copyright">
					<font size=06 color="white">ANITS</font>
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