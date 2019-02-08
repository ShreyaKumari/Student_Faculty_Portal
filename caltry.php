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


<!DOCTYPE html>
<html>
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
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <style>
    #one
    {
    color: #818181
}
    #one a:hover {
                    color: #f1f1f1;
                }

* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
    padding: 70px 25px;
    width: 80%;
    
    text-align: center;
    background-color:#2e8b57;
}

.month ul {
    margin: 0;
    padding: 0;

}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
    width:80%;
    
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
    width:80%;
    
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
/*.extra { 
    display: none;
}

li:hover .extra {
    display: inline-block;
}  */
.tooltip1 {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
    color:black;
}

.tooltip1 .tooltiptext1 {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
}

.tooltip1 .tooltiptext1::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip1:hover .tooltiptext1 {
    visibility: visible;
    opacity: 1;
}
 .modal {
                     /* Hidden by default */
                    
                    width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    overflow: auto; /* Enable scroll if needed */
                    background-color: rgb(0,0,0); /* Fallback color */
                    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
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
        <div class="right_col" role="main" style="background-color:#fff;">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <!--<h3>Plain Page</h3>-->
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                           <!-- <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." name="namer" >
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button" name="search">Go!</button>
                    </span>
                            </div>
                        </form>-->
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                       <!-- <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>-->
                            <div class="x_content">
                               
  
  <!-- Trigger the modal with a button -->
  <div  data-toggle="modal" data-target="#myModal">                         
<h1>Academic Calendar</h1>
</div>
<div class="month" id="june">      
  <ul>
    <li class="prev"><a href="#dec" style="color:white;">&#10094;</a></li>
    <li class="next"><a href="#july"style="color:white;">&#10095;</a></li>
     <div  data-toggle="modal" data-target="#myModal">  
    <li>
      June<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li> 
<li></li> 
<li></li> 
<li></li>  
  <li>1</li>
  <li>2</li>
  <li>3</li>
 
  
  <li>4</li>
  <li>5</li>
 <!-- <li onmouseover="ShowDef();" onmouseout="HideDef();">6</li>
 <script language="JavaScript">
      var oPopup =  window.open();
      oPopup.document.body.innerHTML = "Summer Term";
      function ShowDef()
      {
        oPopup.show(50, 40, 300, 270, document.body);
      }
      function HideDef()
      {
        oPopup.hide();
      }
    </script>-->
     
    <li><div class="tooltip1">
   6
  <span class="tooltiptext1">Summer Term</span>

</div></li>

<!--<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>-->
    
  

 
  <li>7</li>
  
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
   
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
   
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  
</ul>
<br>
<br>
<div class="month" id="july">      
  <ul>
    <li class="prev"><a href="#june"style="color:white;">&#10094;</a></li>
    <li class="next"><a href="#aug"style="color:white;">&#10095;</a></li>
    <li>
      July<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
<br>
<br>

<div class="month" id="aug">      
  <ul>
    <li class="prev" ><a href="#july"style="color:white;">&#10094;</a></li>
    <li class="next"><a href="#sep"style="color:white;">&#10095;</a></li>
    <li>
      August<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li>
<li></li> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
  
</ul>
<br>
<br>

<div class="month" id="sep">      
  <ul>
    <li class="prev"><a href="#aug"style="color:white;">&#10094;</a></li>
    <li class="next"><a href="#oct"style="color:white;">&#10095;</a></li>
    <li>
      September<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li> 
<li></li> 
<li></li> 
<li></li> 
<li></li> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  
</ul>
<br>
<br>

<div class="month" id="oct">      
  <ul>
    <li class="prev"><a href="#sep"style="color:white;">&#10094;</a></li>
    <li class="next"><a href="#nov"style="color:white;">&#10095;</a></li>
    <li>
      October<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
<br>
<br>

<div class="month" id="nov">      
  <ul>
    <li class="prev"><a href="#oct"style="color:white;">&#10094;</a></li>
    <li class="next"><a href="#dec"style="color:white;">&#10095;</a></li>
    <li>
      November<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li> 
<li></li> 
<li></li>  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  
</ul>
<br>
<br>


<div class="month" id="dec">      
  <ul>
    <li class="prev"><a href="#nov"style="color:white;">&#10094;</a></li>
    <li class="next"><a href="#june"style="color:white;">&#10095;</a></li>
    <li>
      December<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li> 
<li></li> 
<li></li> 
<li></li> 
<li></li>  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</div>
 </div>
  </div>                      </div>
                    </div>
                </div>
            </div>
        </div>
 <div class="modal fade"  id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->

      <div class="modal-content" style=" width: 100%; /* Full width */
                    height: 100%; /* Full height */
                    /*overflow: auto; /* Enable scroll if needed */
                    background-color: rgb(0,0,0); /* Fallback color */
                    background-color: rgba(0,0,0,1.0);">
        <div class="modal-header">
          <div class="close" data-dismiss="modal">&times;</div>
          <h4 class="modal-title">Academic Calendar</h4>
        </div>
        <div class="modal-body">
          <p><div class="month" id="june">      
  <ul>
    <li class="prev"><a href="#dec">&#10094;</a></li>
    <li class="next"><a href="#july">&#10095;</a></li>
    <li>
      June<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li> 
<li></li> 
<li></li> 
<li></li>  
  <li>1</li>
  <li>2</li>
  <li>3</li>
 
  
  <li>4</li>
  <li>5</li>
 <!-- <li onmouseover="ShowDef();" onmouseout="HideDef();">6</li>
 <script language="JavaScript">
      var oPopup =  window.open();
      oPopup.document.body.innerHTML = "Summer Term";
      function ShowDef()
      {
        oPopup.show(50, 40, 300, 270, document.body);
      }
      function HideDef()
      {
        oPopup.hide();
      }
    </script>-->
     
    <li><div class="tooltip1">
   6
  <span class="tooltiptext1">Summer Term</span>

</div></li>

<!--<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
</script>-->
    
  

 
  <li>7</li>
  
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
   
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
   
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  
</ul>
<br>
<br>
<div class="month" id="july">      
  <ul>
    <li class="prev"><a href="#june">&#10094;</a></li>
    <li class="next"><a href="#aug">&#10095;</a></li>
    <li>
      July<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
<br>
<br>

<div class="month" id="aug">      
  <ul>
    <li class="prev" ><a href="#july">&#10094;</a></li>
    <li class="next"><a href="#sep">&#10095;</a></li>
    <li>
      August<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li>
<li></li> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
  
</ul>
<br>
<br>

<div class="month" id="sep">      
  <ul>
    <li class="prev"><a href="#aug">&#10094;</a></li>
    <li class="next"><a href="#oct">&#10095;</a></li>
    <li>
      September<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li> 
<li></li> 
<li></li> 
<li></li> 
<li></li> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  
</ul>
<br>
<br>

<div class="month" id="oct">      
  <ul>
    <li class="prev"><a href="#sep">&#10094;</a></li>
    <li class="next"><a href="#nov">&#10095;</a></li>
    <li>
      October<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
<br>
<br>

<div class="month" id="nov">      
  <ul>
    <li class="prev"><a href="#oct">&#10094;</a></li>
    <li class="next"><a href="#dec">&#10095;</a></li>
    <li>
      November<br>
      <span style="font-size:18px">2018</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li> 
<li></li> 
<li></li>  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  
</ul>
<br>
<br>


<div class="month" id="dec">      
  <ul>
    <li class="prev"><a href="#nov">&#10094;</a></li>
    <li class="next"><a href="#june">&#10095;</a></li>
    <li>
      December<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days"> 
<li></li> 
<li></li> 
<li></li> 
<li></li> 
<li></li>  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</div></p>
  
       <!-- <div id="myModal" class="modal">
                      <span class="close">&times;</span>
                      <div class="modal-content" id=>
                      <div id="caption"></div>
                    </div>
        <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
            <script>
            // Get the modal
            var modal = document.getElementById('myModal');
            
            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById('myimg');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            img.onclick = function(){
                modal.style.display = "block";
                modalImg.text = this.text;
                captionText.innerHTML = this.alt;
            }
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() { 
                modal.style.display = "none";
            }
            </script>-->




<?php
        include_once 'footer2.php';
        ?>
