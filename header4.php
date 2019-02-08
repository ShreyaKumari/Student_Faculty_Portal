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
 //$data1=mysqli_query($link,"SELECT * FROM tbl_students WHERE roll_no='$roll' AND (titleA IS NOT NULL OR titleB IS NOT NULL OR titleC IS NOT NULL OR titleD IS NOT NULL OR titleE IS NOT NULL OR titleF IS NOT NULL OR titleG IS NOT NULL OR titleH IS NOT NULL) ");
  $data1=mysqli_query($link,"SELECT * FROM stu_log WHERE user_name='$roll' AND filled IS NOT NULL");   
     $row1=mysqli_num_rows($data1);
     
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plain Page | LMS </title>

<link rel="stylesheet" href="assets/css/main.css" />
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <link href="css1/nprogress.css" rel="stylesheet">
    <link href="css1/custom.min.css" rel="stylesheet">
    <style>
    #one
    {
    color: #818181
}
    #one a:hover {
                    color: #f1f1f1;
                }
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

<body class="nav-md"style="background-color:white";>
<div class="container body"  >
    <div class="main_container"style="background-color:#2e8b57;">
                    
					<a href="" class="logo" style="font-size:35px;"><strong style="color:white; padding-left:20px;">STUDENT PORTAL</strong></a>
                    
                     <!-- <span id="nav">
    					<a href="student_home.php" style="color:white;padding:10px;">Home</a>
						<a href="logout.php" style="color:white;">Logout</a>-->
				
               
                        
                  
					
						
        <div class="col-md-3 left_col" style="background-color:#111;">
            <div class="left_col scroll-view" style=" background-color:#111;padding: 2.2px; font-family: Arial, Verdana; font-size:20px;">
                <div class="navbar nav_title" style="border: 0;background-color:#111;">
            
              <div class="profile clearfix">
                    <div class="profile_pic">
                    
                    <img src="images/imageedit_1_4587866231.png" style="background-color: #fff; padding: 2.2px;">
                    </div>
                    </div>
                </div>

            

                <!-- menu profile quick info -->
               <!-- <div class="profile clearfix" >
                   <!-- <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <!--<div class="profile_info" style="font-family: verdana; font-size: 25px;">
                        <span>Welcome,</span>

                        <h2>admin</h2>
                    </div>-->
                   <!-- <div class="clearfix" ></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="font-family: verdana;" style="background-color:#111;">
                    <div class="menu_section" style="background-color:#111;">
                       <!-- <h3>General</h3>-->
                        <ul class="nav side-menu" style="background-color:#111;"><br>
                            <li><a href="portal.php" id="one"><i class="fa fa-home"></i> Home </a>

                            </li>
                             <?php
               if(!$row1)
               {
                ?>
                  <li><a href="form.php" id="one"><i class="fa fa-edit"></i>Enrollment Form </a>

                            </li>
                            <li><a id="one"><i class="fa fa-book"></i> Current Courses
                                    </a>

                            </li>
                            <li><a href="caltry.php" id="one"><i class="fa fa-calendar"></i> Academic Calendar
                                 </a>

                            </li>
                            <li><a href="fa_contact1.php" id="one"><i class="fa fa-envelope"></i> Contact Faculty Advisor</a>

                            </li>
                            
                            
                             <li><a href="acceptnotification.php" id="one"><i class="fa fa-bell"></i>Notification</a>

                            </li>
                            

                        </ul>
                   
              
               <?php
               }
               else
               {   ?> 
                   
                     <li><a href="create.php" id="one" onclick=""><i class="fa fa-edit"></i>Enrollment Form </a>

                            </li>
                            <li><a id="one"><i class="fa fa-book"></i> Current Courses
                                   </span></a>

                            </li>
                            <li><a href="caltry.php" id="one"><i class="fa fa-calendar"></i> Academic Calendar
                                    </a>

                            </li>
                            <li><a href="fa_contact1.php" id="one"><i class="fa fa-envelope"></i> Contact Faculty Advisor</a>

                            </li>
                            
                             <li><a href="acceptnotification.php" id="one"><i class="fa fa-bell"></i>Notification</a>

                            </li>
                            

                        </ul>
                   
                   <script>
function myFunction() {
    alert("You have already filled the form.");
}
</script>
<?php
}
?>
                           
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav" style="background-color:white;">
            <div class="nav_menu"style="background-color:white;">
                <nav >
                    <div class="nav toggle" style="background-color:white;">
                        <a id="menu_toggle" style="background-color:white;"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right"style="background-color:white;" >
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                               <!-- <img src="<?php  $row?>" alt=""> <?php  $row ?> ;-->
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                              <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                               <li><a href="reset1.php"><i class="fa fa-sign-out pull-right"></i> Reset Password</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                 <i class="fa fa-envelope-o"></i>
                               <!-- <span class="badge bg-green">1</span>--></a>
                            </a>

                            <!-- <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li> <a href="">Forms</a>-->

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->