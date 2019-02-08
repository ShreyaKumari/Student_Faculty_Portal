<?php
include_once 'connect.php';
session_start();
if(!$_SESSION['roll_no'])
{
    header("location:index.php"); //used so that after logout profile page dont come up as when we destroy session, id becomes undefned
}

$roll= $_SESSION['roll_no'];
$query="SELECT * FROM stu_log WHERE user_name= '$roll' ";
$data= mysqli_query($link,$query);
$row=mysqli_num_rows($data);
$arr=mysqli_fetch_assoc($data);
 $data1=mysqli_query($link,"SELECT * FROM tbl_students WHERE roll_no='$roll' AND (titleA IS NOT NULL OR titleB IS NOT NULL OR titleC IS NOT NULL OR titleD IS NOT NULL OR titleE IS NOT NULL OR titleF IS NOT NULL OR titleG IS NOT NULL OR titleH IS NOT NULL) ");
     
     $row1=mysqli_num_rows($data1);
     
    
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Student portal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
                        <style>
                
                .sidenav {
                    height: 100%;
                    width: 17%;
                    position: fixed;
                    z-index: 1;
                    top: ;
                    left: 0;
                    background-color: #111;
                    overflow-x: hidden;
                    /*padding-top: 20px;*/
                }
                
                .sidenav a {
                    padding: 6px 8px 6px 16px;
                    text-decoration: none;
                    font-size: 20px;
                    color: #818181;
                    display: block;
                }
                
                .sidenav a:hover {
                    color: #f1f1f1;
                }
                
                .main {
                    margin-left: 17%; /* Same as the width of the sidenav */
                    /*font-size: 28px;  Increased text to enable scrolling */
                    padding: 0px 10px;
                }
                
                @media screen and (max-height: 450px) {
                    .sidenav {/*padding-top: 15px;*/}
                    .sidenav a {}
                }
                
                
                body {font-family: Arial, Helvetica, sans-serif;}

                #myImg {
                    border-radius: 5px;
                    cursor: pointer;
                    transition: 0.3s;
                }
                
                #myImg:hover {opacity: 0.7;}
                
                /* The Modal (background) */
                .modal {
                    display: none; /* Hidden by default */
                    position: fixed; /* Stay in place */
                    z-index: 1; /* Sit on top */
                    padding-top: 100px; /* Location of the box */
                    left: 0;
                    top: 0;
                    width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    overflow: auto; /* Enable scroll if needed */
                    background-color: rgb(0,0,0); /* Fallback color */
                    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
                }
                
                /* Modal Content (image) */
                .modal-content {
                    margin: auto;
                    display: block;
                    width: 80%;
                    max-width: 700px;
                }
                
                /* Caption of Modal Image */
                #caption {
                    margin: auto;
                    display: block;
                    width: 80%;
                    max-width: 700px;
                    text-align: center;
                    color: #ccc;
                    padding: 10px 0;
                    height: 150px;
                }
                
                /* Add Animation */
                .modal-content, #caption {    
                    -webkit-animation-name: zoom;
                    -webkit-animation-duration: 0.6s;
                    animation-name: zoom;
                    animation-duration: 0.6s;
                }
                
                @-webkit-keyframes zoom {
                    from {-webkit-transform:scale(0)} 
                    to {-webkit-transform:scale(1)}
                }
                
                @keyframes zoom {
                    from {transform:scale(0)} 
                    to {transform:scale(1)}
                }
                
                /* The Close Button */
                .close {
                    position: absolute;
                    top: 15px;
                    right: 35px;
                    color: #f1f1f1;
                    font-size: 40px;
                    font-weight: bold;
                    transition: 0.3s;
                }
                
                .close:hover,
                .close:focus {
                    color: #bbb;
                    text-decoration: none;
                    cursor: pointer;
                }
                
                /* 100% Image Width on Smaller Screens */
                @media only screen and (max-width: 700px){
                    .modal-content {
                        width: 100%;
                    }
                }
                </style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>STUDENT</strong> PORTAL</a>
					<nav id="nav">
						<a href="student_home.php">Home</a>
						<a href="logout.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
            
            <div class="sidenav">
            <img src="images/imageedit_1_4587866231.png" style="background-color: #fff;padding: 2.2px;">
              <a href="student_home.php">Home</a>
              <?php
               if(!$row1)
               {
                   
               ?>
               <a href="form.php">Enrollment Form</a>
                <a href="">Current Courses</a>
              <a href="calendar.php">Academic Calendar</a>
              <a href="fa_contact.php">Contact Faculty Advisor</a>
            </div>
               <?php
               }
               else
               {   ?> 
                   <a href="" onclick="myFunction()">Enrollment Form</a>
                    <a href="">Current Courses</a>
              <a href="calendar.php">Academic Calendar</a>
              <a href="fa_contact.php">Contact Faculty Advisor</a>
            </div>
                  
<?php
}
?>

               <script>
function myFunction() {
    alert("You have already filled the form.");
}
</script>
             <!-- <a href="">Current Courses</a>
              <a href="calendar.php">Academic Calendar</a>
              <a href="fa_contact.php">Contact Faculty Advisor</a>
            </div>-->