<?php
include_once 'connect.php';
$iderr='';
$nameSerr='';
$rollnoerr='';
$brancherr='';
$semerr='';
$nameGerr='';
$addGerr='';
$emailGerr='';
$phoneGerr='';
$addSerr='';
$emailSerr='';
$phoneSerr='';
$creditserr='';
$emailGferr='';
$emailSferr='';
$matcherr='';
if(isset($_POST['confirm'])){
	//$id=$_POST['id'];

    if(!empty($_POST['id']))
    {                   
        $id=$_POST['id'];
    }
    else
    {
        $iderr="Id is a required field...";
    }
	//$name=$_POST['name'];
	if(!empty($_POST['name']))
    {                   
        $name=$_POST['name'];
    }
    else
    {
        $nameSerr="Name is a required field...";
    }

/*	if(!empty($_POST['rollNo']))
    {                   
        $roll_no=$_POST['rollNo'];
    }
    else
    {
        $rollnoerr="Roll_No is a required field...";
    }  */
    session_start();

   $roll_no=$_SESSION['roll_no'];
    
    
	//$branch=$_POST['branch'];
	if(!empty($_POST['branch']))
    {                   
        $branch=$_POST['branch'];
    }
    else
    {
        $brancherr="Branch is a required field...";
    }
	//$sem=$_POST['sem'];
	if(!empty($_POST['sem']))
    {                   
        $sem=$_POST['sem'];
    }
    else
    {
        $semerr="Sem is a required field...";
    }
	//$nameG=$_POST['nameG'];
	if(!empty($_POST['nameG']))
    {                   
        $nameG=$_POST['nameG'];
    }
    else
    {
        $nameGerr="Name of Guardian is a required field...";
    }

	//$addG=$_POST['addG'];
	if(!empty($_POST['addG']))
    {                   
        $addG=$_POST['addG'];
    }
    else
    {
        $addGerr="Add. of Guardian is a required field...";
    }
	//$emailG=$_POST['emailG'];
	if(!empty($_POST['emailG']))
    {                   
        $emailG=$_POST['emailG'];
        if (!filter_var($emailG,FILTER_VALIDATE_EMAIL)) 
        {
            $emailGferr="Invalid Email Format";
        }
    }
    else
    {
    	$emailGerr="Email of Guardian is a required field...";
    }
   
	//$phoneG=$_POST['phoneG'];
	if(!empty($_POST['phoneG']))
    {                   
        $phoneG=$_POST['phoneG'];
      
    }
    else
    {
        $phoneGerr="Phone no of Guardian is a required field...";
    }
	//$addS=$_POST['addS'];
	if(!empty($_POST['addS']))
    {                   
        $addS=$_POST['addS'];
    }
    else
    {
        $addSerr="Add. of Student is a required field...";
    }
    //$emailS=$_POST['emailS'];
    if(!empty($_POST['emailS']))
    {                   
        $emailS=$_POST['emailS'];
        if (!filter_var($emailS,FILTER_VALIDATE_EMAIL)) 
        {
            $emailSferr="Invalid Email Format";
        }
    }
    else
    {
        $emailSerr="Email of Student is a required field...";
    }
    //$phoneS=$_POST['phoneS'];
    if(!empty($_POST['phoneS']))
    {                   
        $phoneS=$_POST['phoneS'];
    }
    else
    {
        $phoneSerr="Phone no of Student is a required field...";
    }
	//$credits=$_POST['credits'];
	if(!empty($_POST['credits']))
    {                   
        $credits=$_POST['credits'];
    }
    else
    {
        $creditserr="Credits completed is a required field...";
    }
    //$sec=$_POST['sec'];
	if($_POST['sec']=='P' || $_POST['sec']=='Q' || $_POST['sec']=='R' || $_POST['sec']=='S' )
	{
		$sec=$_POST['sec'];
	}
	else
	{
		$sec="no";
	}
		 if (!$iderr && !$nameSerr && !$rollnoerr && !$brancherr && !$semerr && !$nameGerr && !$addGerr && !$emailGerr && !$phoneGerr && !$addSerr && !$emailSerr && !$phoneSerr && !$creditserr)
     {
         
     $insert1= "UPDATE tbl_students SET name='$name',id='$id',branch='$branch',sem='$sem',section='$sec', nameG='$nameG',addG='$addG', emailG='$emailG', phoneG='$phoneG', addS='$addS', emailS='$emailS', phoneS='$phoneS', credits='$credits'
     WHERE roll_no='$roll_no' ";
     $data1=mysqli_query($link,$insert1);
	 
      

		switch($_POST['sem']) {
			case 'I':
				switch ($_POST['sec']) {
					case 'P': 
					header("location:sectionP.php");
						break;
					case 'Q':
					header("location:sectionP.php");
						break;
					case 'R':
					header("location:sectionR.php");
						break;
					case 'S':
					header("location:sectionR.php");
						break;	
						
				}
			break;

			case 'II':
				switch ($_POST['sec']) {
					case 'P': 
					header("location:sectionP.php");
						break;
					case 'Q':
					header("location:sectionP.php");
						break;
					case 'R':
					header("location:sectionR.php");
						break;
					case 'S':
					header("location:sectionR.php");
						break;
											
				}
			break;
			case 'V':
				header("location:courses.php");
			break;

			default:
				header("location:courses.php");
				break;
				
		}
     
	}
	}




