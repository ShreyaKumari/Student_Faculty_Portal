<?php
include_once 'header3.php';

if(isset($_POST['send'])){
    $name=$arr['name'];
    $roll_no=$arr['user_name'];
    $fa=$arr['fa'];
    $msg=$_POST['msg'];
    $q="INSERT INTO fa_contact_msg(name, roll_no, fa, msg) VALUES('$name','$roll_no','$fa','$msg')";
    $info= mysqli_query($link,$q);
     
    if($info){
    header("location: sent.php");
    }
}
?>

		<!-- Main -->
            <div class="main">
				<div class="inner">
					<header class="align-center">
						    <div class="container" style="align:center;">
                              <form style="margin-left:50px; margin-top:30px;" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                
                                <div class="row">
                                  <div class="col-75">
                                    <label for="name">Name of Student:</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="text" name="name" id="name" value=<?php echo $arr['name'];?> readonly>
                                  </div>
                                </div>
                               
                               <br>
                               
                                <div class="row">
                                  <div class="col-75">
                                    <label for="roll">Roll No. of Student:</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="text" name="roll" id="roll" value=<?php echo $arr['user_name'];?>  readonly>
                                  </div>
                                </div>
                               
                               <br>
                                                    
                                <div class="row">
                                  <div class="col-75">
                                    <label for="fa">Name of Faculty Advisor:</label>
                                  </div>
                                  <div class="col-75">
                                    <input type="text" name="fa" id="fa" value=<?php echo $arr['fa'];?>  readonly>
                                  </div>
                                </div>
                               
                               <br>
                                <div class="row">
                                  <div class="col-75">
                                    <label for="msg">Message:</label>
                                  </div>
                                  <div class="col-75">
                                    <textarea id="subject" name="msg" id="msg" style="width:300px; height:150px"></textarea>
                                  </div>
                                </div>
                                
                                <br>
                                <div class="row"  style="margin-left:80px">
                                  <input type="submit" name="send" value="Send">
                                </div>
                              </form>
                            </div>


                        
					</header>
                    
					

            </div>
	

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>	