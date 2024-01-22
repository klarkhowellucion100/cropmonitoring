<?php include_once 'heading.php';?>


<?php
include 'db.inc.php';

//session
$uid = $_SESSION['id'];
$time = "Active now";

$query=mysqli_query($conn, "UPDATE usertablehubpos SET status='Active now' WHERE id=$uid");
// echo '-------------------------------------'.$userprofile;

//echo $time;


?>


<?php
$date_f = date('Y-m-d');
?>

<link href="css/csstable.css" rel="stylesheet" type="text/css" />

<div class="container-fluid">

        <?php $yearnow=date('Y'); ?>

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Transaction</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END)page title -->

                    <div class="row" style="background: white; padding-top: 20px; padding-bottom: 20px;">
                        <div class="col-xl-12">

                                    <h4 class="card-title">Production Schedule</h4>
                                    <p class="card-title-desc">Projected vs Actual</p>

                                        <div class="d-flex flex-wrap gap-2 mb-10">
                                            <button onclick="goCommitment()" type="button" class="btn btn-outline-primary waves-effect waves-light">
                                                Reported <!--<i class="uil uil-arrow-right ms-2"></i> -->
                                            </button>
                                            <button onclick="goValidated()" type="button" class="btn btn-outline-primary waves-effect waves-light">
                                                Validated <!--<i class="uil uil-arrow-right ms-2"></i>--> 
                                            </button>
                                            <button onclick="goAdvisory()" type="button" class="btn btn-primary waves-effect waves-light">
                                                <!--<i class="uil uil-check me-2"></i>--> Advisory
                                            </button>

                                            <script>
                                                function goCommitment() {
                                                // Change the URL to the desired destination
                                                window.location.href = 'dashboardcommitment.php';
                                                }

                                                function goValidated() {
                                                // Change the URL to the desired destination
                                                window.location.href = 'dashboardcommitmentvalidated.php';
                                                }

                                                function goAdvisory() {
                                                // Change the URL to the desired destination
                                                window.location.href = 'dashboardcommitmentadvisory.php';
                                                }
                                            </script>
                                          
                                        </div>
                                        <br>

                       
 <!-- ##################################################################Start Proejcted Tables ################################################################################################# -->
                                            <div class="row">
                                                    <div class="col-xl-12">
                                                                <h4 class="card-title mb-4">Production Schedule (Per Commodity and Farmer)</h4>
                                                                <div class="mt-3">
                                                                    
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <div class="commo">
                                                                                <input id="myInput" class="form-control" type="text" placeholder="Search..">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

