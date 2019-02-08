<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style type="text/css">
   
   .header
   {
    background-color:#ffffff  ;
    
    height:80px;
    width:100%;
    border-radius: 4px;
    font-family:verdana header;
    border-style:solid;
    border-color: #E0DAEA;
    border-width: 10px 0px;

    
    }
    .header a
    {
      float:left;
      color:black;
      text-align: center;
      text-decoration:none;
      padding:20px;
      font-size: 20px;
      border-radius: 4px;
      top: 40px;
    }
    .logo
    {
    
      float:left;
      padding:10px;
    
    
    
      font-size: 25px;
      border-radius: 4px;
    }
    }
    .header a:hover {
  background-color: #ddd;
  color: black;
}

.inner
{   padding-right: 30px;
  float:right;
  margin-right: 10px;
}

.fil {
    -webkit-filter: grayscale(100%); 
    filter: grayscale(80%);
   /* filter:drop-shadow(8px 8px 10px gray);
    filter:opacity(60%);*/
}
.container
{
  position:relative;
  font-family:verdana;
}
.centered {
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #000080  ;
}
.left 
{
   position: absolute;
    top: 70%;
    left: 5%;
    background-color:#999999;
    color: #1C1B1C;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 10px;
    font-size: 25px;
}

.right {
    
    position: absolute;
    top: 70%;
    right: 5%;
    background-color: #999999;
    color: #1C1B1C;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 10px;
    font-size: 25px;
}

}



  </style>
</head>
<body>
<div class="header">
  
    <div class="logo"><img src="images/nitlogo.jpg" style="height:60px"></div>
    <div class="inner">
      <a href="" >Home</a>
      
      <a href="">About</a>
      
     <a href="">Announcements</a>
     <a href="">Contact</a>
      

      </div>
    
  </div>
 <div class="container"> <img src="images/uk.jpg" alt="" class="fil" width="100%" height="450px" >
  <div class="centered"><h3 style="font-size: 30px; font-family:verdana; text-align: center; ">Registration Form<br><br>Autumn Semester:2018</h3></div>

  <div class="left">
            
              <a href="form.php" style="text-decoration: none;"><h3>Student Form</h3></a>
            
            </div>

            <div class="right">
              
              <a href="login.html" style="text-decoration: none;"><h3>Faculty Login</h3></a>
              
            </div></div>

</body>
</html>