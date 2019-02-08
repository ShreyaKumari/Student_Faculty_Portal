<?php
require 'connect.php';
if( isset($_POST['send'])  && $_SERVER['REQUEST_METHOD']=== 'POST'){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $message=$_POST['message'];
  $insert="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
     $data=mysqli_query($link,$insert);
    
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
						<a href="addStudent.php"><h3>Add Student</h3></a>
                        <br><br>
                        <a href="addAdmin.php"><h3>Add Admin</h3></a>
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