<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//echo "connected";
//mysql_query("create database sem_project") ;
//echo"database created ";
mysql_select_db("sem_project") or die("not selected");
$a;
$status1="SOLVED";
$Id=implode(',',$_POST['ch']);
if($ID==Null)
{
?>
		<script>
		alert("NO COMPLAINT TO DELETE");
		window.location.href="retrieve_complaints.php";
		</script>
<?php	

}

echo $Id;
mysql_query("delete from complaints where S_NO in($Id)")or die("cant delete");
mysql_query("UPDATE complaints_status SET status='$status1' where S_NO in($Id)")or die("cant UPDATE");
header("location:retrieve_complaints.php");

	
?>
	