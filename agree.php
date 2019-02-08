<?php
require 'connect.php';
$id=base64_decode($_REQUEST['id']);
$insert="SELECT * FROM tbl_students WHERE roll_no='$id'";
$data=mysqli_query($link,$insert);
$row=mysqli_num_rows($data);

$arr=mysqli_fetch_assoc($data);

// $filename = "newpdffile";

 // include autoloader
 //require_once 'dompdf/autoload.inc.php';



// reference the Dompdf namespace
//use Dompdf\Dompdf;

// instantiate and use the dompdf class
//$dompdf = new Dompdf();

//$dompdf->loadHtml($html);
echo "<html>
    <head>
	<title></title>
	</head>
	<body>
    <center>
    <h1>NATIONAL INSTITUTE OF TECHNOLOGY,UTTARAKHAND</h1>
    
    <h1>Registration Form</h1>
    <h3>Autumn Semester,2018</h3>
    </center>
	<table width='100%' >
 <tr>
 <td><b>Name of the Student:</b>  <u>".$arr['name']."</u></td>
 </tr>
 
 <tr>
 <td><b>ID No.:</b>  <u>".$arr['id']."</u></td><td><b>Roll No. :</b>  <u>".$arr['roll_no']."</u</td>
 </tr>
  
 <tr>
 <td><b>Name Of Guardian:</b>  <u>".$arr['nameG']."</u</td>
 </tr>
  
  <tr>
 <td><b>Present address for Correspondence with the Guardian:</b>  <u>".$arr['addG']."</u</td>
 </tr>
  
  <tr>
 <td><b>Mobile No. of Guardian:</b>  <u>".$arr['phoneG']."</u</td>
 <td><b>Email ID:</b>  <u>".$arr['emailG']."</u</td>
 </tr>
 
  <tr>
 <td><b>Student's address in Srinagar,Garhwal:</b>  <u>".$arr['addS']."</u</td>
 </tr>
 
  <tr>
 <td><b>Mobile No. of Student:</b>  <u>".$arr['phoneS']."</u</td>
 <td><b>Email:</b>  <u>".$arr['emailS']."</u</td>
 </tr>
  
  <tr>
 <td><b>Credits Completed:</b>  <u>".$arr['credits']."</u</td>
 </tr>

  </table>
 I may kindly be allowed to register for the following courses:
 
 <table border='1' width='100%' style='border-collapse: collapse;'>
 <tr>
 <th> S No.</th>
<th> Course Code</th>
<th> Course Title</th>
<th> Slot</th>
<th> Structure<br>L-T-P</th>
<th> DC/DE/OC/<br>AU/HM/UN/F</th>
<th> Credits</th>
					
</tr>
<tr >
<td>1</td>
 <td>".$arr['codeA']." </td>
 <td>".$arr['titleA']."  </td>
 <td>A</td>
 <td>".$arr['strucA']."  </td>
 <td> ".$arr['typeA']." </td>
 <td> ".$arr['creditsA']." </td>
</tr>

<tr>
 <td>2</td>
 <td>".$arr['codeB']." </td>
 <td>".$arr['titleB']."  </td>
 <td>B</td>
 <td>".$arr['strucB']."  </td>
 <td> ".$arr['typeB']." </td>
 <td> ".$arr['creditsB']." </td>
</tr>

<tr>
 <td>3</td>
 <td>".$arr['codeC']." </td>
 <td>".$arr['titleC']."  </td>
 <td>C</td>
 <td>".$arr['strucC']."  </td>
 <td> ".$arr['typeC']." </td>
 <td> ".$arr['creditsC']." </td>
</tr>

<tr>
 <td>4</td>
 <td>".$arr['codeD']." </td>
 <td>".$arr['titleD']."  </td>
 <td>D</td>
 <td>".$arr['strucD']."  </td>
 <td> ".$arr['typeD']." </td>
 <td> ".$arr['creditsD']." </td>
</tr>

<tr>
 <td>5</td>
  <td>".$arr['codeE']." </td>
 <td>".$arr['titleE']."  </td>
 <td>E</td>
 <td>".$arr['strucE']."  </td>
 <td> ".$arr['typeE']." </td>
 <td> ".$arr['creditsE']." </td>
</tr>

<tr>
 <td>6</td>
 <td>".$arr['codeF']." </td>
 <td>".$arr['titleF']."  </td>
 <td>F</td>
 <td>".$arr['strucF']."  </td>
 <td> ".$arr['typeF']." </td>
 <td> ".$arr['creditsF']." </td>
</tr>

<tr>
 <td>7</td>
 <td>".$arr['codeG']." </td>
 <td>".$arr['titleG']."  </td>
 <td>G</td>
 <td>".$arr['strucG']."  </td>
 <td> ".$arr['typeG']." </td>
 <td> ".$arr['creditsG']." </td>
</tr>

<tr>
 <td>8</td>
  <td>".$arr['codeH']." </td>
 <td>".$arr['titleH']."  </td>
 <td>H</td>
 <td>".$arr['strucH']."  </td>
 <td> ".$arr['typeH']." </td>
 <td> ".$arr['creditsH']." </td>
</tr>

<tr>
 <td>9</td>
  <td> </td>
  <td> </td>
   <td> </td>
   <td> </td>
    <td> </td>
     <td> </td>
</tr>

<tr>
 <td>10</td>
  <td> </td>
  <td> </td>
   <td> </td>
   <td> </td>
    <td> </td>
     <td> </td>
</tr>
</table>
<br><br>
 <center>
<b> OR</b>
</center>
 
 <table border='1' width='100%' style='border-collapse: collapse;'>
 <tr>
 <th> S No.</th>
<th> Course Code</th>
<th> Course Title</th>
<th> Slot</th>
<th> Structure<br>L-T-P</th>
<th> DC/DE/OC/<br>AU/HM/UN/F</th>
<th> Credits</th>
    				
</tr>
 <tr >
 <td>1</td>
 <td> </td>
 <td>Internship</td>
 <td> </td>
 <td> </td>
 <td>OC </td>
 <td> 12</td>
</tr>
</table>
<br>
<form method='post'>
<input type='submit' name='Accept' value='Accept'>
<br>
<input type='submit' name='Reject' value='Reject'>
</form>
</body>
</html>";

if(isset($_POST['Accept']) )
{     $yes="yes";
     $insert="UPDATE stu_log SET accept='$yes' WHERE user_name='$id' ";
     $data=mysqli_query($link,$insert);
     
       $insert1= "INSERT INTO notifyaccept(student_name,message)  VALUES('$id','Your form has been accepted')";
       $data1=mysqli_query($link,$insert1);
     header("location:profile.php");
}
if(isset($_POST['Reject']) )
{
    $insert="UPDATE stu_log SET filled=null WHERE user_name='$id' ";
     $data=mysqli_query($link,$insert);
      $insert1= "INSERT INTO notifyaccept(student_name,message)  VALUES('$id','Your form has been rejected')";
       $data1=mysqli_query($link,$insert1);
      header("location:profile.php");
}


?>
