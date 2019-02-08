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
					<a href="index.php" class="logo"><strong>ABOUT</strong> NIT UK</a>
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
						<h2>National Institue Of Technology, Uttarakhand</h2>
						<p> </p>
					</header>
					<div class="image round left">
						<img src="images/log.jpg" alt="Pic 01" />
					</div>
						<p>National Institute of Technology,
						Uttarakhand (NITUK) is one of the
						31 National Institutes of
						Technologies in the country. Since
						its inception, this Institute has grown
						many fields and has established
						itself as one of the best Technical
						Educational Institutes. NITUK is
						established in 2009 under the Act of
						Parliament by Ministry of Human
						Resource Development. At present,
						the Institute have about 1006
						undergraduates, 112 postgraduates
						and 15 Ph.D. scholars. The Institute
						offers full time B. Tech. and M.Tech.
						Program in Computer Science &
						Engineering, Electrical & Electronics
						Engineering, Electronics &
						Communication Engineering,
						Mechanical Engineering and Civil
						Engineering with an intake of 65
						(including 5 DASA students) and 15
						students respectively in each branch. Under-graduate students are selected through JEE.
						(Main) & DASA and Post-graduate students are selected through CCMT.The Institute
						also offers Ph.D. program in various streams of Engineering, Science and Humanities.
						NITUK is also involved in numerous R&D activities funded through various government
						and private agencies. </p>

					<div class="image round right">
						<img src="images/imageedit_2_8565339475.jpg" alt="Pic 02" />
					</div>
					<p>The temporary campus of NITUK is situated in the beautiful valley of Srinagar
						(Garhwal) at Government Polytechnic. The Institute‟s buildings in Government
						Polytechnic houses Department of Sciences and Humanities, Class Rooms, Library,
						Dispensary, Server Room, Auditorium, Playground and Hostels. NITUK has extended the
						temporary campus by fabricating three new buildings and one cricket ground in the old
						ITI campus. New laboratories in various Departments have been constructed with
						advanced facilities. Engineering Departments and administrative offices have been
						shifted to the new campus. The Institute has got wide space for each Department with
						construction spread over more than 14,000 sq. meter (1,50,000 sq. feet) of area.</p>

					<p>NITUK has made a very rapid growth in the recent past in terms of starting new
						academic programs, revision of academic curriculum, development of laboratories and
						infrastructure. The under-graduate programs have been made credits based and a large
						number of electives are offered to the students. At present, NITUK has faculty 
						strength of 51.</p>

						<p>
							
						</p>

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