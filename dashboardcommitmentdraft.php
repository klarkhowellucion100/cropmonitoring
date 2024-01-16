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
                                                                    $query1 = mysqli_query($conn,"SELECT
                                                                    production_cms.code,
                                                                    production_cms.name,
                                                                    registrationhubpos.barangay,
                                                                    production_cms.comm,
                                                                    production_cms.hills,
                                                                    date_sown,
                                                                    date_trans,
                                                                    production_cms.date_harvest,
                                                                    YEAR(production_cms.date_harvest) AS prod_harvest,
                                                                    production_cms.date_range,
                                                                    
                                                                    SUM(CASE WHEN production_cms.week_harvest = '1' THEN production_cms.vol_del_week END) AS Week1,
                                                                    CASE WHEN production_cms.week_harvest = '1' THEN production_cms.id END AS id1,
                                                                    CASE WHEN production_cms.week_harvest = '1' THEN production_cms.status_mon END AS status1,
                                                                    CASE WHEN production_cms.week_harvest = '1' THEN production_cms.status_details END AS details1,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '2' THEN production_cms.vol_del_week END) AS Week2,
                                                                    CASE WHEN production_cms.week_harvest = '2' THEN production_cms.id END AS id2,
                                                                    CASE WHEN production_cms.week_harvest = '2' THEN production_cms.status_mon END AS status2,
                                                                    CASE WHEN production_cms.week_harvest = '2' THEN production_cms.status_details END AS details2,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '3' THEN production_cms.vol_del_week END) AS Week3,
                                                                    CASE WHEN production_cms.week_harvest = '3' THEN production_cms.id END AS id3,
                                                                    CASE WHEN production_cms.week_harvest = '3' THEN production_cms.status_mon END AS status3,
                                                                    CASE WHEN production_cms.week_harvest = '3' THEN production_cms.status_details END AS details3,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '4' THEN production_cms.vol_del_week END) AS Week4,
                                                                    CASE WHEN production_cms.week_harvest = '4' THEN production_cms.id END AS id4,
                                                                    CASE WHEN production_cms.week_harvest = '4' THEN production_cms.status_mon END AS status4,
                                                                    CASE WHEN production_cms.week_harvest = '4' THEN production_cms.status_details END AS details4,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '5' THEN production_cms.vol_del_week END) AS Week5,
                                                                    CASE WHEN production_cms.week_harvest = '5' THEN production_cms.id END AS id5,
                                                                    CASE WHEN production_cms.week_harvest = '5' THEN production_cms.status_mon END AS status5,
                                                                    CASE WHEN production_cms.week_harvest = '5' THEN production_cms.status_details END AS details5,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '6' THEN production_cms.vol_del_week END) AS Week6,
                                                                    CASE WHEN production_cms.week_harvest = '6' THEN production_cms.id END AS id6,
                                                                    CASE WHEN production_cms.week_harvest = '6' THEN production_cms.status_mon END AS status6,
                                                                    CASE WHEN production_cms.week_harvest = '6' THEN production_cms.status_details END AS details6,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '7' THEN production_cms.vol_del_week END) AS Week7,
                                                                    CASE WHEN production_cms.week_harvest = '7' THEN production_cms.id END AS id7,
                                                                    CASE WHEN production_cms.week_harvest = '7' THEN production_cms.status_mon END AS status7,
                                                                    CASE WHEN production_cms.week_harvest = '7' THEN production_cms.status_details END AS details7,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '8' THEN production_cms.vol_del_week END) AS Week8,
                                                                    CASE WHEN production_cms.week_harvest = '8' THEN production_cms.id END AS id8,
                                                                    CASE WHEN production_cms.week_harvest = '8' THEN production_cms.status_mon END AS status8,
                                                                    CASE WHEN production_cms.week_harvest = '8' THEN production_cms.status_details END AS details8,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '9' THEN production_cms.vol_del_week END) AS Week9,
                                                                    CASE WHEN production_cms.week_harvest = '9' THEN production_cms.id END AS id9,
                                                                    CASE WHEN production_cms.week_harvest = '9' THEN production_cms.status_mon END AS status9,
                                                                    CASE WHEN production_cms.week_harvest = '9' THEN production_cms.status_details END AS details9,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '10' THEN production_cms.vol_del_week END) AS Week10,
                                                                    CASE WHEN production_cms.week_harvest = '10' THEN production_cms.id END AS id10,
                                                                    CASE WHEN production_cms.week_harvest = '10' THEN production_cms.status_mon END AS status10,
                                                                    CASE WHEN production_cms.week_harvest = '10' THEN production_cms.status_details END AS details10,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '11' THEN production_cms.vol_del_week END) AS Week11,
                                                                    CASE WHEN production_cms.week_harvest = '11' THEN production_cms.id END AS id11,
                                                                    CASE WHEN production_cms.week_harvest = '11' THEN production_cms.status_mon END AS status11,
                                                                    CASE WHEN production_cms.week_harvest = '11' THEN production_cms.status_details END AS details11,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '12' THEN production_cms.vol_del_week END) AS Week12,
                                                                    CASE WHEN production_cms.week_harvest = '12' THEN production_cms.id END AS id12,
                                                                    CASE WHEN production_cms.week_harvest = '12' THEN production_cms.status_mon END AS status12,
                                                                    CASE WHEN production_cms.week_harvest = '12' THEN production_cms.status_details END AS details12,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '13' THEN production_cms.vol_del_week END) AS Week13,
                                                                    CASE WHEN production_cms.week_harvest = '13' THEN production_cms.id END AS id13,
                                                                    CASE WHEN production_cms.week_harvest = '13' THEN production_cms.status_mon END AS status13,
                                                                    CASE WHEN production_cms.week_harvest = '13' THEN production_cms.status_details END AS details13,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '14' THEN production_cms.vol_del_week END) AS Week14,
                                                                    CASE WHEN production_cms.week_harvest = '14' THEN production_cms.id END AS id14,
                                                                    CASE WHEN production_cms.week_harvest = '14' THEN production_cms.status_mon END AS status14,
                                                                    CASE WHEN production_cms.week_harvest = '14' THEN production_cms.status_details END AS details14,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '15' THEN production_cms.vol_del_week END) AS Week15,
                                                                    CASE WHEN production_cms.week_harvest = '15' THEN production_cms.id END AS id15,
                                                                    CASE WHEN production_cms.week_harvest = '15' THEN production_cms.status_mon END AS status15,
                                                                    CASE WHEN production_cms.week_harvest = '15' THEN production_cms.status_details END AS details15,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '16' THEN production_cms.vol_del_week END) AS Week16,
                                                                    CASE WHEN production_cms.week_harvest = '16' THEN production_cms.id END AS id16,
                                                                    CASE WHEN production_cms.week_harvest = '16' THEN production_cms.status_mon END AS status16,
                                                                    CASE WHEN production_cms.week_harvest = '16' THEN production_cms.status_details END AS details16,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '17' THEN production_cms.vol_del_week END) AS Week17,
                                                                    CASE WHEN production_cms.week_harvest = '17' THEN production_cms.id END AS id17,
                                                                    CASE WHEN production_cms.week_harvest = '17' THEN production_cms.status_mon END AS status17,
                                                                    CASE WHEN production_cms.week_harvest = '17' THEN production_cms.status_details END AS details17,
                                                                
                                                                     SUM(CASE WHEN production_cms.week_harvest = '18' THEN production_cms.vol_del_week END) AS Week18,
                                                                    CASE WHEN production_cms.week_harvest = '18' THEN production_cms.id END AS id18,
                                                                    CASE WHEN production_cms.week_harvest = '18' THEN production_cms.status_mon END AS status18,
                                                                    CASE WHEN production_cms.week_harvest = '18' THEN production_cms.status_details END AS details18,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '19' THEN production_cms.vol_del_week END) AS Week19,
                                                                    CASE WHEN production_cms.week_harvest = '19' THEN production_cms.id END AS id19,
                                                                    CASE WHEN production_cms.week_harvest = '19' THEN production_cms.status_mon END AS status19,
                                                                    CASE WHEN production_cms.week_harvest = '19' THEN production_cms.status_details END AS details19,
                                                                    
                                                                    SUM(CASE WHEN production_cms.week_harvest = '20' THEN production_cms.vol_del_week END) AS Week20,
                                                                    CASE WHEN production_cms.week_harvest = '20' THEN production_cms.id END AS id20,
                                                                    CASE WHEN production_cms.week_harvest = '20' THEN production_cms.status_mon END AS status20,
                                                                    CASE WHEN production_cms.week_harvest = '20' THEN production_cms.status_details END AS details20,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '21' THEN production_cms.vol_del_week END) AS Week21,
                                                                    CASE WHEN production_cms.week_harvest = '21' THEN production_cms.id END AS id21,
                                                                    CASE WHEN production_cms.week_harvest = '21' THEN production_cms.status_mon END AS status21,
                                                                    CASE WHEN production_cms.week_harvest = '21' THEN production_cms.status_details END AS details21,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '22' THEN production_cms.vol_del_week END) AS Week22,
                                                                    CASE WHEN production_cms.week_harvest = '22' THEN production_cms.id END AS id22,
                                                                    CASE WHEN production_cms.week_harvest = '22' THEN production_cms.status_mon END AS status22,
                                                                    CASE WHEN production_cms.week_harvest = '22' THEN production_cms.status_details END AS details22,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '23' THEN production_cms.vol_del_week END) AS Week23,
                                                                    CASE WHEN production_cms.week_harvest = '23' THEN production_cms.id END AS id23,
                                                                    CASE WHEN production_cms.week_harvest = '23' THEN production_cms.status_mon END AS status23,
                                                                    CASE WHEN production_cms.week_harvest = '23' THEN production_cms.status_details END AS details23,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '24' THEN production_cms.vol_del_week END) AS Week24,
                                                                    CASE WHEN production_cms.week_harvest = '24' THEN production_cms.id END AS id24,
                                                                    CASE WHEN production_cms.week_harvest = '24' THEN production_cms.status_mon END AS status24,
                                                                    CASE WHEN production_cms.week_harvest = '24' THEN production_cms.status_details END AS details24,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '25' THEN production_cms.vol_del_week END) AS Week25,
                                                                    CASE WHEN production_cms.week_harvest = '25' THEN production_cms.id END AS id25,
                                                                    CASE WHEN production_cms.week_harvest = '25' THEN production_cms.status_mon END AS status25,
                                                                    CASE WHEN production_cms.week_harvest = '25' THEN production_cms.status_details END AS details25,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '26' THEN production_cms.vol_del_week END) AS Week26,
                                                                    CASE WHEN production_cms.week_harvest = '26' THEN production_cms.id END AS id26,
                                                                    CASE WHEN production_cms.week_harvest = '26' THEN production_cms.status_mon END AS status26,
                                                                    CASE WHEN production_cms.week_harvest = '26' THEN production_cms.status_details END AS details26,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '27' THEN production_cms.vol_del_week END) AS Week27,
                                                                    CASE WHEN production_cms.week_harvest = '27' THEN production_cms.id END AS id27,
                                                                    CASE WHEN production_cms.week_harvest = '27' THEN production_cms.status_mon END AS status27,
                                                                    CASE WHEN production_cms.week_harvest = '27' THEN production_cms.status_details END AS details27,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '28' THEN production_cms.vol_del_week END) AS Week28,
                                                                    CASE WHEN production_cms.week_harvest = '28' THEN production_cms.id END AS id28,
                                                                    CASE WHEN production_cms.week_harvest = '28' THEN production_cms.status_mon END AS status28,
                                                                    CASE WHEN production_cms.week_harvest = '28' THEN production_cms.status_details END AS details28,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '29' THEN production_cms.vol_del_week END) AS Week29,
                                                                    CASE WHEN production_cms.week_harvest = '29' THEN production_cms.id END AS id29,
                                                                    CASE WHEN production_cms.week_harvest = '29' THEN production_cms.status_mon END AS status29,
                                                                    CASE WHEN production_cms.week_harvest = '29' THEN production_cms.status_details END AS details29,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '30' THEN production_cms.vol_del_week END) AS Week30,
                                                                    CASE WHEN production_cms.week_harvest = '30' THEN production_cms.id END AS id30,
                                                                    CASE WHEN production_cms.week_harvest = '30' THEN production_cms.status_mon END AS status30,
                                                                    CASE WHEN production_cms.week_harvest = '30' THEN production_cms.status_details END AS details30,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '31' THEN production_cms.vol_del_week END) AS Week31,
                                                                    CASE WHEN production_cms.week_harvest = '31' THEN production_cms.id END AS id31,
                                                                    CASE WHEN production_cms.week_harvest = '31' THEN production_cms.status_mon END AS status31,
                                                                    CASE WHEN production_cms.week_harvest = '31' THEN production_cms.status_details END AS details31,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '32' THEN production_cms.vol_del_week END) AS Week32,
                                                                    CASE WHEN production_cms.week_harvest = '32' THEN production_cms.id END AS id32,
                                                                    CASE WHEN production_cms.week_harvest = '32' THEN production_cms.status_mon END AS status32,
                                                                    CASE WHEN production_cms.week_harvest = '32' THEN production_cms.status_details END AS details32,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '33' THEN production_cms.vol_del_week END) AS Week33,
                                                                    CASE WHEN production_cms.week_harvest = '33' THEN production_cms.id END AS id33,
                                                                    CASE WHEN production_cms.week_harvest = '33' THEN production_cms.status_mon END AS status33,
                                                                    CASE WHEN production_cms.week_harvest = '33' THEN production_cms.status_details END AS details33,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '34' THEN production_cms.vol_del_week END) AS Week34,
                                                                    CASE WHEN production_cms.week_harvest = '34' THEN production_cms.id END AS id34,
                                                                    CASE WHEN production_cms.week_harvest = '34' THEN production_cms.status_mon END AS status34,
                                                                    CASE WHEN production_cms.week_harvest = '34' THEN production_cms.status_details END AS details34,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '35' THEN production_cms.vol_del_week END) AS Week35,
                                                                    CASE WHEN production_cms.week_harvest = '35' THEN production_cms.id END AS id35,
                                                                    CASE WHEN production_cms.week_harvest = '35' THEN production_cms.status_mon END AS status35,
                                                                    CASE WHEN production_cms.week_harvest = '35' THEN production_cms.status_details END AS details35,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '36' THEN production_cms.vol_del_week END) AS Week36,
                                                                    CASE WHEN production_cms.week_harvest = '36' THEN production_cms.id END AS id36,
                                                                    CASE WHEN production_cms.week_harvest = '36' THEN production_cms.status_mon END AS status36,
                                                                    CASE WHEN production_cms.week_harvest = '36' THEN production_cms.status_details END AS details36,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '37' THEN production_cms.vol_del_week END) AS Week37,
                                                                    CASE WHEN production_cms.week_harvest = '37' THEN production_cms.id END AS id37,
                                                                    CASE WHEN production_cms.week_harvest = '37' THEN production_cms.status_mon END AS status37,
                                                                    CASE WHEN production_cms.week_harvest = '37' THEN production_cms.status_details END AS details37,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '38' THEN production_cms.vol_del_week END) AS Week38,
                                                                    CASE WHEN production_cms.week_harvest = '38' THEN production_cms.id END AS id38,
                                                                    CASE WHEN production_cms.week_harvest = '38' THEN production_cms.status_mon END AS status38,
                                                                    CASE WHEN production_cms.week_harvest = '38' THEN production_cms.status_details END AS details38,
                                                                    
                                                                    SUM(CASE WHEN production_cms.week_harvest = '39' THEN production_cms.vol_del_week END) AS Week39,
                                                                    CASE WHEN production_cms.week_harvest = '39' THEN production_cms.id END AS id39,
                                                                    CASE WHEN production_cms.week_harvest = '39' THEN production_cms.status_mon END AS status39,
                                                                    CASE WHEN production_cms.week_harvest = '39' THEN production_cms.status_details END AS details39,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '40' THEN production_cms.vol_del_week END) AS Week40,
                                                                    CASE WHEN production_cms.week_harvest = '40' THEN production_cms.id END AS id40,
                                                                    CASE WHEN production_cms.week_harvest = '40' THEN production_cms.status_mon END AS status40,
                                                                    CASE WHEN production_cms.week_harvest = '40' THEN production_cms.status_details END AS details40,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '41' THEN production_cms.vol_del_week END) AS Week41,
                                                                    CASE WHEN production_cms.week_harvest = '41' THEN production_cms.id END AS id41,
                                                                    CASE WHEN production_cms.week_harvest = '41' THEN production_cms.status_mon END AS status41,
                                                                    CASE WHEN production_cms.week_harvest = '41' THEN production_cms.status_details END AS details41,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '42' THEN production_cms.vol_del_week END) AS Week42,
                                                                    CASE WHEN production_cms.week_harvest = '42' THEN production_cms.id END AS id42,
                                                                    CASE WHEN production_cms.week_harvest = '42' THEN production_cms.status_mon END AS status42,
                                                                    CASE WHEN production_cms.week_harvest = '42' THEN production_cms.status_details END AS details42,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '43' THEN production_cms.vol_del_week END) AS Week43,
                                                                    CASE WHEN production_cms.week_harvest = '43' THEN production_cms.id END AS id43,
                                                                    CASE WHEN production_cms.week_harvest = '43' THEN production_cms.status_mon END AS status43,
                                                                    CASE WHEN production_cms.week_harvest = '43' THEN production_cms.status_details END AS details43,
                                                                    
                                                                    SUM(CASE WHEN production_cms.week_harvest = '44' THEN production_cms.vol_del_week END) AS Week44,
                                                                    CASE WHEN production_cms.week_harvest = '44' THEN production_cms.id END AS id44,
                                                                    CASE WHEN production_cms.week_harvest = '44' THEN production_cms.status_mon END AS status44,
                                                                    CASE WHEN production_cms.week_harvest = '44' THEN production_cms.status_details END AS details44,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '45' THEN production_cms.vol_del_week END) AS Week45,
                                                                    CASE WHEN production_cms.week_harvest = '45' THEN production_cms.id END AS id45,
                                                                    CASE WHEN production_cms.week_harvest = '45' THEN production_cms.status_mon END AS status45,
                                                                    CASE WHEN production_cms.week_harvest = '45' THEN production_cms.status_details END AS details45,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '46' THEN production_cms.vol_del_week END) AS Week46,
                                                                    CASE WHEN production_cms.week_harvest = '46' THEN production_cms.id END AS id46,
                                                                    CASE WHEN production_cms.week_harvest = '46' THEN production_cms.status_mon END AS status46,
                                                                    CASE WHEN production_cms.week_harvest = '46' THEN production_cms.status_details END AS details46,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '47' THEN production_cms.vol_del_week END) AS Week47,
                                                                    CASE WHEN production_cms.week_harvest = '47' THEN production_cms.id END AS id47,
                                                                    CASE WHEN production_cms.week_harvest = '47' THEN production_cms.status_mon END AS status47,
                                                                    CASE WHEN production_cms.week_harvest = '47' THEN production_cms.status_details END AS details47,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '48' THEN production_cms.vol_del_week END) AS Week48,
                                                                    CASE WHEN production_cms.week_harvest = '48' THEN production_cms.id END AS id48,
                                                                    CASE WHEN production_cms.week_harvest = '48' THEN production_cms.status_mon END AS status48,
                                                                    CASE WHEN production_cms.week_harvest = '48' THEN production_cms.status_details END AS details48,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '49' THEN production_cms.vol_del_week END) AS Week49,
                                                                    CASE WHEN production_cms.week_harvest = '49' THEN production_cms.id END AS id49,
                                                                    CASE WHEN production_cms.week_harvest = '49' THEN production_cms.status_mon END AS status49,
                                                                    CASE WHEN production_cms.week_harvest = '49' THEN production_cms.status_details END AS details49,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '50' THEN production_cms.vol_del_week END) AS Week50,
                                                                    CASE WHEN production_cms.week_harvest = '50' THEN production_cms.id END AS id50,
                                                                    CASE WHEN production_cms.week_harvest = '50' THEN production_cms.status_mon END AS status50,
                                                                    CASE WHEN production_cms.week_harvest = '50' THEN production_cms.status_details END AS details50,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '51' THEN production_cms.vol_del_week END) AS Week51,
                                                                    CASE WHEN production_cms.week_harvest = '51' THEN production_cms.id END AS id51,
                                                                    CASE WHEN production_cms.week_harvest = '51' THEN production_cms.status_mon END AS status51,
                                                                    CASE WHEN production_cms.week_harvest = '51' THEN production_cms.status_details END AS details51,
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '52' THEN production_cms.vol_del_week END) AS Week52,
                                                                    CASE WHEN production_cms.week_harvest = '52' THEN production_cms.id END AS id52,
                                                                    CASE WHEN production_cms.week_harvest = '52' THEN production_cms.status_mon END AS status52,
                                                                    CASE WHEN production_cms.week_harvest = '52' THEN production_cms.status_details END AS details52,
                                                                
                                                                    -- ... Repeat this structure for Weeks 5 to 53 ...
                                                                
                                                                    SUM(CASE WHEN production_cms.week_harvest = '53' THEN production_cms.vol_del_week END) AS Week53,
                                                                    CASE WHEN production_cms.week_harvest = '53' THEN production_cms.id END AS id53,
                                                                    CASE WHEN production_cms.week_harvest = '53' THEN production_cms.status_mon END AS status53,
                                                                    CASE WHEN production_cms.week_harvest = '53' THEN production_cms.status_details END AS details53
                                                                
                                                                FROM
                                                                    production_cms, registrationhubpos
                                                                WHERE
                                                                    registrationhubpos.fname = production_cms.name AND YEAR(production_cms.date_harvest) = '$yearnow'
                                                                GROUP BY
                                                                    production_cms.name,
                                                                    production_cms.comm,
                                                                    production_cms.code
                                                                ORDER BY
                                                                    comm ASC;
                                                                ");
                                                                    while($result1 = mysqli_fetch_array($query1)): ?>
                                                                <tr>
                                                                                
                                                                    <td><?php echo $result1 ['comm']; ?></td>
                                                                    <td><?php echo $result1 ['barangay']; ?></td>
                                                                    <td><?php echo $result1 ['name']; ?></td>
                                                                    <td><?php echo $result1 ['hills']; ?></td>
                                                                    <td><?php echo date('M d, Y', strtotime($result1['date_sown'])); ?></td>
                                                                    <td><?php echo date('M d, Y', strtotime($result1['date_trans'])); ?></td>
                                                                    <td><?php echo date('M d, Y', strtotime($result1['date_harvest'])); ?></td>
                                                                 
                                                                    <?php
                                                                        for ($week = 1; $week <= 53; $week++) {
                                                                            echo "<td style=\"";
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
                                                                    $query1 = mysqli_query($conn,"SELECT comm,  
                                                                    YEAR(production_cms.date_harvest) AS prod_year,
                                                                      SUM(CASE WHEN week_harvest = '1' THEN vol_del_week END) AS Week1,
                                                                      SUM(CASE WHEN week_harvest = '2' THEN vol_del_week END) AS Week2,
                                                                      SUM(CASE WHEN week_harvest = '3' THEN vol_del_week END) AS Week3,
                                                                      SUM(CASE WHEN week_harvest = '4' THEN vol_del_week END) AS Week4,
                                                                      SUM(CASE WHEN week_harvest = '5' THEN vol_del_week END) AS Week5,
                                                                      SUM(CASE WHEN week_harvest = '6' THEN vol_del_week END) AS Week6,
                                                                      SUM(CASE WHEN week_harvest = '7' THEN vol_del_week END) AS Week7,
                                                                      SUM(CASE WHEN week_harvest = '8' THEN vol_del_week END) AS Week8,
                                                                      SUM(CASE WHEN week_harvest = '9' THEN vol_del_week END) AS Week9,
                                                                      SUM(CASE WHEN week_harvest = '10' THEN vol_del_week END) AS Week10,
                                                                      SUM(CASE WHEN week_harvest = '11' THEN vol_del_week END) AS Week11,
                                                                      SUM(CASE WHEN week_harvest = '12' THEN vol_del_week END) AS Week12,
                                                                      SUM(CASE WHEN week_harvest = '13' THEN vol_del_week END) AS Week13,
                                                                      SUM(CASE WHEN week_harvest = '14' THEN vol_del_week END) AS Week14,
                                                                      SUM(CASE WHEN week_harvest = '15' THEN vol_del_week END) AS Week15,
                                                                      SUM(CASE WHEN week_harvest = '16' THEN vol_del_week END) AS Week16,
                                                                      SUM(CASE WHEN week_harvest = '17' THEN vol_del_week END) AS Week17,
                                                                      SUM(CASE WHEN week_harvest = '18' THEN vol_del_week END) AS Week18,
                                                                      SUM(CASE WHEN week_harvest = '19' THEN vol_del_week END) AS Week19,
                                                                      SUM(CASE WHEN week_harvest = '20' THEN vol_del_week END) AS Week20,
                                                                      SUM(CASE WHEN week_harvest = '21' THEN vol_del_week END) AS Week21,
                                                                      SUM(CASE WHEN week_harvest = '22' THEN vol_del_week END) AS Week22,
                                                                      SUM(CASE WHEN week_harvest = '23' THEN vol_del_week END) AS Week23,
                                                                      SUM(CASE WHEN week_harvest = '24' THEN vol_del_week END) AS Week24,
                                                                      SUM(CASE WHEN week_harvest = '25' THEN vol_del_week END) AS Week25,
                                                                      SUM(CASE WHEN week_harvest = '26' THEN vol_del_week END) AS Week26,
                                                                      SUM(CASE WHEN week_harvest = '27' THEN vol_del_week END) AS Week27,
                                                                      SUM(CASE WHEN week_harvest = '28' THEN vol_del_week END) AS Week28,
                                                                      SUM(CASE WHEN week_harvest = '29' THEN vol_del_week END) AS Week29,
                                                                      SUM(CASE WHEN week_harvest = '30' THEN vol_del_week END) AS Week30,
                                                                      SUM(CASE WHEN week_harvest = '31' THEN vol_del_week END) AS Week31,
                                                                      SUM(CASE WHEN week_harvest = '32' THEN vol_del_week END) AS Week32,
                                                                      SUM(CASE WHEN week_harvest = '33' THEN vol_del_week END) AS Week33,
                                                                      SUM(CASE WHEN week_harvest = '34' THEN vol_del_week END) AS Week34,
                                                                      SUM(CASE WHEN week_harvest = '35' THEN vol_del_week END) AS Week35,
                                                                      SUM(CASE WHEN week_harvest = '36' THEN vol_del_week END) AS Week36,
                                                                      SUM(CASE WHEN week_harvest = '37' THEN vol_del_week END) AS Week37,
                                                                      SUM(CASE WHEN week_harvest = '38' THEN vol_del_week END) AS Week38,
                                                                      SUM(CASE WHEN week_harvest = '39' THEN vol_del_week END) AS Week39,
                                                                      SUM(CASE WHEN week_harvest = '40' THEN vol_del_week END) AS Week40,
                                                                      SUM(CASE WHEN week_harvest = '41' THEN vol_del_week END) AS Week41,
                                                                      SUM(CASE WHEN week_harvest = '42' THEN vol_del_week END) AS Week42,
                                                                      SUM(CASE WHEN week_harvest = '43' THEN vol_del_week END) AS Week43,
                                                                      SUM(CASE WHEN week_harvest = '44' THEN vol_del_week END) AS Week44,
                                                                      SUM(CASE WHEN week_harvest = '45' THEN vol_del_week END) AS Week45,
                                                                      SUM(CASE WHEN week_harvest = '46' THEN vol_del_week END) AS Week46,
                                                                      SUM(CASE WHEN week_harvest = '47' THEN vol_del_week END) AS Week47,
                                                                      SUM(CASE WHEN week_harvest = '48' THEN vol_del_week END) AS Week48,
                                                                      SUM(CASE WHEN week_harvest = '49' THEN vol_del_week END) AS Week49,
                                                                      SUM(CASE WHEN week_harvest = '50' THEN vol_del_week END) AS Week50,
                                                                      SUM(CASE WHEN week_harvest = '51' THEN vol_del_week END) AS Week51,
                                                                      SUM(CASE WHEN week_harvest = '52' THEN vol_del_week END) AS Week52,
                                                                      SUM(CASE WHEN week_harvest = '53' THEN vol_del_week END) AS Week53
                                                                    FROM
                                                                      production_cms
                                                                    WHERE
                                                                      YEAR(production_cms.date_harvest) = '$year_now'
                                                                    GROUP BY
                                                                      comm
                                                                    ORDER BY
                                                                      comm ASC");
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
                                                                    $query1 = mysqli_query($conn,"SELECT name, 
                                                                    YEAR(production_cms.date_harvest) AS prod_year, 
                                                                      SUM(CASE WHEN week_harvest = '1' THEN vol_del_week END) AS Week1,
                                                                      SUM(CASE WHEN week_harvest = '2' THEN vol_del_week END) AS Week2,
                                                                      SUM(CASE WHEN week_harvest = '3' THEN vol_del_week END) AS Week3,
                                                                      SUM(CASE WHEN week_harvest = '4' THEN vol_del_week END) AS Week4,
                                                                      SUM(CASE WHEN week_harvest = '5' THEN vol_del_week END) AS Week5,
                                                                      SUM(CASE WHEN week_harvest = '6' THEN vol_del_week END) AS Week6,
                                                                      SUM(CASE WHEN week_harvest = '7' THEN vol_del_week END) AS Week7,
                                                                      SUM(CASE WHEN week_harvest = '8' THEN vol_del_week END) AS Week8,
                                                                      SUM(CASE WHEN week_harvest = '9' THEN vol_del_week END) AS Week9,
                                                                      SUM(CASE WHEN week_harvest = '10' THEN vol_del_week END) AS Week10,
                                                                      SUM(CASE WHEN week_harvest = '11' THEN vol_del_week END) AS Week11,
                                                                      SUM(CASE WHEN week_harvest = '12' THEN vol_del_week END) AS Week12,
                                                                      SUM(CASE WHEN week_harvest = '13' THEN vol_del_week END) AS Week13,
                                                                      SUM(CASE WHEN week_harvest = '14' THEN vol_del_week END) AS Week14,
                                                                      SUM(CASE WHEN week_harvest = '15' THEN vol_del_week END) AS Week15,
                                                                      SUM(CASE WHEN week_harvest = '16' THEN vol_del_week END) AS Week16,
                                                                      SUM(CASE WHEN week_harvest = '17' THEN vol_del_week END) AS Week17,
                                                                      SUM(CASE WHEN week_harvest = '18' THEN vol_del_week END) AS Week18,
                                                                      SUM(CASE WHEN week_harvest = '19' THEN vol_del_week END) AS Week19,
                                                                      SUM(CASE WHEN week_harvest = '20' THEN vol_del_week END) AS Week20,
                                                                      SUM(CASE WHEN week_harvest = '21' THEN vol_del_week END) AS Week21,
                                                                      SUM(CASE WHEN week_harvest = '22' THEN vol_del_week END) AS Week22,
                                                                      SUM(CASE WHEN week_harvest = '23' THEN vol_del_week END) AS Week23,
                                                                      SUM(CASE WHEN week_harvest = '24' THEN vol_del_week END) AS Week24,
                                                                      SUM(CASE WHEN week_harvest = '25' THEN vol_del_week END) AS Week25,
                                                                      SUM(CASE WHEN week_harvest = '26' THEN vol_del_week END) AS Week26,
                                                                      SUM(CASE WHEN week_harvest = '27' THEN vol_del_week END) AS Week27,
                                                                      SUM(CASE WHEN week_harvest = '28' THEN vol_del_week END) AS Week28,
                                                                      SUM(CASE WHEN week_harvest = '29' THEN vol_del_week END) AS Week29,
                                                                      SUM(CASE WHEN week_harvest = '30' THEN vol_del_week END) AS Week30,
                                                                      SUM(CASE WHEN week_harvest = '31' THEN vol_del_week END) AS Week31,
                                                                      SUM(CASE WHEN week_harvest = '32' THEN vol_del_week END) AS Week32,
                                                                      SUM(CASE WHEN week_harvest = '33' THEN vol_del_week END) AS Week33,
                                                                      SUM(CASE WHEN week_harvest = '34' THEN vol_del_week END) AS Week34,
                                                                      SUM(CASE WHEN week_harvest = '35' THEN vol_del_week END) AS Week35,
                                                                      SUM(CASE WHEN week_harvest = '36' THEN vol_del_week END) AS Week36,
                                                                      SUM(CASE WHEN week_harvest = '37' THEN vol_del_week END) AS Week37,
                                                                      SUM(CASE WHEN week_harvest = '38' THEN vol_del_week END) AS Week38,
                                                                      SUM(CASE WHEN week_harvest = '39' THEN vol_del_week END) AS Week39,
                                                                      SUM(CASE WHEN week_harvest = '40' THEN vol_del_week END) AS Week40,
                                                                      SUM(CASE WHEN week_harvest = '41' THEN vol_del_week END) AS Week41,
                                                                      SUM(CASE WHEN week_harvest = '42' THEN vol_del_week END) AS Week42,
                                                                      SUM(CASE WHEN week_harvest = '43' THEN vol_del_week END) AS Week43,
                                                                      SUM(CASE WHEN week_harvest = '44' THEN vol_del_week END) AS Week44,
                                                                      SUM(CASE WHEN week_harvest = '45' THEN vol_del_week END) AS Week45,
                                                                      SUM(CASE WHEN week_harvest = '46' THEN vol_del_week END) AS Week46,
                                                                      SUM(CASE WHEN week_harvest = '47' THEN vol_del_week END) AS Week47,
                                                                      SUM(CASE WHEN week_harvest = '48' THEN vol_del_week END) AS Week48,
                                                                      SUM(CASE WHEN week_harvest = '49' THEN vol_del_week END) AS Week49,
                                                                      SUM(CASE WHEN week_harvest = '50' THEN vol_del_week END) AS Week50,
                                                                      SUM(CASE WHEN week_harvest = '51' THEN vol_del_week END) AS Week51,
                                                                      SUM(CASE WHEN week_harvest = '52' THEN vol_del_week END) AS Week52,
                                                                      SUM(CASE WHEN week_harvest = '53' THEN vol_del_week END) AS Week53
                                                                    FROM
                                                                      production_cms
                                                                    WHERE
                                                                      YEAR(production_cms.date_harvest) = '$year_now'
                                                                    GROUP BY
                                                                      `name`
                                                                    ORDER BY
                                                                      `name` ASC");
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



    
                 

                    
