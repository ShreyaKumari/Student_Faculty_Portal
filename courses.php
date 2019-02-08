<?php
include_once 'connect.php';
if( isset($_POST['submit'])){

session_start();
   $roll_no=$_SESSION['roll_no'];
   
   
  
     $done="done";
   
     $insert="UPDATE stu_log SET filled='$done' WHERE user_name='$roll_no' ";
     $data=mysqli_query($link,$insert);
     header("location:portal.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script>
function showsub1(str) {
    if (str == "") {
        document.getElementById("txt1").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txt1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getsub1.php?q="+str,true);
        xmlhttp.send();
    }
}

function showsub2(str) {
    if (str == "") {
        document.getElementById("txt2").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txt2").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getsub2.php?q="+str,true);
        xmlhttp.send();
    }
}
function showsub3(str) {
    if (str == "") {
        document.getElementById("txt3").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txt3").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getsub3.php?q="+str,true);
        xmlhttp.send();
    }
}
function showsub4(str) {
    if (str == "") {
        document.getElementById("txt4").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txt4").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getsub4.php?q="+str,true);
        xmlhttp.send();
    }
}
function showsub5(str) {
    if (str == "") {
        document.getElementById("txt5").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txt5").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getsub5.php?q="+str,true);
        xmlhttp.send();
    }
}
function showsub6(str) {
    if (str == "") {
        document.getElementById("txt6").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txt6").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getsub6.php?q="+str,true);
        xmlhttp.send();
    }
}
function showsub7(str) {
    if (str == "") {
        document.getElementById("txt7").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txt7").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getsub7.php?q="+str,true);
        xmlhttp.send();
    }
}
function showsub8(str) {
    if (str == "") {
        document.getElementById("txt8").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txt8").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getsub8.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
    <title>Courses</title>
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
			#customers {
			    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			    border-collapse: collapse;
			    width: 100%;
			}

			#customers td, #customers th {
			    border: 1px solid #ddd;
			    padding: 8px;
			}

			#customers tr:nth-child(even){background-color: #f2f2f2;}

			#customers tr:hover {background-color: #ddd;}

			#customers th {
			    padding-top: 12px;
			    padding-bottom: 12px;
			    text-align: center;
			    color: white;
			}
			</style>
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/nituk.jpg);">
				<span class="contact100-form-title-1">
					NATIONAL INSTITUTE OF TECHNOLOGY,UTTARAKHAND
                    <?php echo $val; ?>
				</span>

				<span class="contact100-form-title-2">
					<b>Registration Form</b><br>
					Autumn Semester-2018
				</span>
			</div>
    <form name>
    <center><?php echo "Select 'No Subject' if you want the slot to be empty:";?></center>
    <br><br>
<select name="sub1" onchange="showsub1(this.value)">
  <option value="">Slot A:</option>
  <option value="1">Data Structure and Program Design</option>
  <option value="2"></option>
  <option value="3">c</option>
  <option value="4">d</option>
  <option value="33">No Subject</option>
  </select>
  
  <select name="sub2" onchange="showsub2(this.value)">
  <option value="34">Slot B:</option>
  <option value="5">Computer Graphics</option>
  <option value="6">f</option>
  <option value="7">g</option>
  <option value="8">h</option>
  <option value="34">No Subject</option>
  </select>
  
  <select name="sub3" onchange="showsub3(this.value)">
  <option value="">Slot C:</option>
  <option value="9">Real Time System</option>
  <option value="10">b</option>
  <option value="11">c</option>
  <option value="12">d</option>
  <option value="35">No Subject</option>
  </select>
  
  <select name="sub4" onchange="showsub4(this.value)">
  <option value="">Slot D:</option>
  <option value="13">Computer Organization</option>
  <option value="14">b</option>
  <option value="15">c</option>
  <option value="16">d</option>
  <option value="36">No Subject</option>
  </select>
  
  <select name="sub5" onchange="showsub5(this.value)">
  <option value="">Slot E:</option>
  <option value="17">Computer Networks</option>
  <option value="18">b</option>
  <option value="19">c</option>
  <option value="20">d</option>
  <option value="37">No Subject</option>
  </select>
  
  <select name="sub6" onchange="showsub6(this.value)">
  <option value="">Slot F:</option>
  <option value="21">Introduction to OOM</option>
  <option value="22">b</option>
  <option value="23">c</option>
  <option value="24">d</option>
  <option value="38">No Subject</option>
  </select>
  
  <select name="sub7" onchange="showsub7(this.value)">
  <option value="">Slot G:</option>
  <option value="25">DBMS</option>
  <option value="26">b</option>
  <option value="27">c</option>
  <option value="28">d</option>
  <option value="39">No Subject</option>
  </select>
  
  <select name="sub8" onchange="showsub8(this.value)">
  <option value="">Slot H:</option>
  <option value="29">CPL</option>
  <option value="30">Network Security</option>
  <option value="31">c</option>
  <option value="32">d</option>
  <option value="40">No Subject</option>
  </select>

</form>
<br>
<div id="txt1"><b>Slot A</b></div>
<div id="txt2"><b>Slot B</b></div>
<div id="txt3"><b>Slot C</b></div>
<div id="txt4"><b>Slot D</b></div>
<div id="txt5"><b>Slot E</b></div>
<div id="txt6"><b>Slot F</b></div>
<div id="txt7"><b>Slot G</b></div>
<div id="txt8"><b>Slot H</b></div>

	<?php
	include_once 'footer.php';
	?>