<?php
include_once 'header4.php';
?>

        <!-- page content area main -->
        <div class="right_col" role="main" style="background-color:#fff;">
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
                       <!-- <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>-->
                            <div class="x_content">
                               <?php
                               $insert="SELECT * FROM notifyaccept WHERE student_name='$roll' ORDER BY id desc";
                               $data=mysqli_query($link,$insert);
                               while($arr=mysqli_fetch_assoc($data))
                               {
                                   echo $arr['message']."       ".$arr['time']."<br>";
                               }
                               
                               ?>
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