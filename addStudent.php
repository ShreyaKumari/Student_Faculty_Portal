<?php
require 'connect.php';
if( isset($_POST['send'])  && $_SERVER['REQUEST_METHOD']=== 'POST'){
   $id=$_POST['i'];
   $user=$_POST['user'];
   $fa=$_POST['fa'];
    $pass=$_POST['pass'];
  //$insert="INSERT INTO stu_log(id,user_name,password,fa) VALUES('$id','$user',$pass','$fa')";
    // $data=mysqli_query($link,$insert);
    //header("location:addStudent.php");
    
     $insert="INSERT INTO stu_log(id,user_name,password,fa) VALUES('$id','$user','$pass','$fa')";
     $data=mysqli_query($link,$insert);
     header("location:admin.php");
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><strong>ADMIN</strong> PORTAL</a>
					<nav id="nav">
						<a href="index.php">Home</a>
						<a href="about.php">About</a>
						<a href="">Notifications</a>
                        <a type="button" href="#inner" class="outer" onclick="smoothScroll('inner')">Contact</a>
                        
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
                        <br>
					    <form style="margin-left:280px;" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                
                                <div class="row">
                                  <div class="col-75">
                                    <label for="name">ID:</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="text" name="i" id="i">
                                  </div>
                                </div>
                               
                               <br>
                               
                                <div class="row">
                                  <div class="col-75">
                                    <label for="roll">Roll No. of Student:</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="text" name="user" id="user">
                                  </div>
                                </div>
                               
                               <br>
                                                    
                                <div class="row">
                                  <div class="col-75">
                                    <label for="fa">Name of Faculty Advisor:</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="text" name="fa" id="fa">
                                  </div>
                                </div>
                               
                               <br>
                               
                                <div class="row">
                                  <div class="col-75">
                                    <label for="fa">Password:</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="password" name="pass" id="pass">
                                  </div>
                                </div>
                                
                                <br><br>
                                <div class="row"  style="margin-left:80px">
                                  <input type="submit" name="send" value="Add">
                                </div>
                              </form>
					</header>
				</div>
			</section>

	
            <!-- Scripts -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
              // Add smooth scrolling to all links
              $("a").on('click', function(event) {
            
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();
            
                  // Store hash
                  var hash = this.hash;
            
                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 2000, function(){
               
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>