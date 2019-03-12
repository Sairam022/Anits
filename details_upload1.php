<?php


require('library/php-excel-reader/excel_reader2.php');

require('library/SpreadsheetReader.php');

require('db_config.php');

$BATCH =NULL;

$ACCODOMIC_YEAR =NULL;

$ROLL_NUMBER =NULL;
$SECTION =NULL;
$sub1 =NULL;
$sub2 =NULL;
$sub3 =NULL;
$SGPA =NULL;
$CGPA =NULL;
$j=0;
$PASS_DATE =NULL;
$ATTENDENCE =NULL;
$NUMBER_OF_ATTEMPTS=NULL;
$DETAINED =NULL;




$year1=$_POST['year'];
$sem1=$_POST['sem'];


if($year1==4 && $sem1==2)
 {
	
if(isset($_POST['Submit']))
{


	$mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];

	if(in_array($_FILES["file"]["type"],$mimes))
	{

	
	ini_set('display_errors', 1);
	
	ini_set('display_startup_errors', 1);

		error_reporting(E_ALL);

		
		$uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
		
move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


		$Reader = new SpreadsheetReader($uploadFilePath);


		
	$totalSheet = count($Reader->sheets());


		echo "You have total ".$totalSheet."sheets ".

		$html="<table border='1'>";

		$html.="<tr><th>BATCH</th><th>ACCODOMIC_YEAR</th><th>ROLL_NUMBER</th><th>SECTION</th><th>PROFEESIONAL_ELECTIVE_4</th><th>PROFESSIONAL_ELECTIVE_5</th><th>PROJECT_2</th><th>SGPA</th><th>CGPA</th><th>PASS_DATE</th><th>ATTENDENCE</th><th>NUMBER_OF_ATTEMPTS</th><th>DETAINED</th></tr>";


		/* For Loop for all sheets */
$i=0;

		if($i<$totalSheet){

			
$Reader->ChangeSheet($i);

			foreach ($Reader as $Row)
	        {

	        	$html.="<tr>";

				/* Check If sheet not emprt */
	      $BATCH = isset($Row[0]) ? $Row[0] : '';
		
		$ACCODOMIC_YEAR = isset($Row[1]) ? $Row[1] : '';

				$ROLL_NUMBER = isset($Row[2]) ? $Row[2] : '';
$SECTION = isset($Row[3]) ? $Row[3] : '';
$sub1 = isset($Row[4]) ? $Row[4] : '';
$sub2 = isset($Row[5]) ? $Row[5] : '';
$sub3 = isset($Row[6]) ? $Row[6] : '';
$SGPA = isset($Row[7]) ? $Row[7] : '';
$CGPA = isset($Row[8]) ? $Row[8] : '';
$PASS_DATE = isset($Row[9]) ? $Row[9] : '';
$ATTENDENCE = isset($Row[10]) ? $Row[10] : '';
$NUMBER_OF_ATTEMPTS= isset($Row[11]) ? $Row[11] : '';
$DETAINED = isset($Row[12]) ? $Row[12] : '';


					if($ROLL_NUMBER!=Null)
					{			
				
				$html.="<td>".$BATCH."</td>";
				$html.="<td>".$ACCODOMIC_YEAR."</td>";
				$html.="<td>".$ROLL_NUMBER."</td>";
				$html.="<td>".$SECTION."</td>";
				$html.="<td>".$sub1."</td>";
				$html.="<td>".$sub2."</td>";
				$html.="<td>".$sub3."</td>";
				$html.="<td>".$SGPA."</td>";
				$html.="<td>".$CGPA."</td>";
				$html.="<td>".$PASS_DATE."</td>";
				$html.="<td>".$ATTENDENCE."</td>";
				$html.="<td>".$NUMBER_OF_ATTEMPTS."</td>";
				$html.="<td>".$DETAINED."</td>";
				$i=$i+1;
					}
				//for each closed
			

	$html.="</tr>";
		
			

	if($ROLL_NUMBER!=Null)
					{			
				
if($ATTENDENCE!=0 && $BATCH!=NULL && $ACCODOMIC_YEAR!=NULL && $ROLL_NUMBER!=NULL && $SECTION!=NULL  && $sub1!=NULL && $sub2!=NULL && $sub3!=NULL  && $SGPA!=0 && $CGPA!=0 && $PASS_DATE!=0000-00-00 && $ATTENDENCE!=0 && $NUMBER_OF_ATTEMPTS!=0 && $DETAINED!=NULL)
	{


$query = ("insert into 4_2_table(BATCH,ACCODOMIC_YEAR,ROLL_NUMBER,SECTION,PROFEESIONAL_ELECTIVE_4,PROFESSIONAL_ELECTIVE_5,PROJECT_2,SGPA,CGPA,PASS_DATE,ATTENDENCE,NUMBER_OF_ATTEMPTS,DETAINED) values('".$BATCH."','".$ACCODOMIC_YEAR."','".$ROLL_NUMBER."','".$SECTION."','".$sub1."','".$sub2."','".$sub3."','".$SGPA."','".$CGPA."','".$PASS_DATE."','".$ATTENDENCE."','".$NUMBER_OF_ATTEMPTS."','".$DETAINED."')") or die("120120");	
		$mysqli->query($query);

	}
	else
	{


	echo "namaste";
				 
		?>
		<script>
		alert("DATA IN THE FILE SHOULD BE AS FOR THE INSTRUCTIONS FORMAT");
		window.location.href="upload_file.php";
		</script>
		
<?php



	}	

}
}//foreach loop
}//total_sheet if is closed


	$html.="</table>";
		
echo $html;

	?>
    <script>
		alert("FILE UPLOADED SUCCESSFULLY");
		window.location.href="upload_file.php";
		</script>
<?php

}//file checking if closed
else {
 
		?>
		<script>
      alert("FILE FORMAT IS NOT SUPPORTED");
		alert("Only .ODS files are Supported");
		window.location.href="upload_file.php";
		</script>
<?php
	 

	}
}
//starting if closed




}
else if($year1==3 && $sem1==1)
{
	
if(isset($_POST['Submit'])){


	$mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];

	if(in_array($_FILES["file"]["type"],$mimes)){

	
	ini_set('display_errors', 1);
	
	ini_set('display_startup_errors', 1);

		error_reporting(E_ALL);

		
		$uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
		
move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


		$Reader = new SpreadsheetReader($uploadFilePath);


		
	$totalSheet = count($Reader->sheets());


		echo "You have total ".$totalSheet."sheets ".

		$html="<table border='1'>";

		$html.="<tr><th>BATCH</th><th>ACCODOMIC_YEAR</th><th>ROLL_NUMBER</th><th>SECTION</th><th>OPEN_ELECTIVE_1</th><th>DBMS</th><th>COMPUTER_GRAPHICS</th><th>COMPUTER_NETWORKS</th><th>DAA</th><th>DBMS_LAB</th><th>COMPUTER_NETWORKS_LAB</th><th>SOFT_SKILLS_LAB</th><th>QANTATIVE_VERBAL_APTITUDE_1</th><th>SGPA</th><th>CGPA</th><th>PASS_DATE</th><th>ATTENDENCE</th><th>NUMBER_OF_ATTEMPTS</th><th>DETAINED</th></tr>";


	/* For Loop for all sheets */
$i=0;

		if($i<$totalSheet){

			
$Reader->ChangeSheet($i);

			foreach ($Reader as $Row)
	        {

	        	$html.="<tr>";

				/* Check If sheet not emprt */
	      $BATCH = isset($Row[0]) ? $Row[0] : '';
		
		$ACCODOMIC_YEAR = isset($Row[1]) ? $Row[1] : '';

				$ROLL_NUMBER = isset($Row[2]) ? $Row[2] : '';
$SECTION = isset($Row[3]) ? $Row[3] : '';
$sub1 = isset($Row[4]) ? $Row[4] : '';
$sub2 = isset($Row[5]) ? $Row[5] : '';
$sub3 = isset($Row[6]) ? $Row[6] : '';
$sub4 = isset($Row[7]) ? $Row[7] : '';
$sub5 = isset($Row[8]) ? $Row[8] : '';
$sub6 = isset($Row[9]) ? $Row[9] : '';
$sub7 = isset($Row[10]) ? $Row[10] : '';
$sub8 = isset($Row[11]) ? $Row[11] : '';
$sub9 = isset($Row[12]) ? $Row[12] : '';
$SGPA = isset($Row[13]) ? $Row[13] : '';
$CGPA = isset($Row[14]) ? $Row[14] : '';
$PASS_DATE = isset($Row[15]) ? $Row[15] : '';
$ATTENDENCE = isset($Row[16]) ? $Row[16] : '';
$NUMBER_OF_ATTEMPTS= isset($Row[17]) ? $Row[17] : '';
$DETAINED = isset($Row[18]) ? $Row[18] : '';


					if($ROLL_NUMBER!=Null)
					{			
				
				$html.="<td>".$BATCH."</td>";
				$html.="<td>".$ACCODOMIC_YEAR."</td>";
				$html.="<td>".$ROLL_NUMBER."</td>";
				$html.="<td>".$SECTION."</td>";
				$html.="<td>".$sub1."</td>";
				$html.="<td>".$sub2."</td>";
				$html.="<td>".$sub3."</td>";
				$html.="<td>".$sub4."</td>";
				$html.="<td>".$sub5."</td>";
				$html.="<td>".$sub6."</td>";
				$html.="<td>".$sub7."</td>";
				$html.="<td>".$sub8."</td>";
				$html.="<td>".$sub9."</td>";

				$html.="<td>".$SGPA."</td>";
				$html.="<td>".$CGPA."</td>";
				$html.="<td>".$PASS_DATE."</td>";
				$html.="<td>".$ATTENDENCE."</td>";
				$html.="<td>".$NUMBER_OF_ATTEMPTS."</td>";
				$html.="<td>".$DETAINED."</td>";
				$i=$i+1;
					}
				//for each closed
			

	$html.="</tr>";
		
echo "hey".$i."hey";
echo $ACCODOMIC_YEAR;
			

	if($ROLL_NUMBER!=Null)
					{			
				
if($BATCH!=Null && $ACCODOMIC_YEAR!=Null && $ROLL_NUMBER!=Null && $SECTION!=Null && $sub1!=Null && $sub2!=Null && $sub3!=Null && $sub4!=Null && $sub5!=Null && $sub6!=Null && $sub7!=Null && $sub8!=Null && $sub9!=Null  && $SGPA!=0 && $CGPA!=0 && $PASS_DATE!=0000-00-00 && $ATTENDENCE!=0 && $NUMBER_OF_ATTEMPTS!=0 && $DETAINED!=Null)
	{
				echo "hii teja";


$query = ("insert into 3_1_table(BATCH,ACCODOMIC_YEAR,ROLL_NUMBER,SECTION,OPEN_ELECTIVE_1,DBMS,COMPUTER_GRAPHICS,COMPUTER_NETWORKS,DAA,DBMS_LAB,COMPUTER_NETWORKS_LAB,SOFT_SKILLS_LAB,QANTATIVE_VERBAL_APTITUDE_1,SGPA,CGPA,PASS_DATE,ATTENDENCE,NUMBER_OF_ATTEMPTS,DETAINED) values('".$BATCH."','".$ACCODOMIC_YEAR."','".$ROLL_NUMBER."','".$SECTION."','".$sub1."','".$sub2."','".$sub3."','".$sub4."','".$sub5."','".$sub6."','".$sub7."','".$sub8."','".$sub9."','".$SGPA."','".$CGPA."','".$PASS_DATE."','".$ATTENDENCE."','".$NUMBER_OF_ATTEMPTS."','".$DETAINED."')") or die("120120");	
		$mysqli->query($query);

	}
	else
	{


	echo "namaste";
//echo $BATCH.
$ACCODOMIC_YEAR.$ROLL_NUMBER.$SECTION.$sub1.$sub2.$sub3.$SGPA.$CGPA.$PASS_DATE.$ATTENDENCE.$NUMBER_OF_ATTEMPTS.$DETAINED;

				 
		?>
		<script>
      alert("DATA IN THE FILE SHOULD BE AS FOR THE INSTRUCTIONS FORMAT");
      window.location.href="upload_file.php";
    </script>
		
<?php



	}	

}
}//foreach loop
}//total_sheet if is closed


	$html.="</table>";
		
echo $html;

	?>
		<script>
		alert("FILE UPLOADED SUCCESSFULLY");
		window.location.href="upload_file.php";
		</script>
<?php

}//file checking if closed
else {
echo "what is going to do";
 
		?>
		<script>
	      alert("FILE FORMAT IS NOT SUPPORTED");
		alert("Only .ODS Files are Supported");
		window.location.href="upload_file.php";
		</script>
<?php
	 

	}
}
//starting if closed



}
else
{

	
if(isset($_POST['Submit'])){


	$mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];

	if(in_array($_FILES["file"]["type"],$mimes)){

	
	ini_set('display_errors', 1);
	
	ini_set('display_startup_errors', 1);

		error_reporting(E_ALL);

		
		$uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
		
move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


		$Reader = new SpreadsheetReader($uploadFilePath);


		
	$totalSheet = count($Reader->sheets());


		echo "You have total ".$totalSheet."sheets ".

		$html="<table border='1'>";

		if($year1==1 && $sem1==1)
{		
	$html.="<tr><th>BATCH</th><th>ACCODOMIC_YEAR</th><th>ROLL_NUMBER</th><th>SECTION</th><th>ENGLISH</th><th>ENGI_MATHEMATICS_1</th><th>ENGI_CHEMISTRY</th><th>PROFESSIONAL_E_H_V</th><th>BASIC_ELECTRONICS_ENGI</th><th>ENGI_CHEMISTRY_LAB</th><th>PROGRAMMING_WITH_C_LAB</th><th>NCC_NSS_SPORTS</th><th>SGPA</th><th>CGPA</th><th>PASS_DATE</th><th>ATTENDENCE</th><th>NUMBER_OF_ATTEMPTS</th><th>DETAINED</th></tr>";


		/* For Loop for all sheets */
}
else if($year1==1 && $sem1==2)
{		
	$html.="<tr><th>BATCH</th><th>ACCODOMIC_YEAR</th><th>ROLL_NUMBER</th><th>SECTION</th><th>ENGI_MATHEMATICS_2</th><th>ENGI_PHYSICS</th><th>ENVIRONMENTAL_SCIENCES</th><th>ENGI_DRAWING</th><th>ELEMENTS_OF_ELECTRICAL_ENGI</th><th>ENGI_PHYSICS_LAB</th><th>LANGUAGE_LAB</th><th>OOP_WITH_CPP_LAB</th><th>SGPA</th><th>CGPA</th><th>PASS_DATE</th><th>ATTENDENCE</th><th>NUMBER_OF_ATTEMPTS</th><th>DETAINED</th></tr>";


		/* For Loop for all sheets */
}
else if($year1==2 && $sem1==1)
{		
	$html.="<tr><th>BATCH</th><th>ACCODOMIC_YEAR</th><th>ROLL_NUMBER</th><th>SECTION</th><th>DATA_STRUCTURES_ALGORITHM</th><th>DIGITAL_LOGICAL_DESIGN</th><th>DMS</th><th>OOPS_WITH_JAVA</th><th>P_S_Q_T</th><th>DATA_STRUCTURES_LAB</th><th>DIGITAL_ELECTRONICS_LAB</th><th>JAVA_LAB</th><th>SGPA</th><th>CGPA</th><th>PASS_DATE</th><th>ATTENDENCE</th><th>NUMBER_OF_ATTEMPTS</th><th>DETAINED</th></tr>";


		/* For Loop for all sheets */
}
else if($year1==2 && $sem1==2)
{		
	$html.="<tr><th>BATCH</th><th>ACCODOMIC_YEAR</th><th>ROLL_NUMBER</th><th>SECTION</th><th>DATA_COMMUNICATION</th><th>MICROPROCESSOR_INTERFACING</th><th>OPERATING_SYSTEMS</th><th>COMPUTER_ORGANIZATION</th><th>FLAT</th><th>MP_LAB</th><th>OPERATING_SYSTEM_LAB</th><th>HARDWARE_LAB</th><th>SGPA</th><th>CGPA</th><th>PASS_DATE</th><th>ATTENDENCE</th><th>NUMBER_OF_ATTEMPTS</th><th>DETAINED</th></tr>";


		/* For Loop for all sheets */
}
else if($year1==3 && $sem1==2)
{		
	$html.="<tr><th>BATCH</th><th>ACCODOMIC_YEAR</th><th>ROLL_NUMBER</th><th>SECTION</th><th>COMILER_DESIGN</th><th>SOFTWARE_ENGI</th><th>WEB_TECHNOLOGIES</th><th>COMPUTER_ARCHITECTURE</th><th>PROFESSIONAL_ELECTIVE_1</th><th>OPEN_SOURCE_T_LAB</th><th>SE_LAB_MINI_LAB</th><th>QUANTATIVE_VERBAL_APTITUDE_2</th><th>SGPA</th><th>CGPA</th><th>PASS_DATE</th><th>ATTENDENCE</th><th>NUMBER_OF_ATTEMPTS</th><th>DETAINED</th></tr>";


		/* For Loop for all sheets */
}
else if($year1==4 && $sem1==1)
{		
	$html.="<tr><th>BATCH</th><th>ACCODOMIC_YEAR</th><th>ROLL_NUMBER</th><th>SECTION</th><th>OPEN_ELECTIVE_2</th><th>CRYPTOGRAPHY_AND_N_S</th><th>OOA_DESIGN</th><th>PROFEESIONAL_ELECTIVE_2</th><th>PROFESSIONAL_ELECTIVE_3</th><th>C_N_S_LAB</th><th>INDUSTRAIL_TRAINING_SEMINAR</th><th>PROJECT_1</th><th>SGPA</th><th>CGPA</th><th>PASS_DATE</th><th>ATTENDENCE</th><th>NUMBER_OF_ATTEMPTS</th><th>DETAINED</th></tr>";


		/* For Loop for all sheets */
}





/* For Loop for all sheets */
$i=0;

		if($i<$totalSheet){

			
$Reader->ChangeSheet($i);

			foreach ($Reader as $Row)
	        {

	        	$html.="<tr>";

				/* Check If sheet not emprt */
	      $BATCH = isset($Row[0]) ? $Row[0] : '';
		
		$ACCODOMIC_YEAR = isset($Row[1]) ? $Row[1] : '';

				$ROLL_NUMBER = isset($Row[2]) ? $Row[2] : '';
$SECTION = isset($Row[3]) ? $Row[3] : '';
$sub1 = isset($Row[4]) ? $Row[4] : '';
$sub2 = isset($Row[5]) ? $Row[5] : '';
$sub3 = isset($Row[6]) ? $Row[6] : '';
$sub4 = isset($Row[7]) ? $Row[7] : '';
$sub5 = isset($Row[8]) ? $Row[8] : '';
$sub6 = isset($Row[9]) ? $Row[9] : '';
$sub7 = isset($Row[10]) ? $Row[10] : '';
$sub8 = isset($Row[11]) ? $Row[11] : '';
$SGPA = isset($Row[12]) ? $Row[12] : '';
$CGPA = isset($Row[13]) ? $Row[13] : '';
$PASS_DATE = isset($Row[14]) ? $Row[14] : '';
$ATTENDENCE = isset($Row[15]) ? $Row[15] : '';
$NUMBER_OF_ATTEMPTS= isset($Row[16]) ? $Row[16] : '';
$DETAINED = isset($Row[17]) ? $Row[17] : '';


					if($ROLL_NUMBER!=Null)
					{			
				
				$html.="<td>".$BATCH."</td>";
				$html.="<td>".$ACCODOMIC_YEAR."</td>";
				$html.="<td>".$ROLL_NUMBER."</td>";
				$html.="<td>".$SECTION."</td>";
				$html.="<td>".$sub1."</td>";
				$html.="<td>".$sub2."</td>";
				$html.="<td>".$sub3."</td>";
				$html.="<td>".$sub4."</td>";
				$html.="<td>".$sub5."</td>";
				$html.="<td>".$sub6."</td>";
				$html.="<td>".$sub7."</td>";
				$html.="<td>".$sub8."</td>";
				$html.="<td>".$SGPA."</td>";
				$html.="<td>".$CGPA."</td>";
				$html.="<td>".$PASS_DATE."</td>";
				$html.="<td>".$ATTENDENCE."</td>";
				$html.="<td>".$NUMBER_OF_ATTEMPTS."</td>";
				$html.="<td>".$DETAINED."</td>";
				$i=$i+1;
					}
				//for each closed
			

	$html.="</tr>";
		
echo "hey".$i."hey";
echo $ACCODOMIC_YEAR;
			

	if($ROLL_NUMBER!=Null)
	{			
				
if($BATCH!=Null && $ACCODOMIC_YEAR!=Null && $ROLL_NUMBER!=Null && $SECTION!=Null && $sub1!=Null && $sub2!=Null && $sub3!=Null && $sub4!=Null && $sub5!=Null && $sub6!=Null && $sub7!=Null && $sub8!=Null && $SGPA!=0 && $CGPA!=0 && $PASS_DATE!=0000-00-00 && $ATTENDENCE!=0 && $NUMBER_OF_ATTEMPTS!=0 && $DETAINED!=Null)
	{

if($year1==1 && $sem1==1) {
echo "this is teja";
$query = ("insert into 1_1_table(BATCH,ACCODOMIC_YEAR,ROLL_NUMBER,SECTION,ENGLISH,ENGI_MATHEMATICS_1,ENGI_CHEMISTRY,PROFESSIONAL_E_H_V,BASIC_ELECTRONICS_ENGI,ENGI_CHEMISTRY_LAB,PROGRAMMING_WITH_C_LAB,NCC_NSS_SPORTS,SGPA,CGPA,PASS_DATE,ATTENDENCE,NUMBER_OF_ATTEMPTS,DETAINED) values('".$BATCH."','".$ACCODOMIC_YEAR."','".$ROLL_NUMBER."','".$SECTION."','".$sub1."','".$sub2."','".$sub3."','".$sub4."','".$sub5."','".$sub6."','".$sub7."','".$sub8."','".$SGPA."','".$CGPA."','".$PASS_DATE."','".$ATTENDENCE."','".$NUMBER_OF_ATTEMPTS."','".$DETAINED."')") or die("120120");		
			$mysqli->query($query);

}
else if($year1==1 && $sem1==2)
{
$query = ("insert into 1_2_table(BATCH,ACCODOMIC_YEAR,ROLL_NUMBER,SECTION,ENGI_MATHEMATICS_2,ENGI_PHYSICS,ENVIRONMENTAL_SCIENCES,ENGI_DRAWING,ELEMENTS_OF_ELECTRICAL_ENGI,ENGI_PHYSICS_LAB,LANGUAGE_LAB,OOP_WITH_CPP_LAB,SGPA,CGPA,PASS_DATE,ATTENDENCE,NUMBER_OF_ATTEMPTS,DETAINED) values('".$BATCH."','".$ACCODOMIC_YEAR."','".$ROLL_NUMBER."','".$SECTION."','".$sub1."','".$sub2."','".$sub3."','".$sub4."','".$sub5."','".$sub6."','".$sub7."','".$sub8."','".$SGPA."','".$CGPA."','".$PASS_DATE."','".$ATTENDENCE."','".$NUMBER_OF_ATTEMPTS."','".$DETAINED."')") or die("120120");		 
				
	$mysqli->query($query);

}
else if($year1==2 && $sem1==1)
{
$query = ("insert into 2_1_table(BATCH,ACCODOMIC_YEAR,ROLL_NUMBER,SECTION,DATA_STRUCTURES_ALGORITHM,DIGITAL_LOGICAL_DESIGN,DMS,OOPS_WITH_JAVA,P_S_Q_T,DATA_STRUCTURES_LAB,DIGITAL_ELECTRONICS_LAB,JAVA_LAB,SGPA,CGPA,PASS_DATE,ATTENDENCE,NUMBER_OF_ATTEMPTS,DETAINED) values('".$BATCH."','".$ACCODOMIC_YEAR."','".$ROLL_NUMBER."','".$SECTION."','".$sub1."','".$sub2."','".$sub3."','".$sub4."','".$sub5."','".$sub6."','".$sub7."','".$sub8."','".$SGPA."','".$CGPA."','".$PASS_DATE."','".$ATTENDENCE."','".$NUMBER_OF_ATTEMPTS."','".$DETAINED."')") or die("120120");
		 
				
		$mysqli->query($query);
}
else if($year1==2 && $sem1==2)
{
$query = ("insert into 2_2_table(BATCH,ACCODOMIC_YEAR,ROLL_NUMBER,SECTION,DATA_COMMUNICATION,MICROPROCESSOR_INTERFACING,OPERATING_SYSTEMS,COMPUTER_ORGANIZATION,FLAT,MP_LAB,OPERATING_SYSTEM_LAB,HARDWARE_LAB,SGPA,CGPA,PASS_DATE,ATTENDENCE,NUMBER_OF_ATTEMPTS,DETAINED) values('".$BATCH."','".$ACCODOMIC_YEAR."','".$ROLL_NUMBER."','".$SECTION."','".$sub1."','".$sub2."','".$sub3."','".$sub4."','".$sub5."','".$sub6."','".$sub7."','".$sub8."','".$SGPA."','".$CGPA."','".$PASS_DATE."','".$ATTENDENCE."','".$NUMBER_OF_ATTEMPTS."','".$DETAINED."')") or die("120120");
		 
				
		$mysqli->query($query);
}
else if($year1==3 && $sem1==2)
{
$query = ("insert into 3_2_table(BATCH,ACCODOMIC_YEAR,ROLL_NUMBER,SECTION,COMILER_DESIGN,SOFTWARE_ENGI,WEB_TECHNOLOGIES,COMPUTER_ARCHITECTURE,PROFESSIONAL_ELECTIVE_1,OPEN_SOURCE_T_LAB,SE_LAB_MINI_LAB,QUANTATIVE_VERBAL_APTITUDE_2,SGPA,CGPA,PASS_DATE,ATTENDENCE,NUMBER_OF_ATTEMPTS,DETAINED) values('".$BATCH."','".$ACCODOMIC_YEAR."','".$ROLL_NUMBER."','".$SECTION."','".$sub1."','".$sub2."','".$sub3."','".$sub4."','".$sub5."','".$sub6."','".$sub7."','".$sub8."','".$SGPA."','".$CGPA."','".$PASS_DATE."','".$ATTENDENCE."','".$NUMBER_OF_ATTEMPTS."','".$DETAINED."')") or die("120120");
		$mysqli->query($query);
}
else if($year1==4 && $sem1==1)
{
$query = ("insert into 4_1_table(BATCH,ACCODOMIC_YEAR,ROLL_NUMBER,SECTION,OPEN_ELECTIVE_2,CRYPTOGRAPHY_AND_N_S,OOA_DESIGN,PROFEESIONAL_ELECTIVE_2,PROFESSIONAL_ELECTIVE_3,C_N_S_LAB,INDUSTRAIL_TRAINING_SEMINAR,PROJECT_1,SGPA,CGPA,PASS_DATE,ATTENDENCE,NUMBER_OF_ATTEMPTS,DETAINED) values('".$BATCH."','".$ACCODOMIC_YEAR."','".$ROLL_NUMBER."','".$SECTION."','".$sub1."','".$sub2."','".$sub3."','".$sub4."','".$sub5."','".$sub6."','".$sub7."','".$sub8."','".$SGPA."','".$CGPA."','".$PASS_DATE."','".$ATTENDENCE."','".$NUMBER_OF_ATTEMPTS."','".$DETAINED."')") or die("120120");	
		$mysqli->query($query);
}






	}
else	
{


	echo "namaste";
//echo $BATCH.
$ACCODOMIC_YEAR.$ROLL_NUMBER.$SECTION.$sub1.$sub2.$sub3.$SGPA.$CGPA.$PASS_DATE.$ATTENDENCE.$NUMBER_OF_ATTEMPTS.$DETAINED;

				 
		?>
		<script>
      alert("DATA IN THE FILE SHOULD BE AS FOR THE INSTRUCTIONS FORMAT");
      window.location.href="upload_file.php";
    </script>
		
<?php



	}	

}
}//foreach loop
}//total_sheet if is closed


	$html.="</table>";
		
echo $html;

	?>
		<script>
		alert("FILE UPLOADED SUCCESSFULLY");
		window.location.href="upload_file.php";
		</script>
<?php

}//file checking if closed
else {
 
		?>
		<script>
	      alert("FILE FORMAT IS NOT SUPPORTED");
		alert("Only .ODS Files are Supported");
		window.location.href="upload_file.php";
		</script>
<?php
	 

	}
}
//starting if closed


}
?>