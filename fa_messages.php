  <?php
include_once 'header.php';
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                           <!-- <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." name="namer" >
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button" name="search">Go!</button>
                    </span>
                            </div>
                        </form>-->
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Messages from students</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                                <?php
                                session_start();
                                $id=$_SESSION['id'];
                                $data= mysqli_query($link,"SELECT * FROM fa_log WHERE id='$id' ");
                                $arr=mysqli_fetch_assoc($data);
                                $fa=$arr['user_name'];
                                
                                $data2=mysqli_query($link,"SELECT * FROM fa_contact_msg WHERE fa='$fa' ORDER BY id DESC");
                                while($arr2=mysqli_fetch_assoc($data2)):{
                                    ?>
                                    
                                    <td> Name of student: <?php echo $arr2['name']?></td><br>
                                     <td> Roll No.: <?php echo $arr2['roll_no']?></td><br>
                                      <td> Message: <?php echo $arr2['msg']?></td><br>
                                      <td><?php echo $arr2['time'];?></td><br><br>
                                    
                                <?php
                                }endwhile;
                                ?>
                               <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <?php
        include_once 'footer2.php';
        ?>