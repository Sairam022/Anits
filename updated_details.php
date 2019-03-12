<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
echo "connected";
//mysql_query("create database sem_project") ;
echo"database created ";
mysql_select_db("sem_project") or die("not selected");
$sub1="";
$year1=0;
$sem1=0;
$sub2="";
$sub3="";
$sub4="";
$sub5="";
$sub6="";
$sub7="";
$sub8="";

$year1=$_SESSION['year11'];
$sem1=$_SESSION['sem11'];
$rollnumber=$_SESSION['rollnumber11'];
$BATCH=$_POST['batch'];
$hey=1;
$check=0;
$checks1="0000-0000";
$checks2="0";
$checks3="0001-01-01";

$checked=0;

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

$sub29="";
$sub21="";
$sub22="";
$sub23="";
$sub24="";
$sub25="";
$sub26="";
$sub27="";
$sub28="";
echo $year1.$sem1;

if($year1==2 && $sem1==1)
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
else if($year1==2 && $sem1==2)
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
else if($year1==1 && $sem1==1)
{
$sub21="ENGLISH";
$sub22="ENGI_MATHEMATICS_1";
$sub23="ENGI_CHEMISTRY";
$sub24="PROFESSIONAL_E_H_V";
$sub25="BASIC_ELECTRONICS_ENGI";
$sub26="ENGI_CHEMISTRY_LAB";
$sub27="PROGRAMMING_WITH_C_LAB";
$sub28="NCC_NSS_SPORTS";

}
else if($year1==1 && $sem1==2)
{
$sub21="ENGI_MATHEMATICS_2";
$sub22="ENGI_PHYSICS";
$sub23="ENVIRONMENTAL_SCIENCES";
$sub24="ENGI_DRAWING";
$sub25="ELEMENTS_OF_ELECTRICAL_ENGI";
$sub26="ENGI_PHYSICS_LAB";
$sub27="LANGUAGE_LAB";
$sub28="OOP_WITH_CPP_LAB";

}
else if($year1==3 && $sem1==2)
{
$sub21="COMPILER_DESIGN";
$sub22="SOFTWARE_ENGI";
$sub23="WEB_TECHNOLOGIES";
$sub24="COMPUTER_ARCHITECTURE";
$sub25="PROFESSIONAL_ELECTIVE_1";
$sub26="OPEN_SOURCE_T_LAB";
$sub27="SE_LAB_MINI_LAB";
$sub28="QUANTATIVE_VERBAL_APTITUDE_2";

}
else if($year1==4 && $sem1==1)
{
$sub21="OPEN_ELECTIVE_2";
$sub22="CRYPTOGRAPHY_AND_N_S";
$sub23="OOA_DESIGN";
$sub24="PROFEESIONAL_ELECTIVE_2";
$sub25="PROFESSIONAL_ELECTIVE_3";
$sub26="C_N_S_LAB";
$sub27="INDUSTRAIL_TRAINING_SEMINAR";
$sub28="PROJECT_1";
}
$count=0;

$k=0;



if($year1==2 && $sem1==1)
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 2_1_table") ;
		while($row=mysql_fetch_array($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$check=1;
			}
			echo $dbuid.$d2."\n";
		}



