<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
echo "connected";
//mysql_query("create database sem_project") ;
echo"database created ";
mysql_select_db("sem_project") or die("not selected");

//mysql_query("CREATE TABLE login(Administrator_name varchar(35),password varchar(20),Category varchar(30))") or die(" nttootot2");

$batch1=$_SESSION['batch1'];
$year1=$_SESSION['year1'];
$sem1=$_SESSION['sem1'];
$ACCODOMIC_YEAR=$_POST['ayear'];
$roll_number=$_POST['rollnumber'];
$section=$_POST['section'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$sub3=$_POST['sub3'];
$sub4=$_POST['sub4'];
$sub5=$_POST['sub5'];
$sub6=$_POST['sub6'];
$sub7=$_POST['sub7'];
$sub8=$_POST['sub8'];
$sub9=$_POST['sub9'];
$check=0;
$sgpa=$_POST['sgpa'];
$cgpa=$_POST['cgpa'];
$month_of_pass=$_POST['date'];
$attendence=$_POST['attendence'];
$dbuid="";
$detained="N";
if($attendence<=65)
	{
		$detained="Y";	
	}
$num_of_attempts=1;

$query= mysql_query("SELECT * FROM 3_1_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$roll_number)
			{
				$check=1;
			}
		}
if($check!=1)
{
mysql_query("INSERT INTO 3_1_table VALUES('$batch1','$ACCODOMIC_YEAR','$roll_number','$section','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8','$sub9',$sgpa,'$cgpa','$month_of_pass',$attendence,$num_of_attempts,'$detained')") or die("120120");
?>
		<script>
		alert("DATA INSERTED");
		window.location.href="Student_data_to_enter.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("YOUR DATA EXIST");
		window.location.href="Student_data_to_enter.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="Student_data_to_enter.html";
		</script>
<?php	
}	

?>