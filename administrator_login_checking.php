<?php
session_start();
$b=mysql_connect("localhost","root","") or die("ksajdflk");
//mysql_query("create database sem_project") ;
mysql_select_db("sem_project") or die("not selected");
//mysql_query("CREATE TABLE complaints(S_NO int(10)primary key AUTO_INCREMENT,BATCH varchar(20),roll_number varchar(30),SECTION varchar(30),YEAR varchar(3),SEM varchar(3),complaint varchar(500))") or die(" nttootot2");

//mysql_query("CREATE TABLE complaints_status(S_NO int(10)primary key AUTO_INCREMENT,faculty_name varchar(20),BATCH varchar(20),roll_number varchar(30),SECTION varchar(30),YEAR varchar(3),SEM varchar(3),complaint varchar(500),status varchar(20),com_date DATE)") or die(" nttootot2");

//mysql_query("CREATE TABLE login(Administrator_name varchar(35),password varchar(20),Category varchar(30))") or die(" nttootot2");
//mysql_query("CREATE TABLE 2_1_table(BATCH varchar(20),ACCODOMIC_YEAR varchar(20),ROLL_NUMBER varchar(20) primary key,SECTION varchar(10),DATA_STRUCTURES_ALGORITHM varchar(10),DIGITAL_LOGICAL_DESIGN varchar(10),DMS varchar(10),OOPS_WITH_JAVA varchar(10),P_S_Q_T varchar(10),DATA_STRUCTURES_LAB varchar(10),DIGITAL_ELECTRONICS_LAB varchar(10),JAVA_LAB varchar(10),SGPA float(10),CGPA float(10),PASS_DATE DATE,ATTENDENCE float(10),NUMBER_OF_ATTEMPTS int(6),DETAINED varchar(10))") or die(" nttootot2");
//mysql_query("CREATE TABLE 2_2_table(BATCH varchar(20),ACCODOMIC_YEAR varchar(20),ROLL_NUMBER varchar(20) primary key,SECTION varchar(10),DATA_COMMUNICATION varchar(10),MICROPROCESSOR_INTERFACING varchar(10),OPERATING_SYSTEMS varchar(10),COMPUTER_ORGANIZATION varchar(10),FLAT varchar(10),MP_LAB varchar(10),OPERATING_SYSTEM_LAB varchar(10),HARDWARE_LAB varchar(10),SGPA float(10),CGPA float(10),PASS_DATE DATE,ATTENDENCE float(10),NUMBER_OF_ATTEMPTS int(6),DETAINED varchar(10))") or die(" nttootot3");
//mysql_query("CREATE TABLE 1_1_table(BATCH varchar(20),ACCODOMIC_YEAR varchar(20),ROLL_NUMBER varchar(20) primary key,SECTION varchar(10),ENGLISH varchar(10),ENGI_MATHEMATICS_1 varchar(10),ENGI_CHEMISTRY varchar(10),PROFESSIONAL_E_H_V varchar(10),BASIC_ELECTRONICS_ENGI varchar(10),ENGI_CHEMISTRY_LAB varchar(10),PROGRAMMING_WITH_C_LAB varchar(10),NCC_NSS_SPORTS varchar(10),SGPA float(10),CGPA float(10),PASS_DATE DATE,ATTENDENCE float(10),NUMBER_OF_ATTEMPTS int(6),DETAINED varchar(10))") or die(" nttootot3");

//mysql_query("CREATE TABLE 1_2_table(BATCH varchar(20),ACCODOMIC_YEAR varchar(20),ROLL_NUMBER varchar(20) primary key,SECTION varchar(10),ENGI_MATHEMATICS_2 varchar(10),ENGI_PHYSICS varchar(10),ENVIRONMENTAL_SCIENCES varchar(10),ENGI_DRAWING varchar(10),ELEMENTS_OF_ELECTRICAL_ENGI varchar(10),ENGI_PHYSICS_LAB varchar(10),LANGUAGE_LAB varchar(10),OOP_WITH_CPP_LAB varchar(10),SGPA float(10),CGPA float(10),PASS_DATE DATE,ATTENDENCE float(10),NUMBER_OF_ATTEMPTS int(6),DETAINED varchar(10))") or die(" nttootot3");

