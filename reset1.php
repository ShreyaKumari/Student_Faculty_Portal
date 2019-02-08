<?php
include_once 'connect.php';
$err='';
if (isset($_POST['submit'])  && $_SERVER['REQUEST_METHOD']=== 'POST') {
     $oldpassword=$_POST['oldpassword'];
    
    $newpassword=$_POST['newpassword'];
     $confirmpassword=$_POST['confirmpassword'];

     if($newpassword!=$confirmpassword)
     {
        $err="password mismatched";
     }
     else
        {



     session_start();
     $roll_no=$_SESSION['roll_no'];
     $data=mysqli_query($link,"SELECT password FROM stu_log where user_name= '$roll_no' ");
     $row=mysqli_num_rows($data);
     $arr=mysqli_fetch_assoc($data);
     if($oldpassword==$arr['password'])
    
     {   
        $query= "UPDATE stu_log SET password= '$newpassword' WHERE user_name= '$roll_no' ";
        $data=mysqli_query($link,$query);
        if($data)
        {
            $err="password reset successfully";
        }  
    
      }
else

  $err="invalid Password";
    }
    }  










?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration Form </title>

    <!-- Bootstrap -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/animate.min.css" rel="stylesheet">
    <link href="css1/custom.min.css" rel="stylesheet">
    <style type="text/css">
        .error
        {
            color:red;
        }
    </style>
</head>

<br>





<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">   <!--$_SERVER why?-->
            <h1>Password Reset Form</h1>
               <span class="error"><?php echo $err;?></span>
            
            <div>
                <input type="password" name="oldpassword" class="form-control" placeholder="old password" required=""/>
                 
            </div>
             <div>
                <input type="password" name="newpassword" class="form-control" placeholder=" new password" required=""/>
                 
            </div>
             <div>
                <input type="password" name="confirmpassword" class="form-control" placeholder="confirm password" required=""/>
                
                 
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit" value="Reset">
              
                
            </div>
</form>
               <div>
<a href="portal.php" ><b><span style="color:black; font-size: 20px;"><input class="btn btn-default submit" type="submit" name="back" value="Back"></span></b></a>
</div>

            <div class="clearfix"></div>

          


</body>
</html>