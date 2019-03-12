<html>
	<head>
		<title>ACADEMIC STUDENT DATA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" type="image/jpg" href="images/res.jpg" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">ANITS</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="Admin_Home.html">Home</a></li>
					<li><a href="List1.html">Student Details</a></li>
					<li><a href="retrieve_complaints.php">Check Complaints</a></li>
					<li><a href="faculty_details_to_update.html">Update Faculty Subject Details</a></li>					
					<li><a href="faculty_details_to_delete.html">Delete Faculty Subject Details</a></li>					
					<li><a href="Student_data_to_enter.html">Add Student Data</a></li>
					<li><a href="DELETE_Details.html">Delete Student Data</a></li>
					<li><a href="main_instructions.html">Upload Student Data File</a></li>
					<li><a href="Student_data_to_update.html">Update Student Data</a></li>
					<li><a href="team.html">About Us</a></li>
					<li><a href="AdminLogin.html">Logout</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>STUDENT RESULT ANALYSIS</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<CENTER><font face="Baskerville Old Face" size="+3">STUDENTS DATA ACADEMIC YEAR WISE</font>
						</header><br>
<a onclick="window.print()"><img src="images/print.jpg" style="width:15%;cursor:pointer;"></a>
<script src="graph_2_field_file.js"></script>

<?php
 session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//echo "connected";
$me2="F";
mysql_select_db("sem_project") or die("not selected");
$d1="Y";
$te1=0;
$year=0;
$result="";
$data="";
$sem=0;

$a1=0;$a2=0;$a3=0;$a4=0;$a5=0;$a6=0;$a7=0;$a8=0;
$b1=0;$b2=0;$b3=0;$b4=0;$b5=0;$b6=0;$b7=0;$b8=0;

$sub1="";
$sub2="";
$sub3="";
$sub4="";
$sub5="";
$sub6="";
$sub7="";
$sub8="";
$sub9="";
$sub10="";
$sub11="";
$sub12="";
$acc_year=$_SESSION['ayear'];
$year=$_SESSION['year'];
$sem=$_SESSION['sem'];
$section=$_SESSION['section'];
$total1=0;
	$sub1="PROFEESIONAL_ELECTIVE_4";
$sub2="PROFESSIONAL_ELECTIVE_5";
$sub3="PROJECT_2";

$sub_code1="CSE421";
$sub_code2="CSE422";
$sub_code3="CSE423";

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year'");
$data=mysql_fetch_assoc($result);
$total1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where DETAINED='$d1' AND SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' ");
$data=mysql_fetch_assoc($result);
$te1=$data['total'];


$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT PROFEESIONAL_ELECTIVE_4='$me2'");
$data=mysql_fetch_assoc($result);
$a1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND PROFEESIONAL_ELECTIVE_4='$me2' ");
$data=mysql_fetch_assoc($result);
$b1=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT PROFESSIONAL_ELECTIVE_5='$me2'");
$data=mysql_fetch_assoc($result);
$a2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND PROFESSIONAL_ELECTIVE_5='$me2' ");
$data=mysql_fetch_assoc($result);
$b2=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND NOT PROJECT_2='$me2'");
$data=mysql_fetch_assoc($result);
$a3=$data['total'];

$result=mysql_query("select count(ROLL_NUMBER) as total from 4_2_table where SECTION='$section' AND ACCODOMIC_YEAR='$acc_year' AND PROJECT_2='$me2' ");
$data=mysql_fetch_assoc($result);
$b3=$data['total'];







			
$dataPoints1 = array(
	array("label"=> $sub_code1, "y"=>$a1),
	array("label"=> $sub_code2, "y"=>$a2),
	array("label"=> $sub_code3, "y"=>$a3),
				
);
$dataPoints2 = array(
array("label"=> $sub_code1, "y"=>$b1),
	array("label"=> $sub_code2, "y"=>$b2),
	array("label"=> $sub_code3, "y"=>$b3),
					
);
?>
<body>
<center>
<div id="chartContainer" style="height: 300px; width: 850px;"></div>
	<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "<?php echo $acc_year; ?>  YEAR-<?php echo $year; ?>  SEM-<?php echo $sem; ?>   <?php echo $section; ?>-SECTION DETAILS"
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "PASS",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "FAIL",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}

function myFunction()
{
	window.print();
}

</script>
<center><br><br><table border="1" style="height:40;width:60;">
<tr>
	<th>SUB_CODE</th>
	<th>SUB_NAME</th>
	<th>ACADEMIC_YEAR</th>
	<th>YEAR</th>
<th>SEMESTER</th>
<th>TOTAL_STUDENTS</th>
<th>PASS</th>
<th>FAIL</th>
</tr>
<tr>
	<td><?php echo $sub_code1;?></td>
	<td><?php echo $sub1;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a1;?></td>
	<td><?php echo $b1;?></td>
	
	
</tr>
<tr>
	<td><?php echo $sub_code2;?></td>
	<td><?php echo $sub2;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a2;?></td>
	<td><?php echo $b2;?></td>
	
	
</tr>
<tr>
	<td><?php echo $sub_code3;?></td>
	<td><?php echo $sub3;?></td>
	<td><?php echo $acc_year;?></td>
	<td><?php echo $year;?></td>
	<td><?php echo $sem;?></td>
	<td><?php echo $total1;?></td>
	<td><?php echo $a3;?></td>
	<td><?php echo $b3;?></td>
	
	
</tr>

</table>

<!--DETAINED :<?php echo $te1;?>-->
</center>
</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content" style="display: block;text-align: center;">
					<font face="Baskerville Old Face" size="5px" color="#ffffff">Designed & Developed By 3/4 <b><a href="team.html">DONT STOP</a></b> Team <br /> Department of CSE</font>
					</div>
					<div class="copyright">
					<font face="Baskerville Old Face" size="5px" color="#ffffff"> All Rights Reserved <br />©ANITS 2018-2019</font>
					</div>
				</div>
			</footer>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>                                                