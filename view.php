<?php
include_once 'header.php';
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <!--<h3>Plain Page</h3>-->
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
                                <h2>Enrollment Status</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               <table class="tbl">
                                <tr>
                                <th> Students who have enrolled </th>
                                <th> Students who are left</th>
                                </tr>
                                <tr>
                                <td>
                                <ol>
                                <?php
                               session_start();
                                $id=$_SESSION['id'];
                                $insert1="SELECT * FROM fa_log WHERE id='$id' ";
                                $data1=mysqli_query($link,$insert1);
                                $arr1=mysqli_fetch_assoc($data1);
                                $fa=$arr1['user_name'];
                                $data= "SELECT * FROM stu_log WHERE fa='$fa' AND filled='done'";
                                $q= mysqli_query($link, $data);
                                while($arr=mysqli_fetch_assoc($q)){
                                     if($arr['accept']=="yes")
                                     {
                                     ?>
                                       <a href="pdfcreate.php?id=<?php echo base64_encode($arr['user_name']);?>">
                                        <?php echo "<li>".$arr['user_name']."</li>";?></a>
                                       <?php
                                     }
                                       else
                                       {
                                       ?>
                                       <a href="agree.php?id=<?php echo base64_encode($arr['user_name']);?>">
                                   <?php echo "<li>".$arr['user_name']."</li>";?></a>
                                   
                                   <?php
                                       }
                        
                                }
                                ?> 
                                </ol>
                                </td>
                                <td>
                                <ol>
                                 <?php
                                session_start();
                                $id=$_SESSION['id'];
                                $insert1="SELECT * FROM fa_log WHERE id='$id' ";
                                $data1=mysqli_query($link,$insert1);
                                $arr1=mysqli_fetch_assoc($data1);
                                $fa=$arr1['user_name'];
                                $insert2= "SELECT * FROM stu_log WHERE fa='$fa' AND filled IS NULL";
                                $data2= mysqli_query($link, $insert2);
                                 
                                    while($arr2=mysqli_fetch_assoc($data2)){
                                        
                                    
                                    echo "<li>".$arr2['user_name']."</li>";
                                   
                                   
                                }
                                
                                ?>
                                </ol>
                                </td
                                </tr>
                                
                                
                                </table>
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