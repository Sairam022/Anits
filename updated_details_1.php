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
$sub21="OPEN_ELECTIVE_1";
$sub22="DBMS";
$sub23="COMPUTER_GRAPHICS";
$sub24="COMPUTER_NETWORKS";
$sub25="DAA";
$sub26="DBMS_LAB";
$sub27="COMPUTER_NETWORKS_LAB";
$sub28="SOFT_SKILLS_LAB";
$sub29="QANTATIVE_VERBAL_APTITUDE_1";


$count=0;

$k=0;
$checks1="0000-0000";
$checks2="0";
$checks3="0001-01-01";

$checked=0;


$query= mysql_query("SELECT ROLL_NUMBER FROM 3_1_table") ;
		while($row=mysql_fetch_array($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$check=1;
			}
			echo $dbuid.$d2."\n";
		}


$query= mysql_query("SELECT * FROM 3_1_table where ROLL_NUMBER='$rollnumber' ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			$sub1=$row['OPEN_ELECTIVE_1'];
			$sub2=$row['DBMS'];
			$sub3=$row['COMPUTER_GRAPHICS'];
			$sub4=$row['COMPUTER_NETWORKS'];
			$sub5=$row['DAA'];
			$sub6=$row['DBMS_LAB'];
			$sub7=$row['COMPUTER_NETWORKS_LAB'];
			$sub8=$row['SOFT_SKILLS_LAB'];
			$sub9=$row['QANTATIVE_VERBAL_APTITUDE_1'];

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
else if($SUBJECT==$sub24)
	{
		$sub4=$GRADE;
	}
else if($SUBJECT==$sub25)
	{
		$sub5=$GRADE;
	}
else if($SUBJECT==$sub26)
	{
		$sub6=$GRADE;
	}
else if($SUBJECT==$sub27)
	{
		$sub7=$GRADE;
	}
else if($SUBJECT==$sub28)
	{
		$sub8=$GRADE;
	}
else if($SUBJECT==$sub29)
	{
		$sub9=$GRADE;
	}





$k=1231;
if($NOBACK!=0)
{
	$hey=$hey+1;
}





$k=6545;
if($check==1)
{
 mysql_query("UPDATE 3_1_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',SECTION='$SECTION',OPEN_ELECTIVE_1='$sub1',DBMS='$sub2',COMPUTER_GRAPHICS='$sub3',COMPUTER_NETWORKS='$sub4',DAA='$sub5',DBMS_LAB='$sub6',COMPUTER_NETWORKS_LAB='$sub7',SOFT_SKILLS_LAB='$sub8',QANTATIVE_VERBAL_APTITUDE_1='$sub9',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
?>
		<script>
      alert("STUDENT DATA UPDATED");
      window.location.href="Student_data_to_update.html";
    </script>
<?php
}
else if($check!=1)
{
 mysql_query("UPDATE 3_1_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',ROLL_NUMBER='$d2',SECTION='$SECTION',OPEN_ELECTIVE_1='$sub1',DBMS='$sub2',COMPUTER_GRAPHICS='$sub3',COMPUTER_NETWORKS='$sub4',DAA='$sub5',DBMS_LAB='$sub6',COMPUTER_NETWORKS_LAB='$sub7',SOFT_SKILLS_LAB='$sub8',QANTATIVE_VERBAL_APTITUDE_1='$sub9',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
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