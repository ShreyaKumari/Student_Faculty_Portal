<?php
  include_once 'connect.php';
   
  $placeId = $_POST['placeId'];

  $query = "SELECT * from tbl_courses";
  $result = mysqli_query($link,$query);
  while ($row = mysqli_fetch_assoc($result)) {
    if ($placeId == $row['id']){
      echo json_encode($row);
    }
  }
?>