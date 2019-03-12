<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
echo "connected";
//mysql_query("create database sem_project") ;
echo"database created ";
mysql_select_db("sem_project") or die("not selected");
$check=0;
$c=0;
$batch1=$_POST['batch1'];
$year12=$_POST['year12'];
$sem1=$_POST['se1'];
$subject=$_POST['sub1'];
$section=$_POST['section'];
$name=$_POST['name1'];
$PASS_PERCENTAGE=0;

$batch11=$_SESSION['BATCH1'];
$year121=$_SESSION['YEAR1'];
$sem11=$_SESSION['SEM'];
$section1=$_SESSION['SECTION'];
$subject1=$_SESSION['SUBJECT'];




$query= mysql_query("SELECT * FROM faculty_details ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbbatch= $row['BATCH'];
			$dbyear=$row['year1'];
			$dbsem=$row['sem'];
			$dbsection=$row['section'];
			$dbname=$row['name'];
			$dbsubject=$row['subject'];
			echo $dbyear.$year12."<br>";
			if($dbbatch==$batch1 && $dbyear==$year12 && $dbsem==$sem1 && $dbsubject==$subject && $dbsection==$section && $dbname==$name)
			{
				$check=1;
			}
		}


if($check!=1)
{
$c=0.0;

 mysql_query("UPDATE  faculty_details SET BATCH='$batch1',section='$section',year1=$year12,sem=$sem1,subject='$subject',name='$name' WHERE BATCH='$batch11' AND section='$section1' AND year1=$year121 AND sem=$sem11 AND subject='$subject1'") or die("120121");

echo $check;
?>
		<script>
		alert("FACULTY DATA HAS BEEN UPDATED");

		window.location.href="faculty_details_to_update.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("YOUR DATA EXIST");
		window.location.href="faculty_details_to_update.html";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="faculty_details_to_update.html";
		</script>
<?php	
}	

?>