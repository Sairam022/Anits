<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
echo "connected";
//mysql_query("create database sem_project") ;
echo"database created ";
mysql_select_db("sem_project") or die("not selected");
$query="";
$numrows=0;
$check=0;
$rollnumber=$_POST['rollnumber'];
$BATCH1=$_POST['batch'];
$SECTION1=$_POST['section'];
$year=$_POST['year'];
$sem=$_POST['sem'];
$complaint=$_POST['complaint'];
$faculty_name1="";
$status1="PENDING";
$date1=date("Y/m/d");
if($year=="4" && $sem=="2")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 4_2_table where BATCH='$BATCH1' AND SECTION='$SECTION1'") ;
	$numrows=mysql_num_rows($query);

}
else if($year=="1" && $sem=="1")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 1_1_table where BATCH='$BATCH1' AND SECTION='$SECTION1' ") ;
	$numrows=mysql_num_rows($query);

}
else if($year=="1" && $sem=="2")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 1_2_table where BATCH='$BATCH1' AND SECTION='$SECTION1'") ;
	$numrows=mysql_num_rows($query);

}
else if($year=="2" && $sem=="1")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 2_1_table where BATCH='$BATCH1' AND SECTION='$SECTION1'") ;
	$numrows=mysql_num_rows($query);

}
else if($year=="2" && $sem=="2")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 2_2_table where BATCH='$BATCH1' AND SECTION='$SECTION1'") ;
	$numrows=mysql_num_rows($query);

}
else if($year=="3" && $sem=="1")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 3_1_table where BATCH='$BATCH1' AND SECTION='$SECTION1'") ;
	$numrows=mysql_num_rows($query);

}
else if($year=="3" && $sem=="2")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 3_2_table where BATCH='$BATCH1' AND SECTION='$SECTION1'") ;
	$numrows=mysql_num_rows($query);

}
else if($year=="4" && $sem=="1")
{
$query= mysql_query("SELECT ROLL_NUMBER FROM 4_1_table where BATCH='$BATCH1' AND SECTION='$SECTION1'") ;
	$numrows=mysql_num_rows($query);

}
echo $numrows;
 
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			
				if($dbuid==$rollnumber)
				{
					$check=1;
				}
			echo $dbuid."<br>";

		}
echo $check;
if($check==1)
{
$faculty_name1=$_SESSION['user1'];
mysql_query("INSERT INTO complaints VALUES(null,'$BATCH1','$rollnumber','$SECTION1','$year','$sem','$complaint')") or die("120120");
mysql_query("INSERT INTO complaints_status VALUES(null,'$faculty_name1','$BATCH1','$rollnumber','$SECTION1','$year','$sem','$complaint','$status1','$date1')") or die("something went wrong");
?>
		<script>
		alert("COMPLAINT HAS BEEN REGISTERED SUCCESSFULLY");
		window.location.href="complaints.php";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("STUDENT DATA DOES NOT EXIST");
		window.location.href="complaints.php";
		</script>
<?php
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="List_check.html";
		</script>
<?php	
}	



?>