//mysql_query("CREATE TABLE 3_1_table(BATCH varchar(20),ACCODOMIC_YEAR varchar(20),ROLL_NUMBER varchar(20) primary key,SECTION varchar(10),OPEN_ELECTIVE_1 varchar(10),DBMS varchar(10),COMPUTER_GRAPHICS varchar(10),COMPUTER_NETWORKS varchar(10),DAA varchar(10),DBMS_LAB varchar(10),COMPUTER_NETWORKS_LAB varchar(10),SOFT_SKILLS_LAB varchar(10),QANTATIVE_VERBAL_APTITUDE_1 varchar(10),SGPA float(10),CGPA float(10),PASS_DATE DATE,ATTENDENCE float(10),NUMBER_OF_ATTEMPTS int(6),DETAINED varchar(10))") or die(" nttootot3");
//mysql_query("CREATE TABLE 3_2_table(BATCH varchar(20),ACCODOMIC_YEAR varchar(20),ROLL_NUMBER varchar(20) primary key,SECTION varchar(10),COMILER_DESIGN varchar(10),SOFTWARE_ENGI varchar(10),WEB_TECHNOLOGIES varchar(10),COMPUTER_ARCHITECTURE varchar(10),PROFESSIONAL_ELECTIVE_1 varchar(10),OPEN_SOURCE_T_LAB varchar(10),SE_LAB_MINI_LAB varchar(10),QUANTATIVE_VERBAL_APTITUDE_2 varchar(10),SGPA float(10),CGPA float(10),PASS_DATE DATE,ATTENDENCE float(10),NUMBER_OF_ATTEMPTS int(6),DETAINED varchar(10))") or die(" nttootot3");
//mysql_query("CREATE TABLE 4_1_table(BATCH varchar(20),ACCODOMIC_YEAR varchar(20),ROLL_NUMBER varchar(20) primary key,SECTION varchar(10),OPEN_ELECTIVE_2 varchar(10),CRYPTOGRAPHY_AND_N_S varchar(10),OOA_DESIGN varchar(10),PROFEESIONAL_ELECTIVE_2 varchar(10),PROFESSIONAL_ELECTIVE_3 varchar(10),C_N_S_LAB varchar(10),INDUSTRAIL_TRAINING_SEMINAR varchar(10),PROJECT_1 varchar(10),SGPA float(10),CGPA float(10),PASS_DATE DATE,ATTENDENCE float(10),NUMBER_OF_ATTEMPTS int(6),DETAINED varchar(10))") or die(" nttootot3");


//mysql_query("CREATE TABLE 4_2_table(BATCH varchar(20),ACCODOMIC_YEAR varchar(20),ROLL_NUMBER varchar(20) primary key,SECTION varchar(10),PROFEESIONAL_ELECTIVE_4 varchar(10),PROFESSIONAL_ELECTIVE_5 varchar(10),PROJECT_2 varchar(10),SGPA float(10),CGPA float(10),PASS_DATE DATE,ATTENDENCE float(10),NUMBER_OF_ATTEMPTS int(6),DETAINED varchar(10))") or die(" nttootot3");
//mysql_query("CREATE TABLE faculty_details(BATCH varchar(20),year1 int(3),sem int(3),section varchar(10),subject varchar(50),name varchar(100),pass_percentage float(10)") or die(" nttootot2");



$uid=$_POST['administrator_name'];
$password=$_POST['password'];
$admin="admin";
$student="student";
$faculty="faculty";
if($uid&&$password)
{
	$connect=mysql_connect("localhost","root","") or die("coudld connect to database");
	
	mysql_select_db("sem_project") or die("couldn't find database");
	$query= mysql_query("SELECT Administrator_name,password,Category FROM login WHERE Administrator_name='$uid' ") ;
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbuid= $row['Administrator_name'];
			$dbpassword=$row['password'];
			$cate=$row['Category'];
                     		}
		if($uid==$dbuid && $password==$dbpassword)
		{
			$_SESSION['administrator_name']=$dbuid;
		
			$_SESSION['password']=$dbpassword;
       			if($cate==$admin)
			{
			?><script>

    window.location.href="Admin_Home.html";

                </script><?php
			}
			else if($cate==$student)
			{
			$_SESSION['user']=$uid;	
			?><script>
		    window.location.href="Student_Home.html";

                </script><?php
			}
		else if($cate==$faculty)
			{
			$_SESSION['user1']=$uid;	
			?><script>
    window.location.href="List_check.html";

                </script><?php
			}


		}
	 else if($uid==$dbuid && $password!=$dbpassword)
		{
		 ?><script>
            alert("you entered incorrect password");
 window.location.href="AdminLogin.html";
            document.password.value.focus();
            </script><?php 
		}
	}
	else
	{ 
        ?><script>
    alert("User Doesnt Exist");
  window.location.href="index.html";
    </script>
<?php
	}
	
}
else
{
    ?>
    <script>
        window.location.href="index.html";
            alert("Please Enter Username and Password");
</script><?php
    
}	
?>