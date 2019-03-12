<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
echo "connected";
//mysql_query("create database sem_project") ;
echo"database created ";
mysql_select_db("sem_project") or die("not selected");
$sub1="";
$sub2="";
$sub3="";

$year1=$_SESSION['year11'];
$sem1=$_SESSION['sem11'];
$rollnumber=$_SESSION['rollnumber11'];
$BATCH=$_POST['batch'];
$hey=1;
$check=0;
$detained="N";
$ACCODOMIC_YEAR=$_POST['ayear'];
$d2=$_POST['rollnumber'];
$SECTION=$_POST['section'];
$SUBJECT=$_POST['subject'];
$GRADE=$_POST['grade'];
$sgpa=$_POST['sgpa'];
$cgpa=$_POST['cgpa'];
$MONTH_OF_PASS=$_POST['date'];
$attendece=$_POST['attendence'];
$NOBACK=$_SESSION['back'];
if($attendece<65)
{
	$detained="Y";
}

$dbuid="";
$sub21="PROFEESIONAL_ELECTIVE_4";
$sub22="PROFESSIONAL_ELECTIVE_5";
$sub23="PROJECT_2";
$count=0;

$k=0;
$checks1="0000-0000";
$checks2="0";
$checks3="0001-01-01";
$checked=0;

$query= mysql_query("SELECT ROLL_NUMBER FROM 4_2_table") ;
		while($row=mysql_fetch_array($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$check=1;
			}
			echo $dbuid.$d2."\n";
		}


$query= mysql_query("SELECT * FROM 4_2_table where ROLL_NUMBER='$rollnumber' ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			$sub1=$row['PROFEESIONAL_ELECTIVE_4'];
			$sub2=$row['PROFESSIONAL_ELECTIVE_5'];
			$sub3=$row['PROJECT_2'];
			$dbbatch=$row['BATCH'];
			$dbacademic_year=$row['ACCODOMIC_YEAR'];
			$dbsection=$row['SECTION'];
			$dbsgpa=$row['SGPA'];
			$dbcgpa=$row['CGPA'];
			$dbpass_date=$row['PASS_DATE'];
			$dbattendence=$row['ATTENDENCE'];
			$count=$row['NUMBER_OF_ATTEMPTS'];
			
		}


if($BATCH==$checks1)
{
		$BATCH=$dbbatch;

}
$k=232;
 if($ACCODOMIC_YEAR==$checks1)
{
		$ACCODOMIC_YEAR=$dbacademic_year;

}
$k=232;
 if($SECTION==$checks2)
{
		$SECTION=$dbsection;

}
$k=232;
 if($sgpa==$checks2)
{
		$sgpa=$dbsgpa;

}
$k=232;
 if($cgpa==$checks2)
{
		$cgpa=$dbcgpa;

}
$k=232;
 if($MONTH_OF_PASS==$checks3)
{
		$MONTH_OF_PASS=$dbpass_date;

}
$k=232;
 if($attendece==$checks2)
{
		$attendece=$dbattendence;

}
$k=232;
 if($d2==$checks2)
{
		$d2=$dbuid;

}


$k=232;	
if($SUBJECT==$sub21)
	{
		$sub1=$GRADE;
		
	}
else if($SUBJECT==$sub22)
	{
		$sub2=$GRADE;
	}
else if($SUBJECT==$sub23)
	{
		$sub3=$GRADE;
	}






$k=1231;
if($NOBACK!=0)
{
	$hey=$hey+1;
}





$k=6545;
if($check==1)
{
mysql_query("UPDATE 4_2_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',SECTION='$SECTION',PROFEESIONAL_ELECTIVE_4='$sub1',PROFESSIONAL_ELECTIVE_5='$sub2',PROJECT_2='$sub3',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
?>
		<script>
      alert("STUDENT DATA UPDATED");
      window.location.href="Student_data_to_update.html";
    </script>
<?php
}
else if($check!=1)
{
mysql_query("UPDATE 4_2_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',ROLL_NUMBER='$d2',SECTION='$SECTION',PROFEESIONAL_ELECTIVE_4='$sub1',PROFESSIONAL_ELECTIVE_5='$sub2',PROJECT_2='$sub3',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
$checked=1;
}



$k=2222;
if($checked==1)
{
?>
		<script>
      alert("STUDENT ROLL NUMBER MODIFIED");
      window.location.href="Student_data_to_update.html";
    </script>
<?php
}
else
{
?>
		<script>
      alert("STUDENT DATA NOT UPDATED");
      window.location.href="Student_data_to_update.html";
    </script>
<?php
}

}
else
{
?>
		<script>
      alert("STUDENT DATA NOT EXIST");
      window.location.href="Student_data_to_enter.html";
    </script>
<?php	
}	


?>