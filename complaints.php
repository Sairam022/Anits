<html>
	<head>
		<title>Student Complaints</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" type="image/jpg" href="images/res.jpg" />
	</head>
	<style>
		table {
			width: 75%;
			text-align: center;
		}
		</style>
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
				<li><a href="List_check.html">Home</a></li>
					<li><a href="fList.html">Student Details</a></li>
					<li><a href="f_faculty_details_to_enter.php">My Subject Details</a></li>	
					<li><a href="complaints.php">Add / Modify Complaints</a></li>
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
						<header><font face="Baskerville Old Face" size="+3">
							<CENTER><b><h2>ENTER COMPLAINTS</b></h2></font>
						</header>
						<center>

<form method="POST" action="complaints_data.php">
<center>
<font face="Baskerville Old Face" size="5px">
<table>
<tr> <td> BATCH </td>
	 <td> <input type=text placeholder="YYYY-YYYY" required="required" name="batch" pattern="^2\d{3}-[0-9]{4}" title="Format should be YYYY-YYYY"> </td> </tr>
<tr> <td> ROLL NUMBER </td>
	 <td> <input type="text" placeholder=" " required="required" name="rollnumber" pattern="^[3][0-9]{11}" title="Only digits are allowed, 12 digits, Starting with 3"> </td> </tr>
<tr> <td> SECTION </td>
	 <td> <select name="section" required><option value="">---</option><option value="A">A-section</option><option value="B">B-section</option><option value="C">C-section</option></select>  </td> </tr>
<tr> <td> YEAR </td>
	 <td> <select required name="year"><option value="">---</option><option value="1"> 1st YEAR</option><option value="2">2nd YEAR</option><option value="3"> 3rd YEAR </option><option value="4"> 4th YEAR </option></select> </td> </tr>
<tr> <td> SEM </td>
	 <td> <select required name="sem"><option value="">---</option><option value="1"> 1st sem</option><option value="2">2nd sem</option></select> </td> </tr>
<tr> <td style="vertical-align: middle;"> COMPLAINTS </td>
	 <td> <textarea rows="10" cols="20" name="complaint" required="required" placeholder="ALL COMPLAINTS FOR THIS YEAR AND SEM"></textarea> </td> </tr>
</table>
	<input type=submit value=SUBMIT name=sub>
</center>
</form>
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