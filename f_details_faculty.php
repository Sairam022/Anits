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
echo $check;
mysql_query("INSERT INTO faculty_details VALUES('$batch1',$year12,$sem1,'$section','$subject','$name',$c)") or die("120120");



 
?>
		<script>
		alert("FACULTY DATA HAS BEEN INSERTED");
		window.location.href="f_faculty_details_to_enter.php";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("FACULTY DATA ALREADY EXIST");
		window.location.href="f_faculty_details_to_enter.php";
		</script>
<?php	
}	
}
else
{
?>
		<script>
		alert("NO DATA EXIST");
		window.location.href="f_faculty_details_to_enter.php";
		</script>
<?php	
}	

?>