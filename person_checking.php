 <?php 
	session_start();
$connect=mysql_connect("localhost","root","") or die("coudld connect to database");
	
	mysql_select_db("sem_project") or die("couldn't find database");
$uid2=$_SESSION['administrator_name'];
$pas2=$_SESSION['password'];
$check="admin";
$cat1="";
$query=mysql_query("select Category from login  WHERE Administrator_name='$uid2'");
$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_array($query))
		{
			$cat1= $row['Category'];
		}	

       	}
if($cat1!=NULL)
{
if($cat1==$check)
{
	
	header("location:Student_data_to_enter.html");

}

else
{  ?>
<script>
        window.location.href='List.html';
            alert("You Can't Access This Page");
</script> 
<?php
}
}
else
{  ?>
<script>
        window.location.href='List.html';
            alert("Your Details Are Not cleared Plz Check Details In Database");
</script> 
<?php
}
?>


