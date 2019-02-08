<?php
require 'connect.php';
if (isset($_POST['submit']))
{
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V15</title>
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
			    text-align: center;
			}

			#customers td, #customers th {
			    border: 1px solid #ddd;
			    padding: 8px;
			}

			<#customers tr:nth-child(even){background-color: #f2f2f2;}

			#customers tr:hover {background-color: #ddd;}

			#customers th {
			    padding-top: 12px;
			    padding-bottom: 12px;
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
				</span>

				<span class="contact100-form-title-2">
					<b>Registration Form</b><br>
					Autumn Semester-2018
					<br><br>
					<b>Section: P/Q</b>
				</span>
			</div>

	<table id="customers">
			  <tr style="background-image: url(images/bg-01.jpg);">
					<th> S No.</th>
					<th> Course Code</th>
					<th> Course Title</th>
					<th> Slot</th>
					<th> Structure<br>L-T-P</th>
					<th> DC/DE/OC/AU/HM/UN/F</th>
					<th> Credits</th>
			</tr>

			<tr>
				<td>1</td>
				<td>SCL102</td>
				<td>Applied Mathematics-I</td>
				<td>A</td>
				<td>3-2-0</td>
				<td></td>
				<td>4</td>
			</tr>

			<tr>
				<td>2</td>
				<td>SCL105</td>
				<td>Applied Chemistry</td>
				<td>B</td>
				<td>3-0-2</td>
				<td></td>
				<td>4</td>
			</tr>

			<tr>
				<td>3</td>
				<td>CEL102</td>
				<td>Environmental Science</td>
				<td>C</td>
				<td>2-0-0</td>
				<td></td>
				<td>2</td>
			</tr>

			<tr>
				<td>4</td>
				<td>HMP103</td>
				<td>Written English</td>
				<td>D</td>
				<td>1-2-0</td>
				<td></td>
				<td>2</td>
			</tr>
			<tr>
				<td>5</td>
				<td>MEL101</td>
				<td>Engineering Drawing</td>
				<td>E</td>
				<td>3-0-2</td>
				<td></td>
				<td>4</td>
			</tr>
			<tr>
				<td>6</td>
				<td></td>
				<td></td>
				<td>F</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>7</td>
				<td>CSL101</td>
				<td>Concepts in Programming Languages</td>
				<td>G</td>
				<td>3-0-2</td>
				<td>DC</td>
				<td>4</td>
			</tr>
			<tr>
				<td>8</td>
				<td></td>
				<td></td>
				<td>H</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<tr>
				<td>9</td>
				<td>EEP101</td>
				<td>Electrical Workshop</td>
				<td>-</td>
				<td>0-0-2</td>
				<td></td>
				<td>1</td>
			</tr>

			<tr>
				<td></td>
				<td>SPB101</td>
				<td>Sports-I</td>
				<td>-</td>
				<td>0-0-4</td>
				<td></td>
				<td>0</td>
			</tr>

			<tr>
				<td></td>
				<td>ECB101</td>
				<td>Introduction to Engineering</td>
				<td>-</td>
				<td>0-0-0</td>
				<td></td>
				<td>0</td>
			</tr>
			
		</table>
		
				
	
		   
			
						
		
			

	<?php
	include_once 'footer.php';
	?>