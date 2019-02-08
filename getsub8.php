<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
//$q1 = intval($_GET['q1']);

$con = mysqli_connect("sql301.epizy.com","epiz_22337425","3YtHaAuFTF","epiz_22337425_student_admin");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM tbl_courses WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
//$row = mysqli_fetch_array($result);
//$a=$row['Age'];
//mysqli_select_db($con,"ajax_demo");
   // $sql1="INSERT INTO user1('age') VALUES($a)";
   // $result1=mysqli_query($con,$sql1);
echo "<table>
<tr>
<th>Code</th>
<th>Title</th>
<th>Slot</th>
<th>Type</th>
<th>Credits</th>
<th>Branch</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['code'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['slot'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['credits'] . "</td>";
     echo "<td>" . $row['branch'] . "</td>";
    echo "</tr>";
    $a=$row['code'];
     $b=$row['title'];
      $c=$row['slot'];
       $d=$row['type'];
        $e=$row['credits'];
        // $f=$row['code'];
    mysqli_select_db($con,"ajax_demo");
    session_start();
   $roll_no=$_SESSION['roll_no'];
   $sql1="UPDATE tbl_students SET titleH='$b' WHERE roll_no='$roll_no'";
   $result1=mysqli_query($con,$sql1);
   
   $sql2="UPDATE tbl_students SET codeH='$a' WHERE roll_no='$roll_no'";
   $result2=mysqli_query($con,$sql2);
    
    $sql3="UPDATE tbl_students SET slotH='$c' WHERE roll_no='$roll_no'";
   $result3=mysqli_query($con,$sql3);
    
    $sql4="UPDATE tbl_students SET typeH='$d' WHERE roll_no='$roll_no'";
   $result4=mysqli_query($con,$sql4);
    
    $sql5="UPDATE tbl_students SET creditsH='$e' WHERE roll_no='$roll_no'";
   $result5=mysqli_query($con,$sql5);
    
    
}
echo "</table>";



?>
</body>
</html>