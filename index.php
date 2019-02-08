<?php
require 'connect.php';
if( isset($_POST['send'])  && $_SERVER['REQUEST_METHOD']=== 'POST'){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $message=$_POST['message'];
  $insert="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message') ";
     $data=mysqli_query($link,$insert);    
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<style type="text/css">
			#banner
			{
				background-image: url("images/uk.jpg");
			}
/*@media only screen and (min-width: 600px) {
    .col-s-1 {width: 8.33%;}
    .col-s-2 {width: 16.66%;}
    .col-s-3 {width: 25%;}
    .col-s-4 {width: 33.33%;}
    .col-s-5 {width: 41.66%;}
    .col-s-6 {width: 50%;}
    .col-s-7 {width: 58.33%;}
    .col-s-8 {width: 66.66%;}
    .col-s-9 {width: 75%;}
    .col-s-10 {width: 83.33%;}
    .col-s-11 {width: 91.66%;}
    .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}*/

@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
  [class="imge"]
    {
       max-width:40%;
       float:left;
       padding-top:10px;}
    [class="navPanel"]
    {
          max-width:20%;
          height:auto;
    }
    [class="navPanelToggle"]
    {
          max-width:20%;
          height:auto;
    }
    [class="fa fa-bars"]
    {
    margin-top:40px;
    
    }
}
    
img {
   max-width:90%;
    height: auto;
    float:left;
}
		</style>
		
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<div class="logo" ><img src="images/nitlogo.jpg" class="imge" ></div>
					<nav id="nav">
						<a href="index.php" style="font-size: 20px;">Home</a>
						<a href="about.php" style="font-size: 20px;">About</a>
						<a href="" style="font-size: 20px;">Notifications</a>
                        <a href="admin_login.php" style="font-size: 20px;">Admin</a>
						<a type="button" href="#inner" class="outer" style="font-size: 20px;" onclick="smoothScroll('inner')">Contact</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner" >
				<div class="inner">
					<header>
						<h1>Registration Form</h1>
					</header>

					<div class="flex ">

						<div>
							<span class="icon fa-file"></span>
							<a href="login_student.php" style="text-decoration: none;"><h3>Student Login</h3></a>
							<p>Students are requested to <br>login first to continue <br>with the enrollment procedure.</p>
						</div>

						<div>
							<span class="icon fa-user"></span>
							<a href="login.php" style="text-decoration: none;"><h3>Faculty Login</h3></a>
							<p>Forms have been collected.<br> Kindly verify them.</p>
						</div>

					

				
			</section>


		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">
						<article>
							<div class="image round" >
								<img src="images/log.jpg" class=".img circle" alt="Pic 01"  />
							</div>
							<header>
								<h4>National Institute of Technology, Uttarakhand<br /> </h4>
							</header>
							<p>Established : 2010<br />The National Institute of Technology Uttarakhand <br>is a public engineering institution in the Indian state of Uttarakhand. </p>
							<footer>
								<a href="http://nituk.ac.in/" class="button">Know More</a>
							</footer>
						</article>
						<article>
							<div class="image round">
								<img src="images/dir.jpg" alt="Pic 02" class=".img circle" /><br>
							</div>
							<header>
								<h4>Dr.Shyam Lal Soni <br>Director<br> National Institute of Technology, Uttarakhand</h4><br>
							</header>
							
							<footer><br>
								<a href="http://nituk.ac.in/" class="button">Know More</a>
							</footer>
						</article>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div id="inner">

					<h3>Get in touch</h3>

					
                    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" name="send" class="button alt" type="submit"></li>
						</ul>
					</form>

				
				</div>
			</footer>

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
                  }, 800, function(){
               
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                } // End if
              });
            });
            </script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>