?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0W2fSFMqjf5q8oARpclDEL1zJqT4ij8U&callback=initMap">
    </script>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/nituk.jpg);">
				<span class="contact100-form-title-1">
					NATIONAL INSTITUTE OF TECHNOLOGY,UTTARAKHAND
				</span>

				<span class="contact100-form-title-2">
					<b>Registration Form</b><br>
					Autumn Semester-2018
				</span>
			</div>

			<form class="contact100-form validate-form" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
				<div class="wrap-input100 validate-input" data-validate="Required">
                
					<span class="error"><?php echo $matcherr;?></span>
					<span class="label-input100">Name of Student:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $iderr;?></span>
					<span class="label-input100">ID No.:</span>
					<input class="input100" type="number" name="id" placeholder="Enter ID">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $rollnoerr;?></span>
					<span class="label-input100">Roll No.:</span>
				<!--	<input class="input100" type="text" name="rollNo" placeholder="Enter Roll No.">-->
					  <?php  session_start(); echo $_SESSION['roll_no']; ?>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $brancherr;?></span>
					<span class="label-input100">Branch:</span>
					
					<select id="branch" class="input100" type="text" name="branch" placeholder="Choose branch">
						<option ></option>
					    <option value="CIV">CIV</option>
					    <option value="CSE">CSE</option>
					    <option value="ECE">ECE</option>
					    <option value="EEE">EEE</option>
					    <option value="MEC">MEC</option>
					  </select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $semerr;?></span>
					<span class="label-input100">Semester:</span>
					  <select id="sem" class="input100" type="text" name="sem" placeholder="Choose semester" onchange="java_script_:show(this.options[this.selectedIndex].value)">
					  	<option></option>
					    <option value="I">I</option>
					    <option value="II">II</option>
					    <option value="III">III</option>
					    <option value="IV">IV</option>
					    <option value="V">V</option>
					    <option value="VI">VI</option>
					    <option value="VII">VII</option>
					    <option value="VIII">VIII</option>
					  </select>
					<span class="focus-input100"></span>
				</div>

				<div id="hiddenDiv" style="display:none" class="wrap-input100 validate-input">
					<span class="label-input100">Section:</span>
					  <select id="sec" class="input100" type="text" name="sec" placeholder="Choose section">
					  	<option>section</option>
					    <option value="P">P</option>
					    <option value="Q">Q</option>
					    <option value="R">R</option>
					    <option value="S">S</option>
					  </select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $nameGerr;?></span>
					<span class="label-input100">Name of Guardian:</span>
					<input class="input100" type="text" name="nameG" placeholder="Enter name of Guardian:">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $addGerr;?></span>
					<span class="label-input100">Present Address of Guardian:</span>
					<input class="input100" type="text" name="addG" placeholder="Enter Address of Guardian:">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input " data-validate="Required">
					<span class="error"><?php echo $emailGerr;?></span>
					<span class="error"><?php echo $emailGferr;?></span>
					<span class="label-input100">Email Id (Guardian):</span>
					<input class="input100" type="email" name="emailG" placeholder="Enter email addess of Guardian">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $phoneGerr;?></span>
					<span class="label-input100">Phone No. (Guardian):</span>
					<input class="input100" type="number" name="phoneG" placeholder="Enter phone number of Guardian">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $addSerr;?></span>
					<span class="label-input100">Present Address of Student:</span>
					<input class="input100" type="text" name="addS" placeholder="Enter Address of Student:">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="error"><?php echo $emailSerr;?></span>
					<span class="error"><?php echo $emailSferr;?></span>
					<span class="label-input100">Email (Student):</span>
					<input class="input100" type="email" name="emailS" placeholder="Enter email addess of Student">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $phoneSerr;?></span>
					<span class="label-input100">Phone No. (Student):</span>
					<input class="input100" type="number" name="phoneS" placeholder="Enter phone number of Student">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required">
					<span class="error"><?php echo $creditserr;?></span>
					<span class="label-input100">Credits Completed:</span>
					<input class="input100" type="number" name="credits" placeholder="Enter Credits completed till previous semester">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn" >
						<span>
							<input type="submit" name="confirm" value="Next" class="contact100-form-btn">
						</span>
				</div>
			</form>
		</div>
	</div>

<script>
	function show(aval) {
    if (aval == "I" || aval == "II") {
    hiddenDiv.style.display='inline-block';
    Form.fileURL.focus();
    } 
    else{
    hiddenDiv.style.display='none';
    }
  }
</script>



	<?php
	include_once 'footer1.php';
	?>