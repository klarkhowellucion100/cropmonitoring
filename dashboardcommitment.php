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


<div class="container-fluid">

        <?php $yearnow=date('Y'); ?>

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Transaction</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->








                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Production Schedule (Per Farmer)</h4>
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

                                                    <div class="table-responsive" id='table-overallview'>
                                                    
                                                        <table class="table table-bordered border-info dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; width: 500px;" id="yourTableId">
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
                                                                    <th >Barangay</th>
                                                                    <th >Name</th>                                                                
                                                                    <th >Hills</th>
                                                                    <th >Date Sown</th>
                                                                    <th >Date Transplanted</th>
                                                                    <th >Date of First Harvest</th>
                                                                    
                                                                    <?php
                                                                        // Set the year
                                                                        $year = 2024;

                                                                        // Loop through weeks 1 to 53
                                                                        for ($week = 1; $week <= 53; $week++) {
                                                                            // Calculate the starting date of each week (assuming Sunday is the start of the week)
                                                                            $startDate = new DateTime();
                                                                            $startDate->setISODate($year, $week, 1); // Setting the day of the week to Monday (1)

                                                                            // Adjust for week 1 starting from the previous year
                                                                            if ($week === 1) {
                                                                                $startDate->modify('-0 week');
                                                                            }

                                                                            // Calculate the end date by adding 6 days to the starting date (ending on Sunday)
                                                                            $endDate = clone $startDate;
                                                                            $endDate->modify('+6 days');

                                                                            // Echo the range of dates for each week with the desired date format
                                                                            echo "<th style='width:100px;'>W$week: " . $startDate->format('M d') . ' - ' . $endDate->format('M d') . "</th>";
                                                                        }
                                                                        ?>
                                                                        <td>Action</td>

                                                                </tr>
                                                            </thead>

                                                            <tbody id="myTable">
                                                                <?php
                                                                    include 'db.inc.php';
                                                                    $query1 = mysqli_query($conn,"SELECT * FROM harvest_schedule_2024_cms ORDER BY `comm` ASC");
                                                                    while($result1 = mysqli_fetch_array($query1)): ?>
                                                                <tr>
                                                                                                    
                                                                
                                                                   
                                                                    <td><?php echo $result1 ['comm']; ?></td>
                                                                    <td><?php echo $result1 ['barangay']; ?></td>
                                                                    <td><?php echo $result1 ['name']; ?></td>
                                                                    <td><?php echo $result1 ['hills']; ?></td>
                                                                    <td><?php echo date('M d, Y', strtotime($result1['date_sown'])); ?></td>
                                                                    <td><?php echo date('M d, Y', strtotime($result1['date_trans'])); ?></td>
                                                                    <td><?php echo date('M d, Y', strtotime($result1['date_harvest'])); ?></td>
                                                                    <td><?php if($result1 ['Week1'] == 0){echo "";}else{echo number_format($result1 ['Week1'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week2'] == 0){echo "";}else{echo number_format($result1 ['Week2'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week3'] == 0){echo "";}else{echo number_format($result1 ['Week3'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week4'] == 0){echo "";}else{echo number_format($result1 ['Week4'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week5'] == 0){echo "";}else{echo number_format($result1 ['Week5'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week6'] == 0){echo "";}else{echo number_format($result1 ['Week6'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week7'] == 0){echo "";}else{echo number_format($result1 ['Week7'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week8'] == 0){echo "";}else{echo number_format($result1 ['Week8'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week9'] == 0){echo "";}else{echo number_format($result1 ['Week9'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week10'] == 0){echo "";}else{echo number_format($result1 ['Week10'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week11'] == 0){echo "";}else{echo number_format($result1 ['Week11'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week12'] == 0){echo "";}else{echo number_format($result1 ['Week12'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week13'] == 0){echo "";}else{echo number_format($result1 ['Week13'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week14'] == 0){echo "";}else{echo number_format($result1 ['Week14'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week15'] == 0){echo "";}else{echo number_format($result1 ['Week15'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week16'] == 0){echo "";}else{echo number_format($result1 ['Week16'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week17'] == 0){echo "";}else{echo number_format($result1 ['Week17'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week18'] == 0){echo "";}else{echo number_format($result1 ['Week18'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week19'] == 0){echo "";}else{echo number_format($result1 ['Week19'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week20'] == 0){echo "";}else{echo number_format($result1 ['Week20'],2);}; ?></td>
                                                                    
                                                                    <td><?php if($result1 ['Week21'] == 0){echo "";}else{echo number_format($result1 ['Week21'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week22'] == 0){echo "";}else{echo number_format($result1 ['Week22'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week23'] == 0){echo "";}else{echo number_format($result1 ['Week23'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week24'] == 0){echo "";}else{echo number_format($result1 ['Week24'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week25'] == 0){echo "";}else{echo number_format($result1 ['Week25'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week26'] == 0){echo "";}else{echo number_format($result1 ['Week26'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week27'] == 0){echo "";}else{echo number_format($result1 ['Week27'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week28'] == 0){echo "";}else{echo number_format($result1 ['Week28'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week29'] == 0){echo "";}else{echo number_format($result1 ['Week29'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week30'] == 0){echo "";}else{echo number_format($result1 ['Week30'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week31'] == 0){echo "";}else{echo number_format($result1 ['Week31'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week32'] == 0){echo "";}else{echo number_format($result1 ['Week32'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week33'] == 0){echo "";}else{echo number_format($result1 ['Week33'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week34'] == 0){echo "";}else{echo number_format($result1 ['Week34'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week35'] == 0){echo "";}else{echo number_format($result1 ['Week35'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week36'] == 0){echo "";}else{echo number_format($result1 ['Week36'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week37'] == 0){echo "";}else{echo number_format($result1 ['Week37'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week38'] == 0){echo "";}else{echo number_format($result1 ['Week38'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week39'] == 0){echo "";}else{echo number_format($result1 ['Week39'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week40'] == 0){echo "";}else{echo number_format($result1 ['Week40'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week41'] == 0){echo "";}else{echo number_format($result1 ['Week41'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week42'] == 0){echo "";}else{echo number_format($result1 ['Week42'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week43'] == 0){echo "";}else{echo number_format($result1 ['Week43'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week44'] == 0){echo "";}else{echo number_format($result1 ['Week44'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week45'] == 0){echo "";}else{echo number_format($result1 ['Week45'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week46'] == 0){echo "";}else{echo number_format($result1 ['Week46'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week47'] == 0){echo "";}else{echo number_format($result1 ['Week47'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week48'] == 0){echo "";}else{echo number_format($result1 ['Week48'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week49'] == 0){echo "";}else{echo number_format($result1 ['Week49'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week50'] == 0){echo "";}else{echo number_format($result1 ['Week50'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week51'] == 0){echo "";}else{echo number_format($result1 ['Week51'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week52'] == 0){echo "";}else{echo number_format($result1 ['Week52'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week53'] == 0){echo "";}else{echo number_format($result1 ['Week53'],2);}; ?></td>


                                                                    <td>
                                                                        <a onClick="deleteme('<?php echo $result1['code'];?>')" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>
                                                                    </td>

                                                                
                                                                
                                                                
                                                                                                            
                                                                </tr>
                                                                    <?php endwhile; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                   

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
                                </div>
                            </div>
                                <!-- end card-body-->
                        </div>
                            <!-- end card-->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
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
                                                        <table class="table table-bordered border-info dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; width: 500px;">
                                                            <thead>
                                                                <style>
                                                                    th{
                                                                        text-align: center;
                                                                        vertical-align: middle;
                                                                        width: 500px;
                                                                    }
                                                                </style>
                                                                <tr>
                                                                  
                                                                    <th>Commodity</th>
                                                                   
                                                                    <?php
                                                                        // Set the year
                                                                        $year = 2024;

                                                                        // Loop through weeks 1 to 53
                                                                        for ($week = 1; $week <= 53; $week++) {
                                                                            // Calculate the starting date of each week (assuming Sunday is the start of the week)
                                                                            $startDate = new DateTime();
                                                                            $startDate->setISODate($year, $week, 1); // Setting the day of the week to Monday (1)

                                                                            // Adjust for week 1 starting from the previous year
                                                                            if ($week === 1) {
                                                                                $startDate->modify('-0 week');
                                                                            }

                                                                            // Calculate the end date by adding 6 days to the starting date (ending on Sunday)
                                                                            $endDate = clone $startDate;
                                                                            $endDate->modify('+6 days');

                                                                            // Echo the range of dates for each week with the desired date format
                                                                            echo "<th style='width:100px;'>W$week: " . $startDate->format('M d') . ' - ' . $endDate->format('M d') . "</th>";
                                                                        }
                                                                        ?>

                                                                </tr>
                                                            </thead>

                                                            <tbody id="myTable2">
                                                                <?php
                                                                    include 'db.inc.php';
                                                                    $query1 = mysqli_query($conn,"SELECT * FROM commodity_harvest_2024_cms ORDER BY `comm` ASC");
                                                                    while($result1 = mysqli_fetch_array($query1)): ?>
                                                                <tr>
                                                                   
                                                                    <td><?php echo $result1 ['comm']; ?></td>
                                                                   
                                                                    <td><?php if($result1 ['Week1'] == 0){echo "";}else{echo number_format($result1 ['Week1'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week2'] == 0){echo "";}else{echo number_format($result1 ['Week2'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week3'] == 0){echo "";}else{echo number_format($result1 ['Week3'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week4'] == 0){echo "";}else{echo number_format($result1 ['Week4'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week5'] == 0){echo "";}else{echo number_format($result1 ['Week5'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week6'] == 0){echo "";}else{echo number_format($result1 ['Week6'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week7'] == 0){echo "";}else{echo number_format($result1 ['Week7'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week8'] == 0){echo "";}else{echo number_format($result1 ['Week8'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week9'] == 0){echo "";}else{echo number_format($result1 ['Week9'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week10'] == 0){echo "";}else{echo number_format($result1 ['Week10'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week11'] == 0){echo "";}else{echo number_format($result1 ['Week11'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week12'] == 0){echo "";}else{echo number_format($result1 ['Week12'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week13'] == 0){echo "";}else{echo number_format($result1 ['Week13'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week14'] == 0){echo "";}else{echo number_format($result1 ['Week14'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week15'] == 0){echo "";}else{echo number_format($result1 ['Week15'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week16'] == 0){echo "";}else{echo number_format($result1 ['Week16'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week17'] == 0){echo "";}else{echo number_format($result1 ['Week17'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week18'] == 0){echo "";}else{echo number_format($result1 ['Week18'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week19'] == 0){echo "";}else{echo number_format($result1 ['Week19'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week20'] == 0){echo "";}else{echo number_format($result1 ['Week20'],2);}; ?></td>
                                                                    
                                                                    <td><?php if($result1 ['Week21'] == 0){echo "";}else{echo number_format($result1 ['Week21'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week22'] == 0){echo "";}else{echo number_format($result1 ['Week22'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week23'] == 0){echo "";}else{echo number_format($result1 ['Week23'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week24'] == 0){echo "";}else{echo number_format($result1 ['Week24'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week25'] == 0){echo "";}else{echo number_format($result1 ['Week25'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week26'] == 0){echo "";}else{echo number_format($result1 ['Week26'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week27'] == 0){echo "";}else{echo number_format($result1 ['Week27'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week28'] == 0){echo "";}else{echo number_format($result1 ['Week28'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week29'] == 0){echo "";}else{echo number_format($result1 ['Week29'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week30'] == 0){echo "";}else{echo number_format($result1 ['Week30'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week31'] == 0){echo "";}else{echo number_format($result1 ['Week31'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week32'] == 0){echo "";}else{echo number_format($result1 ['Week32'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week33'] == 0){echo "";}else{echo number_format($result1 ['Week33'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week34'] == 0){echo "";}else{echo number_format($result1 ['Week34'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week35'] == 0){echo "";}else{echo number_format($result1 ['Week35'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week36'] == 0){echo "";}else{echo number_format($result1 ['Week36'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week37'] == 0){echo "";}else{echo number_format($result1 ['Week37'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week38'] == 0){echo "";}else{echo number_format($result1 ['Week38'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week39'] == 0){echo "";}else{echo number_format($result1 ['Week39'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week40'] == 0){echo "";}else{echo number_format($result1 ['Week40'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week41'] == 0){echo "";}else{echo number_format($result1 ['Week41'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week42'] == 0){echo "";}else{echo number_format($result1 ['Week42'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week43'] == 0){echo "";}else{echo number_format($result1 ['Week43'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week44'] == 0){echo "";}else{echo number_format($result1 ['Week44'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week45'] == 0){echo "";}else{echo number_format($result1 ['Week45'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week46'] == 0){echo "";}else{echo number_format($result1 ['Week46'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week47'] == 0){echo "";}else{echo number_format($result1 ['Week47'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week48'] == 0){echo "";}else{echo number_format($result1 ['Week48'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week49'] == 0){echo "";}else{echo number_format($result1 ['Week49'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week50'] == 0){echo "";}else{echo number_format($result1 ['Week50'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week51'] == 0){echo "";}else{echo number_format($result1 ['Week51'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week52'] == 0){echo "";}else{echo number_format($result1 ['Week52'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week53'] == 0){echo "";}else{echo number_format($result1 ['Week53'],2);}; ?></td>


                                                           

                                                                
                                                                
                                                                
                                                                                                            
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
                                </div>
                            </div>
                                <!-- end card-body-->
                        </div>
                            <!-- end card-->


                            <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
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
                                                        <table class="table table-bordered border-info dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%; width: 500px;">
                                                            <thead>
                                                                <style>
                                                                    th{
                                                                        text-align: center;
                                                                        vertical-align: middle;
                                                                        width: 500px;
                                                                    }
                                                                </style>
                                                                <tr>
                                                                  
                                                                    <th>Farmer Name</th>
                                                                   
                                                                    <?php
                                                                        // Set the year
                                                                        $year = 2024;

                                                                        // Loop through weeks 1 to 53
                                                                        for ($week = 1; $week <= 53; $week++) {
                                                                            // Calculate the starting date of each week (assuming Sunday is the start of the week)
                                                                            $startDate = new DateTime();
                                                                            $startDate->setISODate($year, $week, 1); // Setting the day of the week to Monday (1)

                                                                            // Adjust for week 1 starting from the previous year
                                                                            if ($week === 1) {
                                                                                $startDate->modify('-0 week');
                                                                            }

                                                                            // Calculate the end date by adding 6 days to the starting date (ending on Sunday)
                                                                            $endDate = clone $startDate;
                                                                            $endDate->modify('+6 days');

                                                                            // Echo the range of dates for each week with the desired date format
                                                                            echo "<th style='width:100px;'>W$week: " . $startDate->format('M d') . ' - ' . $endDate->format('M d') . "</th>";
                                                                        }
                                                                        ?>

                                                                </tr>
                                                            </thead>

                                                            <tbody id="myTable3">
                                                                <?php
                                                                    include 'db.inc.php';
                                                                    $query1 = mysqli_query($conn,"SELECT * FROM name_harvest_2024_cms ORDER BY `name` ASC");
                                                                    while($result1 = mysqli_fetch_array($query1)): ?>
                                                                <tr>
                                                                   
                                                                    <td><?php echo $result1 ['name']; ?></td>
                                                                    
                                                                    <td><?php if($result1 ['Week1'] == 0){echo "";}else{echo number_format($result1 ['Week1'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week2'] == 0){echo "";}else{echo number_format($result1 ['Week2'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week3'] == 0){echo "";}else{echo number_format($result1 ['Week3'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week4'] == 0){echo "";}else{echo number_format($result1 ['Week4'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week5'] == 0){echo "";}else{echo number_format($result1 ['Week5'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week6'] == 0){echo "";}else{echo number_format($result1 ['Week6'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week7'] == 0){echo "";}else{echo number_format($result1 ['Week7'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week8'] == 0){echo "";}else{echo number_format($result1 ['Week8'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week9'] == 0){echo "";}else{echo number_format($result1 ['Week9'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week10'] == 0){echo "";}else{echo number_format($result1 ['Week10'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week11'] == 0){echo "";}else{echo number_format($result1 ['Week11'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week12'] == 0){echo "";}else{echo number_format($result1 ['Week12'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week13'] == 0){echo "";}else{echo number_format($result1 ['Week13'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week14'] == 0){echo "";}else{echo number_format($result1 ['Week14'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week15'] == 0){echo "";}else{echo number_format($result1 ['Week15'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week16'] == 0){echo "";}else{echo number_format($result1 ['Week16'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week17'] == 0){echo "";}else{echo number_format($result1 ['Week17'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week18'] == 0){echo "";}else{echo number_format($result1 ['Week18'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week19'] == 0){echo "";}else{echo number_format($result1 ['Week19'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week20'] == 0){echo "";}else{echo number_format($result1 ['Week20'],2);}; ?></td>
                                                                    
                                                                    <td><?php if($result1 ['Week21'] == 0){echo "";}else{echo number_format($result1 ['Week21'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week22'] == 0){echo "";}else{echo number_format($result1 ['Week22'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week23'] == 0){echo "";}else{echo number_format($result1 ['Week23'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week24'] == 0){echo "";}else{echo number_format($result1 ['Week24'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week25'] == 0){echo "";}else{echo number_format($result1 ['Week25'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week26'] == 0){echo "";}else{echo number_format($result1 ['Week26'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week27'] == 0){echo "";}else{echo number_format($result1 ['Week27'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week28'] == 0){echo "";}else{echo number_format($result1 ['Week28'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week29'] == 0){echo "";}else{echo number_format($result1 ['Week29'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week30'] == 0){echo "";}else{echo number_format($result1 ['Week30'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week31'] == 0){echo "";}else{echo number_format($result1 ['Week31'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week32'] == 0){echo "";}else{echo number_format($result1 ['Week32'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week33'] == 0){echo "";}else{echo number_format($result1 ['Week33'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week34'] == 0){echo "";}else{echo number_format($result1 ['Week34'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week35'] == 0){echo "";}else{echo number_format($result1 ['Week35'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week36'] == 0){echo "";}else{echo number_format($result1 ['Week36'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week37'] == 0){echo "";}else{echo number_format($result1 ['Week37'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week38'] == 0){echo "";}else{echo number_format($result1 ['Week38'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week39'] == 0){echo "";}else{echo number_format($result1 ['Week39'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week40'] == 0){echo "";}else{echo number_format($result1 ['Week40'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week41'] == 0){echo "";}else{echo number_format($result1 ['Week41'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week42'] == 0){echo "";}else{echo number_format($result1 ['Week42'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week43'] == 0){echo "";}else{echo number_format($result1 ['Week43'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week44'] == 0){echo "";}else{echo number_format($result1 ['Week44'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week45'] == 0){echo "";}else{echo number_format($result1 ['Week45'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week46'] == 0){echo "";}else{echo number_format($result1 ['Week46'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week47'] == 0){echo "";}else{echo number_format($result1 ['Week47'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week48'] == 0){echo "";}else{echo number_format($result1 ['Week48'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week49'] == 0){echo "";}else{echo number_format($result1 ['Week49'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week50'] == 0){echo "";}else{echo number_format($result1 ['Week50'],2);}; ?></td>

                                                                    <td><?php if($result1 ['Week51'] == 0){echo "";}else{echo number_format($result1 ['Week51'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week52'] == 0){echo "";}else{echo number_format($result1 ['Week52'],2);}; ?></td>
                                                                    <td><?php if($result1 ['Week53'] == 0){echo "";}else{echo number_format($result1 ['Week53'],2);}; ?></td>


                                                           

                                                                
                                                                
                                                                
                                                                                                            
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
                                </div>
                            </div>
                                <!-- end card-body-->
                        </div>
                            <!-- end card-->
                   
                    
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
<!-- container-fluid -->
                                
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>



<?php include_once 'footer.php'; ?>



    
                 

                    
