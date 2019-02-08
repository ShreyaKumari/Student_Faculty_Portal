<?php
$file_name= $_FILES['image']['name'];
$file_size= $_FILES['image']['size'];
$file_tmp= $_FILES['image']['tmp_name'];   //temp image in server


$div=explode('.',$file_name);   //converts string to array
$file_ext=strtolower(end($div));  //last element of array which is the extension
$unique_image=substr(md5(time()),0,10).".".$file_ext;     //fixing length


//$uni=time().uniqid(rand());
//$uploaded_image='upload/'.$uni.$file_name;
$uploaded_image='upload/'.$unique_image;
move_uploaded_file($file_tmp, $uploaded_image);

?>