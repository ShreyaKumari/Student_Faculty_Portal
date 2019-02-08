<?php
include_once 'connect.php';
session_start();
if(!$_SESSION['id'])
{
    header("location:index.php"); //used so that after logout profile page dont come up as when we destroy session, id becomes undefned
}
$id= $_SESSION['id'];
//$data=mysqli_query($link,"SELECT * FROM fa_log WHERE id = '$id' ");
//$arr=mysqli_fetch_assoc($data);
if(isset($_POST['submit']))
{
$file_name= $_FILES['image']['name'];
$file_size= $_FILES['image']['size'];
$file_tmp= $_FILES['image']['tmp_name'];   //temp image in server


$div=explode('.',$file_name);   //converts string to array
$file_ext=strtolower(end($div));  //last element of array which is the extension
$unique_image=substr(md5(time()),0,10).".".$file_ext;     //fixing length


//$uni=time().uniqid(rand());
//$uploaded_image='upload/'.$uni.$file_name;
$uploaded_image='upload/'.$unique_image;
move_uploaded_file($file_tmp, $uploaded_image);
$data1=mysqli_query($link,"UPDATE fa_log SET dp='$uploaded_image' WHERE id='$id' ");
}
$data2=mysqli_query($link,"SELECT * FROM fa_log WHERE id = '$id' ");
$arr=mysqli_fetch_assoc($data2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ADMIN </title>


    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <link href="css1/nprogress.css" rel="stylesheet">
    <link href="css1/custom.min.css" rel="stylesheet">
    <style>
    
    table{
        width:100%;
        tr:nth-child(even) {background-color: #f2f2f2;}
    }
    
    tr,th,td{
        font-size: 16px;
        text-align:center;
        border: 1px solid black;
    }
    
    th,td{
        width:50%;
    }
    #file{
    display:none;
}

    #one
    {
    color: #818181
}
    #one a:hover {
                    color: #f1f1f1;
                }
    </style>
</head>

<body class="nav-md" style="background-color:white;font-family:Arial,Verdana;">
<div class="container body" >
    <div class="main_container" style="background-color:#2e8b57;">
    <a href="" class="logo" style="font-size:35px;"><strong style="color:white; padding-left:20px;">FACULTY PORTAL</strong></a>
        <div class="col-md-3 left_col"style="background-color:#111;">
            <div class="left_col scroll-view"style="background-color:#111;">
                <!--<div class="main_menu_side hidden-print main_menu" id="sidebar-menu" style="border: 0";>
                    <img src="images/imageedit_1_4587866231.png" style="background-color: #fff; padding: 2.2px;">
                </div>-->

            

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                    
                        <img src="images/imageedit_1_4587866231.png" style="background-color: #fff; padding: 2.2px;">
                        <?php
                        if($arr['dp']=="1")
                        {
                            ?>
                        
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        <?php
                        }
                        else
                        {
                        ?>
                        <img src="<?php echo $arr['dp']; ?>" alt="..." class="img-circle profile_img" >
                        <?php
                        }
                        ?>
                        
                        
                        <form name="form1" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                        <span class="fa fa-camera" style="padding-left:35px;padding-top:5px" onclick="document.getElementById('file').click();document.getElementById('sub').click();"></span>
                         <input type="file" id="file" style="display:none;"  name="image"/>
                         <input type="submit" id="sub" name="submit"  style="display:none;">
                        </form>
                       <!-- <input type="file" value=' <a href="" class="fa fa-camera" style="padding-left:35px;padding-top:5px;"></a'>
                        </form>-->
                    </div>
                    <div class="profile_info" style="font-family: Arial,Verdana;">
                       <span style="font-family:verdana;font-size:20px;"><br>Welcome</span>

                        <h2 style="font-family:Arial,Verdana;font-size:20px;"><?php echo $arr['user_name'];?></h2>
                    </div>
                    
                    <div>
                    
                   <!-- <span class="fa fa-camera"></span>-->
                    
                    </div>
                    <div class="clearfix" ></div>
                    
                </div>
                <!-- /menu profile quick info -->

                

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="font-family:verdana;background-color:#111;font-size:20px;">
                    <div class="menu_section"style="background-color:#111;" >
                       <!-- <h3>General</h3>--><br>
                        <ul class="nav side-menu"style="background-color:#111;font-family: verdana;" >
                            <li><a href="profile.php" id="one"><i class="fa fa-home"></i> Home</a>

                            </li>
                            <li><a href="view.php" id="one"><i class="fa fa-edit"></i>View Forms</a>

                            </li>
                            <li><a  id="one"><i class="fa fa-bell"></i> Notifications</a>

                            </li>
                            
                            <li><a href="fa_messages.php" id="one"><i class="fa fa-envelope-o"></i>Messages<!-- <span
                                    class="fa fa-chevron-down"></span>--></a>

                            </li>
                           <!-- <li><a><i class="fa fa-edit"></i> Contact <span class="fa fa-chevron-down"></span></a>

                            </li>-->
                            

                        </ul>
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav"style="background-color:white;">
            <div class="nav_menu"style="background-color:white;">
                <nav>
                    <div class="nav toggle"style="background-color:white;">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                               <!-- <img src="<?php  $row?>" alt=""> <?php  $row ?> ;-->
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                            
                           <!-- <li><a href=""><i class="fa fa-sign-out pull-right"></i><input type="file" class="hide">Change Profile Picture</a></li>-->
                              <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                               <li><a href="reset.php"><i class="fa fa-sign-out pull-right"></i> Reset Password</a></li>
                            </ul>
                        </li>

                      <!--  <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                 <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">1</span></a>
                            </a>

                             <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li> <a href="">Forms</a>

                        </li>-->
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->