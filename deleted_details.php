<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
echo "connected";
//mysql_query("create database sem_project") ;
echo"database created ";
mysql_select_db("sem_project") or die("not selected");
$query="";
$year1=$_POST['year'];
$sem1=$_POST['sem'];
$d2=$_POST['rollnumber'];
$uid="";
$dbuid="";
$dbuid1=0;

if($year1=="2" && $sem1=="1")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 2_1_table") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{	
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$dbuid1=1;
			}
		}
if($dbuid1==1)
{
 mysql_query("delete from 2_1_table  WHERE ROLL_NUMBER='$d2'") or die("120121");
?>
		<script>
		alert("STUDENT STUDENT DATA DELETED");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("STUDENT DATA NOT FOUND");
		window.location.href="DELETE_Details.html";
		</script>
<?php
}	
}
}
else if($year1=="2" && $sem1=="2")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 2_2_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$dbuid1=1;
			}
			
			
		}
if($dbuid1==1)
{
 mysql_query("delete from 2_2_table   WHERE ROLL_NUMBER='$d2'") or die("120121");
?>
		<script>
		alert("STUDENT DATA DELETED");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("STUDENT DATA NOT FOUND");
		window.location.href="DELETE_Details.html";
		</script>
<?php
}	
}
}
else if($year1=="1" && $sem1=="1")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 1_1_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$dbuid1=1;
			}
			
		}
if($dbuid1==1)
{
 mysql_query("delete from 1_1_table  WHERE ROLL_NUMBER='$d2'") or die("120121");

?>
		<script>
		alert("STUDENT DATA DELETED");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("STUDENT DATA NOT FOUND");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}	
}
	
}

else if($year1=="1" && $sem1=="2")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 1_2_table  ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$dbuid1=1;
			}
		}
if($dbuid1==1)
{
 mysql_query("delete from 1_2_table  WHERE ROLL_NUMBER='$d2'") or die("120121");

?>
		<script>
		alert("STUDENT DATA DELETED");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("STUDENT DATA NOT FOUND");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}	
}
	
}

else if($year1=="3" && $sem1=="1")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 3_1_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$dbuid1=1;
			}
		}
if($dbuid1==1)
{
 mysql_query("delete from 3_1_table  WHERE ROLL_NUMBER='$d2'") or die("120121");

?>
		<script>
		alert("STUDENT DATA DELETED");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("STUDENT DATA NOT FOUND");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}	
}
	
}

else if($year1=="3" && $sem1=="2")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 3_2_table  ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$dbuid1=1;
			}
		}
if($dbuid1==1)
{
 mysql_query("delete from 3_2_table   WHERE ROLL_NUMBER='$d2'") or die("120121");
?>
		<script>
		alert("STUDENT DATA DELETED");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("STUDENT DATA NOT FOUND");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}	
}
}

else if($year1=="4" && $sem1=="1")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 4_1_table ");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$dbuid1=1;
			}
		}
if($dbuid1==1)
{
 mysql_query("delete from 4_1_table  WHERE ROLL_NUMBER='$d2'") or die("120121");

?>
		<script>
		alert("STUDENT DATA DELETED");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("STUDENT DATA NOT FOUND ");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}	
}
}

else if($year1=="4" && $sem1=="2")
{

$query= mysql_query("SELECT ROLL_NUMBER FROM 4_2_table ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['ROLL_NUMBER'];
			if($dbuid==$d2)
			{
				$dbuid1=1;
			}
		}
if($dbuid1==1)
{
 mysql_query("delete from 4_2_table  WHERE ROLL_NUMBER='$d2'") or die("120121");

?>
		<script>
		alert("STUDENT DATA DELETED");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}
else
{
?>
		<script>
		alert("STUDENT DATA NOT FOUND ");
		window.location.href="DELETE_Details.html";
		</script>
<?php	
}	
}
}




?>