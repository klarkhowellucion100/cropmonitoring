<?php include_once 'heading.php';?>




<?php
  $date_f = date('Y-m-d');
  $date_t = date('H:i:s');
  $date_m = date('m');
  $date_d = date('d');
  $date_y = date('Y');

  function createRandomPassword() {
      $chars = "003232303232023232023456789";
      srand((double)microtime()*1000000);
      $i = 0;
      $pass = '' ;
      while ($i <= 7) {
  
          $num = rand() % 33;
  
          $tmp = substr($chars, $num, 1);
  
          $pass = $pass . $tmp;
  
          $i++;
  
      }
      return $pass;
  }
  $finalcode='FF'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
?>

                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Farmers' Production Monitoring</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Feedback</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- end row -->
<div id="feebackmain">

                    <div class="row">
                    <?php
                        include 'db.inc.php';
                        $query001 = mysqli_query($conn,"SELECT *, YEAR(date_harvest) AS year_harvest FROM production_cms WHERE YEAR(date_harvest)='$date_y' GROUP BY `name`");
                        while($result001 = mysqli_fetch_array($query001)): ?>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    
                                    <div class="clearfix"></div>
                                    <div class="mb-4">
                                        <img src="icons/farmericon.png" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                    </div>
                                    <h5 class="font-size-16 mb-1"><a href="#" class="text-reset "><?php echo $result001['name'];?></a></h5>

                                </div>

                                <div class="btn-group" role="group">
                                    <a class="feedbackfetch btn btn-outline-light text-truncate" onClick="productionupdate('name=<?php echo $result001 ['name'];?>&&year=<?php echo $date_y;?>')"><i class="uil-search-alt"></i>Production</a>
                                   <!-- <a class="feedbackfetch btn btn-outline-light text-truncate" onClick="deleteme01('delete=<?php echo $result001 ['name'];?>')"><i class="uil-search-alt"></i>Harvest</a>-->
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- end row -->
</div>
               


                                                <script>
                                                    function productionupdate(delid){
                                                        window.location.href='prodharvestmonitoringwhole.php?' +delid+ '';
                                                        }
                                                </script> 

                                                <script>
                                                    function deleteme(delid){
                                                        window.location.href='prodharvestmonitoringwhole.php?' +delid+ '';
                                                        }
                                                </script> 

                </div>
 



                



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





<?php include_once 'footer.php';?>