<?php
$err='';
require 'connect.php';
if(isset($_POST['logins']))
{    
	$name=$_POST['name'];
	$password=$_POST['password'];
    //$fa=$_POST['fa'];
    
	$data=mysqli_query($link,"SELECT * FROM admin_login WHERE user_name='$name' ");
   /* $data1=mysqli_query($link,"SELECT * FROM tbl_students WHERE roll_no='$name' AND (titleA IS NOT NULL OR titleB IS NOT NULL OR titleC IS NOT NULL OR titleD IS NOT NULL OR titleE IS NOT NULL OR titleF IS NOT NULL OR titleG IS NOT NULL OR titleH IS NOT NULL) ");
     $data2=mysqli_query($link,"SELECT * FROM tbl_students WHERE roll_no='$name' AND (titleA IS NULL AND titleB IS NULL AND titleC IS  NULL AND titleD IS  NULL AND titleE IS  NULL AND titleF IS  NULL AND titleG IS NULL AND titleH IS NULL)");
     $row1=mysqli_num_rows($data1);
     $row2=mysqli_num_rows($data2);*/

	$row=mysqli_num_rows($data);
      
	$arr=mysqli_fetch_assoc($data);

	if ($row>0) {
		
		if($arr['password']==$password)
		{
            header("location:admin.php");
            }
	    else
	     {
                $err="Invalid Password..";
	     }
	}
	else
		$err="Invalid User_Name..";
      }
      
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration_Form signup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
      #map {
        width: 100%;
        height: 100%;
        background-color: grey;
        -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
      }
    </style>
</head>
<body>


	<div class="container-contact100">
		<!--<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>-->
        <div id="map" class="contact100-map"></div>
    <script>
// Initialize and add the map
function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat:   30.221399, lng: 78.780045},
          zoom: 15,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });
      }
/*function initMap() {
  // The location of Uluru
 var uluru = {lat:   30.221399, lng: 78.780045};
// var uluru = {lat:   30.321915, lng: 78.026619};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}*/
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmsY3dRoJoEqdzc6C3D-gaOQoFnG64_1M&callback=initMap">
    </script>

    	<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/nit.png);">
                                 
				<span class="contact100-form-title-1">
					 NATIONAL INSTITUTE OF TECHNOLOGY,UTTARAKHAND
				</span>
				<span class="contact100-form-title-1">
					 Admin Login
				</span>

				<span class="contact100-form-title-3">
				</span>
			</div>

			<form class="contact100-form validate-form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>"><span><?php echo $err; ?></span>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					
					<span class="label-input100">User_name:</span>
					<input class="input100" type="text" name="name" placeholder="Enter your user name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Password:</span>
					<input class="input100" type="password" name="password" placeholder="Enter your password">
					<span class="focus-input100"></span>
				</div>

				

				
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="logins">
						<span>
							Login
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