<!--################################################################################################ Update Modal Start ######################################################################-->
                                                                          <!-- Start Modal -->
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                            



                                                                            
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary" id="submit-btn">Save changes</button>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                        <!-- End Modal -->
<!--################################################################################################ Update Modal End ######################################################################-->

                                                                            <div class="table-responsive" id='table-overallview'>
                                                                                <table class="table table-bordered border-info wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; width: 500px;" id="yourTableId01">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th style="display:none;">ID</th>
                                                                                            <th >Commodity</th>
                                                                                            <th >Barangay</th>
                                                                                            <th >Name</th>                                                                
                                                                                            <th >Hills</th>
                                                                                            <th >Date Sown</th>
                                                                                            <th >Date Transplanted</th>
                                                                                            <th >Date of First Harvest</th>
                                                                                            <th >Date of Last Harvest</th>
                                                                                            
                                                                                            <?php
                                                                                                $year_now = date('Y');
                                                                                                $year = $year_now;

                                                                                                // Loop through weeks 1 to 53
                                                                                                for ($week = 1; $week <= 53; $week++) {
                                                                                                    // Calculate the starting date of each week (assuming Sunday is the start of the week)
                                                                                                    $startDate = new DateTime();
                                                                                                    $startDate->setISODate($year, $week, 1); // Setting the day of the week to Monday (1)

                                                                                                    // Adjust for week 1 starting from the previous year
                                                                                                    if ($week === 1) {
                                                                                                        $startDate->modify('-0 week');
                                                                                                    }

                                                                                                    // Calculate the END date by adding 6 days to the starting date (ending on Sunday)
                                                                                                    $endDate = clone $startDate;
                                                                                                    $endDate->modify('+6 days');

                                                                                                    // Echo the range of dates for each week with the desired date format
                                                                                                    echo "<th style='width:100px;' data-label='W$week'>" . "Week". $week . "<br>" . $startDate->format('M d') . ' - ' . $endDate->format('M d') . "</th>";
                                                                                                } 
                                                                                            ?>
                                                                                                <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>

                                                                                    <tbody id="myTable">
                                                                                        <?php
                                                                                            include 'db.inc.php';
                                                                                            include 'queries/dashboardcommitmentqueryadvisory.php';
                                                                                           
                                                                                        while($result1 = mysqli_fetch_array($query1)): ?>
                                                                                        <tr>
                                                                                                                            
                                                                                        
                                                                                            <td style="display:none;" data-label="Id"><?php echo $result1 ['id']; ?></td>
                                                                                            <td data-label="Commodity"><?php echo $result1 ['comm']; ?></td>
                                                                                            <td data-label="Barangay"><?php echo $result1 ['barangay']; ?></td>
                                                                                            <td data-label="Name"><?php echo $result1 ['name']; ?></td>
                                                                                            <td data-label="Hills"><?php echo $result1 ['hills']; ?></td>
                                                                                            <td data-label="Date Sown"><?php echo date('M d, Y', strtotime($result1['date_sown'])); ?></td>
                                                                                            <td data-label="Date Transplanted"><?php echo date('M d, Y', strtotime($result1['date_trans'])); ?></td>
                                                                                            <td data-label="Date of First Harvest"><?php echo date('M d, Y', strtotime($result1['date_harvest'])); ?></td>
                                                                                            <td data-label="Date of Last Harvest"><?php echo date('M d, Y', strtotime($result1['last_harvest_date'])); ?></td>
                                                                                            <?php
                                                                                            for ($week = 1; $week <= 53; $week++) {
                                                                                                $startDate = new DateTime();
                                                                                                $startDate->setISODate($year, $week, 1); // Setting the day of the week to Monday (1)

                                                                                                // Adjust for week 1 starting from the previous year
                                                                                                if ($week === 1) {
                                                                                                    $startDate->modify('-0 week');
                                                                                                }

                                                                                                // Calculate the END date by adding 6 days to the starting date (ending on Sunday)
                                                                                                $endDate = clone $startDate;
                                                                                                $endDate->modify('+6 days');

                                                                                                $currentWeek = $result1['Week' . $week];
                                                                                                echo "<td data-label='W$week " . $startDate->format('M d') . " - " . $endDate->format('M d') . "' style=\"";
                                                                                                
                                                                                                if ($result1['status' . $week] == 'On Track') {
                                                                                                    echo "background:green; color: white;";
                                                                                                } elseif ($result1['status' . $week] == 'Partially Damaged') {
                                                                                                    echo "background:orange; color: white;";
                                                                                                } elseif ($result1['status' . $week] == 'Totally Damaged') {
                                                                                                    echo "background:red; color: white;";
                                                                                                }

                                                                                                echo "\">
                                                                                                    <span style=\"font-weight: bold;\">";
                                                                                                
                                                                                                if ($result1['Week' . $week] == 0) {
                                                                                                    echo "";
                                                                                                } else {
                                                                                                    echo number_format($result1['Week' . $week], 2);
                                                                                                }

                                                                                                echo "</span>
                                                                                                    [<span style=\"font-style: italic;\">";
                                                                                                echo $result1['status' . $week];
                                                                                                echo "</span>]
                                                                                                    </td>";
                                                                                            }
                                                                                            ?>

                                                                                           

                                                                                            <td data-label="Action">
                                                                                                <a class="prodinfo btn btn-raised btn-info waves-effect" data-id="<?php echo $result1['id'];?>"><i class="uil-file-search-alt"></i></a>
                                                                                                <a onClick="deleteme('<?php echo $result1['code'];?>')" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>
                                                                                            </td>
                                                                                                                                    
                                                                                        </tr>
                                                                                            <?php endwhile; ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>


                                                                            <script>         
                                                                                    $(document).ready(function(){
                                                                                    $('.prodinfo').click(function(){
                                                                                        var id = $(this).data('id');
                                                                                    
                                                                                        $.ajax({
                                                                                                    url:"dashboardcommitmentupdate.php",
                                                                                                    method:"POST",
                                                                                                    data:{id:id},
                                                                                                    success:function(data){
                                                                                                        $('.modal-body').html(data);
                                                                                                        $('#exampleModal').modal('show');
                                                                                                        displayData();
                                                                                                    }
                                                                                                });

                                                                                    })
                                                                                })
                                                                            </script>

                                                                        
                                                                            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                                                            
                                                                            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
                                                                            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

                                                                            <!-- Your existing HTML code with DataTable initialization -->
                                                                            <!--<script>
                                                                                $(document).ready(function() {
                                                                                    $('#yourTableId01').DataTable({
                                                                                        // Add any DataTable options here
                                                                                          "paging": false
                                                                                    });
                                                                                });
                                                                            </script>-->

                                                                            <script>
                                                                            $(document).ready(function(){ 
                                                                            $("#myInput").on("keyup", function() {
                                                                                var value = $(this).val().toLowerCase();
                                                                                $("#myTable tr").filter(function() {
                                                                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                                                                });
                                                                            });
                                                                            });
                                                                            </script>


                                                        </div>
                                                    </div>
                                                        <!-- END)card-body-->
                                                </div>
                                                    <!-- END)card-->

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                                <h4 class="card-title mb-4">Production Schedule (Per Commodity)</h4>
                                                                <div class="mt-3">

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <div class="commo">
                                                                                    <input id="myInput2" class="form-control" type="text" placeholder="Search..">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered border-info dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; width: 500px;" id="yourTableId01">
                                                                                    <thead>
                                                                                        <style>
                                                                                            th{
                                                                                                text-align: center;
                                                                                                vertical-align: middle;
                                                                                                width: 500px;
                                                                                            }
                                                                                        </style>
                                                                                        <tr>
                                                                                        
                                                                                            <th >Commodity</th>
                                                                                            <?php
                                                                                                $year_now = date('Y');
                                                                                                $year = $year_now;

                                                                                                // Loop through weeks 1 to 53
                                                                                                for ($week = 1; $week <= 53; $week++) {
                                                                                                    // Calculate the starting date of each week (assuming Sunday is the start of the week)
                                                                                                    $startDate = new DateTime();
                                                                                                    $startDate->setISODate($year, $week, 1); // Setting the day of the week to Monday (1)

                                                                                                    // Adjust for week 1 starting from the previous year
                                                                                                    if ($week === 1) {
                                                                                                        $startDate->modify('-0 week');
                                                                                                    }

                                                                                                    // Calculate the END date by adding 6 days to the starting date (ending on Sunday)
                                                                                                    $endDate = clone $startDate;
                                                                                                    $endDate->modify('+6 days');

                                                                                                    // Echo the range of dates for each week with the desired date format
                                                                                                    echo "<th style='width:100px;' data-label='W$week'>" . "Week". $week . "<br>" . $startDate->format('M d') . ' - ' . $endDate->format('M d') . "</th>";
                                                                                                } 
                                                                                            ?>

                                                                                        </tr>
                                                                                    </thead>

                                                                                    <tbody id="myTable2">
                                                                                        <?php
                                                                                            include 'db.inc.php';
                                                                                            include 'queries/dashboardcommitmentqueryadvisory.php';
                                                                                        while($result1 = mysqli_fetch_array($query2)): ?>
                                                                                        <tr>
                                                                                        
                                                                                            <td data-label="Commodity"><?php echo $result1 ['comm']; ?></td>
                                                                                        
                                                                                            <?php
                                                                                                for ($week = 1; $week <= 53; $week++) {
                                                                                                    $startDate = new DateTime();
                                                                                                    $startDate->setISODate($year, $week, 1); // Setting the day of the week to Monday (1)

                                                                                                    // Adjust for week 1 starting from the previous year
                                                                                                    if ($week === 1) {
                                                                                                        $startDate->modify('-0 week');
                                                                                                    }

                                                                                                    // Calculate the END date by adding 6 days to the starting date (ending on Sunday)
                                                                                                    $endDate = clone $startDate;
                                                                                                    $endDate->modify('+6 days');

                                                                                                    $currentWeek = $result1['Week' . $week];

                                                                                                    $value = $result1['Week' . $week];
                                                                                                    echo "<td data-label='W$week " . $startDate->format('M d') . " - " . $endDate->format('M d') . "'>";
                                                                                                    echo ($value == 0) ? "" : number_format($value, 2);
                                                                                                    echo "</td>";
                                                                                                }
                                                                                            ?>                       
                                                                                        </tr>
                                                                                            <?php endwhile; ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>

                                                                            <script>
                                                                            $(document).ready(function(){
                                                                            $("#myInput2").on("keyup", function() {
                                                                                var value = $(this).val().toLowerCase();
                                                                                $("#myTable2 tr").filter(function() {
                                                                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                                                                });
                                                                            });
                                                                            });
                                                                            </script>
                                                             
                                                        </div>
                                                    </div>
                                                        <!-- END)card-body-->
                                                </div>
                                                    <!-- END)card-->


                                                    <div class="row">
                                                    <div class="col-xl-12">
                                                                <h4 class="card-title mb-4">Production Schedule (Per Farmer)</h4>
                                                                <div class="mt-3">
                                                                    
                                                                <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <div class="commo">
                                                                                    <input id="myInput3" class="form-control" type="text" placeholder="Search..">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered border-info dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; width: 500px;" id="yourTableId01">
                                                                                    <thead>
                                                                                        <style>
                                                                                            th{
                                                                                                text-align: center;
                                                                                                vertical-align: middle;
                                                                                                width: 500px;
                                                                                            }
                                                                                        </style>
                                                                                        <tr>
                                                                                        
                                                                                            <th >Farmer Name</th>
                                                                                        
                                                                                            <?php
                                                                                                $year_now = date('Y');
                                                                                                $year = $year_now;

                                                                                                // Loop through weeks 1 to 53
                                                                                                for ($week = 1; $week <= 53; $week++) {
                                                                                                    // Calculate the starting date of each week (assuming Sunday is the start of the week)
                                                                                                    $startDate = new DateTime();
                                                                                                    $startDate->setISODate($year, $week, 1); // Setting the day of the week to Monday (1)

                                                                                                    // Adjust for week 1 starting from the previous year
                                                                                                    if ($week === 1) {
                                                                                                        $startDate->modify('-0 week');
                                                                                                    }

                                                                                                    // Calculate the END date by adding 6 days to the starting date (ending on Sunday)
                                                                                                    $endDate = clone $startDate;
                                                                                                    $endDate->modify('+6 days');

                                                                                                    // Echo the range of dates for each week with the desired date format
                                                                                                    echo "<th style='width:100px;' data-label='W$week'>" . "Week". $week . "<br>" . $startDate->format('M d') . ' - ' . $endDate->format('M d') . "</th>";
                                                                                                } 
                                                                                            ?>

                                                                                        </tr>
                                                                                    </thead>

                                                                                    <tbody id="myTable3">
                                                                                        <?php
                                                                                        include 'db.inc.php';
                                                                                        include 'queries/dashboardcommitmentqueryadvisory.php';
                                                                                        while($result1 = mysqli_fetch_array($query3)): ?>
                                                                                        <tr>
                                                                                        
                                                                                            <td data-label="Name"><?php echo $result1 ['name']; ?></td>
                                                                                            
                                                                                            <?php
                                                                                                for ($week = 1; $week <= 53; $week++) {
                                                                                                    $startDate = new DateTime();
                                                                                                    $startDate->setISODate($year, $week, 1); // Setting the day of the week to Monday (1)

                                                                                                    // Adjust for week 1 starting from the previous year
                                                                                                    if ($week === 1) {
                                                                                                        $startDate->modify('-0 week');
                                                                                                    }

                                                                                                    // Calculate the END date by adding 6 days to the starting date (ending on Sunday)
                                                                                                    $endDate = clone $startDate;
                                                                                                    $endDate->modify('+6 days');

                                                                                                    $currentWeek = $result1['Week' . $week];

                                                                                                    $value = $result1['Week' . $week];
                                                                                                    echo "<td data-label='W$week " . $startDate->format('M d') . " - " . $endDate->format('M d') . "'>";
                                                                                                    echo ($value == 0) ? "" : number_format($value, 2);
                                                                                                    echo "</td>";
                                                                                                }
                                                                                            ?>  


                                                                                

                                                                                        
                                                                                        
                                                                                        
                                                                                                                                    
                                                                                        </tr>
                                                                                            <?php endwhile; ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>

                                                                        

                                                                            <script>
                                                                            $(document).ready(function(){
                                                                            $("#myInput3").on("keyup", function() {
                                                                                var value = $(this).val().toLowerCase();
                                                                                $("#myTable3 tr").filter(function() {
                                                                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                                                                });
                                                                            });
                                                                            });
                                                                            </script>
                                                        </div>
                                                    </div>
                                                        <!-- END)card-body-->
                                                </div>
                                                    <!-- END)card-->
                                        
                                            
                                                    <script>
                                                            function deleteme(delid){
                                                            const swalWithBootstrapButtons = Swal.mixin({
                                                        customClass: {
                                                            confirmButton: 'btn btn-success',
                                                            cancelButton: 'btn btn-danger'
                                                        },
                                                        buttonsStyling: false
                                                        })

                                                        swalWithBootstrapButtons.fire({
                                                        title: 'Are you sure?',
                                                        text: "You won't be able to revert this!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonText: 'Yes, delete it!',
                                                        cancelButtonText: 'No, cancel!',
                                                        reverseButtons: true
                                                        }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            swalWithBootstrapButtons.fire(
                                                            'Deleted!',
                                                            'Your file has been deleted.',
                                                            'success'
                                                            ).then(() => {
                                                                window.location.href='dashboardcommitmentprocess.php?delete=' +delid+ '';
                                                                });
                                                        
                                                        } else if (
                                                            /* Read more about handling dismissals below */
                                                            result.dismiss === Swal.DismissReason.cancel
                                                        ) {
                                                            swalWithBootstrapButtons.fire(
                                                            'Cancelled',
                                                            'Your imaginary file is safe :)',
                                                            'error'
                                                            )
                                                        }
                                                        })
                                                        }
                                                        </script>


                        
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                


                        
                    


</div>
<!-- container-fluid -->
                                
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>



<?php include_once 'footer.php'; ?>



    
                 

                    