$query= mysql_query("SELECT * FROM 2_1_table where ROLL_NUMBER='$rollnumber' ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			$sub1=$row['DATA_STRUCTURES_ALGORITHM'];
			$sub2=$row['DIGITAL_LOGICAL_DESIGN'];
			$sub3=$row['DMS'];
			$sub4=$row['OOPS_WITH_JAVA'];
			$sub5=$row['P_S_Q_T'];
			$sub6=$row['DATA_STRUCTURES_LAB'];
			$sub7=$row['DIGITAL_ELECTRONICS_LAB'];
			$sub8=$row['JAVA_LAB'];
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






$k=1231;
if($NOBACK!=0)
{
	$hey=$hey+1;
}





$k=6545;
if($check==1)
{
 mysql_query("UPDATE 2_1_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',SECTION='$SECTION',DATA_STRUCTURES_ALGORITHM='$sub1',DIGITAL_LOGICAL_DESIGN='$sub2',DMS='$sub3',OOPS_WITH_JAVA='$sub4',P_S_Q_T='$sub5',DATA_STRUCTURES_LAB='$sub6',DIGITAL_ELECTRONICS_LAB='$sub7',JAVA_LAB='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
?>
		<script>
		alert("STUDENT DATA UPDATED");
		window.location.href="Student_data_to_update.html";
		</script>
<?php
}
else if($check!=1)
{
 mysql_query("UPDATE 2_1_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',ROLL_NUMBER='$d2',SECTION='$SECTION',DATA_STRUCTURES_ALGORITHM='$sub1',DIGITAL_LOGICAL_DESIGN='$sub2',DMS='$sub3',OOPS_WITH_JAVA='$sub4',P_S_Q_T='$sub5',DATA_STRUCTURES_LAB='$sub6',DIGITAL_ELECTRONICS_LAB='$sub7',JAVA_LAB='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
$checked=1;
}



$k=2222;
if($checked==1)
{
?>
		<script>
		alert("STUDENT DATA UPDATED");
		window.location.href="Student_data_to_update.html";
		</script>
<?php
}
else
{
?>
		<script>
		alert("STUDENT ROLL NUMBER MODIFIED");
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

}

 if($year1==2 && $sem1==2)
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 2_2_table") ;
		while($row=mysql_fetch_array($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$check=1;
			}
			echo $dbuid."\t".$d2."\n";
		}



$query= mysql_query("SELECT * FROM 2_2_table where ROLL_NUMBER='$rollnumber' ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			$sub1=$row['DATA_COMMUNICATION'];
			$sub2=$row['MICROPROCESSOR_INTERFACING'];
			$sub3=$row['OPERATING_SYSTEMS'];
			$sub4=$row['COMPUTER_ORGANIZATION'];
			$sub5=$row['FLAT'];
			$sub6=$row['MP_LAB'];
			$sub7=$row['OPERATING_SYSTEM_LAB'];
			$sub8=$row['HARDWARE_LAB'];
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








$k=1231;
if($NOBACK!=0)
{
	$hey=$hey+1;
}





$k=6545;
if($check==1)
{
mysql_query("UPDATE 2_2_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',SECTION='$SECTION',DATA_COMMUNICATION='$sub1',MICROPROCESSOR_INTERFACING='$sub2',OPERATING_SYSTEMS='$sub3',COMPUTER_ORGANIZATION='$sub4',FLAT='$sub5',MP_LAB='$sub6',OPERATING_SYSTEM_LAB='$sub7',HARDWARE_LAB='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
?>
		<script>
		alert("STUDENT DATA UPDATED");
		window.location.href="Student_data_to_update.html";
		</script>
<?php
echo "hii";
}
else if($check!=1)
{
mysql_query("UPDATE 2_2_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',ROLL_NUMBER='$d2',SECTION='$SECTION',DATA_COMMUNICATION='$sub1',MICROPROCESSOR_INTERFACING='$sub2',OPERATING_SYSTEMS='$sub3',COMPUTER_ORGANIZATION='$sub4',FLAT='$sub5',MP_LAB='$sub6',OPERATING_SYSTEM_LAB='$sub7',HARDWARE_LAB='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
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



}
else if($year1==1 && $sem1==1)
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 1_1_table") ;
		while($row=mysql_fetch_array($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$check=1;
			}
			echo $dbuid.$d2."\n";
		}

$query= mysql_query("SELECT * FROM 1_1_table where ROLL_NUMBER='$rollnumber' ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			$sub1=$row['ENGLISH'];
			$sub2=$row['ENGI_MATHEMATICS_1'];
			$sub3=$row['ENGI_CHEMISTRY'];
			$sub4=$row['PROFESSIONAL_E_H_V'];
			$sub5=$row['BASIC_ELECTRONICS_ENGI'];
			$sub6=$row['ENGI_CHEMISTRY_LAB'];
			$sub7=$row['PROGRAMMING_WITH_C_LAB'];
			$sub8=$row['NCC_NSS_SPORTS'];
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







$k=1231;
if($NOBACK!=0)
{
	$hey=$hey+1;
}





$k=6545;
if($check==1)
{
mysql_query("UPDATE 1_1_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',SECTION='$SECTION',ENGLISH='$sub1',ENGI_MATHEMATICS_1='$sub2',ENGI_CHEMISTRY='$sub3',PROFESSIONAL_E_H_V='$sub4',BASIC_ELECTRONICS_ENGI='$sub5',ENGI_CHEMISTRY_LAB='$sub6',PROGRAMMING_WITH_C_LAB='$sub7',NCC_NSS_SPORTS='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
?>
		<script>
		alert("STUDENT DATA UPDATED");
		window.location.href="Student_data_to_update.html";
		</script>
<?php
}
else if($check!=1)
{
mysql_query("UPDATE 1_1_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',ROLL_NUMBER='$d2',SECTION='$SECTION',ENGLISH='$sub1',ENGI_MATHEMATICS_1='$sub2',ENGI_CHEMISTRY='$sub3',PROFESSIONAL_E_H_V='$sub4',BASIC_ELECTRONICS_ENGI='$sub5',ENGI_CHEMISTRY_LAB='$sub6',PROGRAMMING_WITH_C_LAB='$sub7',NCC_NSS_SPORTS='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
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
}
else if($year1==1 && $sem1==2)
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 1_2_table") ;
		while($row=mysql_fetch_array($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$check=1;
			}
			echo $dbuid.$d2."\n";
		}


$query= mysql_query("SELECT * FROM 1_2_table where ROLL_NUMBER='$rollnumber' ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			$sub1=$row['ENGI_MATHEMATICS_2'];
			$sub2=$row['ENGI_PHYSICS'];
			$sub3=$row['ENVIRONMENTAL_SCIENCES'];
			$sub4=$row['ENGI_DRAWING'];
			$sub5=$row['ELEMENTS_OF_ELECTRICAL_ENGI'];
			$sub6=$row['ENGI_PHYSICS_LAB'];
			$sub7=$row['LANGUAGE_LAB'];
			$sub8=$row['OOP_WITH_CPP_LAB'];
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










$k=1231;
if($NOBACK!=0)
{
	$hey=$hey+1;
}





$k=6545;
if($check==1)
{
mysql_query("UPDATE 1_2_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',SECTION='$SECTION',ENGI_MATHEMATICS_2='$sub1',ENGI_PHYSICS='$sub2',ENVIRONMENTAL_SCIENCES='$sub3',ENGI_DRAWING='$sub4',ELEMENTS_OF_ELECTRICAL_ENGI='$sub5',ENGI_PHYSICS_LAB='$sub6',LANGUAGE_LAB='$sub7',OOP_WITH_CPP_LAB='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
?>
		<script>
		alert("STUDENT DATA UPDATED");
		window.location.href="Student_data_to_update.html";
		</script>
<?php
}
else if($check!=1)
{
 mysql_query("UPDATE 1_2_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',ROLL_NUMBER='$d2',SECTION='$SECTION',ENGI_MATHEMATICS_2='$sub1',ENGI_PHYSICS='$sub2',ENVIRONMENTAL_SCIENCES='$sub3',ENGI_DRAWING='$sub4',ELEMENTS_OF_ELECTRICAL_ENGI='$sub5',ENGI_PHYSICS_LAB='$sub6',LANGUAGE_LAB='$sub7',OOP_WITH_CPP_LAB='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
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
		window.location.href="Student_data_to_update.html";
		</script>
<?php
echo "reee";	
}	
}
else if($year1==3 && $sem1==2)
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 3_2_table") ;
		while($row=mysql_fetch_array($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$check=1;
			}
			echo $dbuid.$d2."\n";
		}


$query= mysql_query("SELECT * FROM 3_2_table where ROLL_NUMBER='$rollnumber' ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			$sub1=$row['COMILER_DESIGN'];
			$sub2=$row['SOFTWARE_ENGI'];
			$sub3=$row['WEB_TECHNOLOGIES'];
			$sub4=$row['COMPUTER_ARCHITECTURE'];
			$sub5=$row['PROFESSIONAL_ELECTIVE_1'];
			$sub6=$row['OPEN_SOURCE_T_LAB'];
			$sub7=$row['SE_LAB_MINI_LAB'];
			$sub8=$row['UANTATIVE_VERBAL_APTITUDE_2'];
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










$k=1231;
if($NOBACK!=0)
{
	$hey=$hey+1;
}





$k=6545;
if($check==1)
{
 mysql_query("UPDATE 3_2_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',SECTION='$SECTION',COMILER_DESIGN='$sub1',SOFTWARE_ENGI='$sub2',WEB_TECHNOLOGIES='$sub3',COMPUTER_ARCHITECTURE='$sub4',PROFESSIONAL_ELECTIVE_1='$sub5',OPEN_SOURCE_T_LAB='$sub6',SE_LAB_MINI_LAB='$sub7',QUANTATIVE_VERBAL_APTITUDE_2='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
?>
		<script>
      alert("STUDENT DATA UPDATED");
      window.location.href="Student_data_to_update.html";
    </script>
<?php
}
else if($check!=1)
{
 mysql_query("UPDATE 3_2_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',ROLL_NUMBER='$d2',SECTION='$SECTION',COMILER_DESIGN='$sub1',SOFTWARE_ENGI='$sub2',WEB_TECHNOLOGIES='$sub3',COMPUTER_ARCHITECTURE='$sub4',PROFESSIONAL_ELECTIVE_1='$sub5',OPEN_SOURCE_T_LAB='$sub6',SE_LAB_MINI_LAB='$sub7',QUANTATIVE_VERBAL_APTITUDE_2='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
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



}
else if($year1==4 && $sem1==1)
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 4_1_table") ;
		while($row=mysql_fetch_array($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$check=1;
			}
			echo $dbuid.$d2."\n";
		}

$query= mysql_query("SELECT * FROM 4_1_table where ROLL_NUMBER='$rollnumber' ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			$sub1=$row['OPEN_ELECTIVE_2'];
			$sub2=$row['CRYPTOGRAPHY_AND_N_S'];
			$sub3=$row['OOA_DESIGN'];
			$sub4=$row['PROFEESIONAL_ELECTIVE_2'];
			$sub5=$row['PROFESSIONAL_ELECTIVE_3'];
			$sub6=$row['C_N_S_LAB'];
			$sub7=$row['INDUSTRAIL_TRAINING_SEMINAR'];
			$sub8=$row['PROJECT_1'];
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



$k=1231;
if($NOBACK!=0)
{
	$hey=$hey+1;
}





$k=6545;
if($check==1)
{
echo "hii";
mysql_query("UPDATE 4_1_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',SECTION='$SECTION',OPEN_ELECTIVE_2='$sub1',CRYPTOGRAPHY_AND_N_S='$sub2',OOA_DESIGN='$sub3',PROFEESIONAL_ELECTIVE_2='$sub4',PROFESSIONAL_ELECTIVE_3='$sub5',C_N_S_LAB='$sub6',INDUSTRAIL_TRAINING_SEMINAR='$sub7',PROJECT_1='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
?>
		<script>
      alert("STUDENT DATA UPDATED");
      window.location.href="Student_data_to_update.html";
    </script>
<?php
}
else if($check!=1)
{
echo "welcome";
mysql_query("UPDATE 4_1_table SET BATCH='$BATCH',ACCODOMIC_YEAR='$ACCODOMIC_YEAR',ROLL_NUMBER='$d2',SECTION='$SECTION',OPEN_ELECTIVE_2='$sub1',CRYPTOGRAPHY_AND_N_S='$sub2',OOA_DESIGN='$sub3',PROFEESIONAL_ELECTIVE_2='$sub4',PROFESSIONAL_ELECTIVE_3='$sub5',C_N_S_LAB='$sub6',INDUSTRAIL_TRAINING_SEMINAR='$sub7',PROJECT_1='$sub8',SGPA=$sgpa,CGPA=$cgpa,PASS_DATE='$MONTH_OF_PASS',DETAINED='$detained',ATTENDENCE=$attendece,NUMBER_OF_ATTEMPTS=$hey WHERE ROLL_NUMBER='$rollnumber'") or die("120121");
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

}



?>