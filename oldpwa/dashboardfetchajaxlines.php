<?php


include 'agriboostdmstransactions/db.inc.php';

if(isset($_POST['selectedYear']) && isset($_POST['fromMonth']) && isset($_POST['toMonth'])){ ?>


<?php 

$selectedYear = $_POST['selectedYear'];
$fromMonth = $_POST['fromMonth'];
$toMonth = $_POST['toMonth'];

?>

<div class="row">
<div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Processed Volume</h4>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#navpills-weekly" role="tab">
                                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                                <span class="d-none d-sm-block">Weekly</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#navpills-monthly" role="tab">
                                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                                <span class="d-none d-sm-block">Monthly</span>
                                            </a>
                                        </li>                                       
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="navpills-weekly" role="tabpanel">
                                            
                                            <h4 class="card-title mb-4">Sum of Weekly Delivery</h4>

                                            <div class="mt-3"> 
                                            <div id="chart_div" style="width: 100%; height: 400px; max-width: 100%; max-height: 400%;"></div>
                                                        <?php
                                                            include 'agriboostdmstransactions/db.inc.php';

                                                            $sql = "SELECT month_num, month_name, week_num, year_num, SUM(volume_processed) as total_volume FROM dashboard_tot_processed_volume WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear' GROUP BY week_num";
                                                            $result = mysqli_query($conn, $sql);

                                                            $data_processed_volume = array();
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                $data_processed_volume[] = $row;
                                                            }

                                                        
                                                            ?>
                                            <script>
                                                                        // PHP data from your database
                                            var processedVolumeData = <?php echo json_encode($data_processed_volume); ?>;

                                            // Extract the necessary data for the chart
                                            var labels = [];
                                            var totalVolume = [];

                                            processedVolumeData.forEach(function(item) {
                                                labels.push(item.week_num);
                                                // Check for null values in total_volume and handle them gracefully
                                                var volume = parseFloat(item.total_volume);
                                                
                                                if (!isNaN(volume)) {
                                                    totalVolume.push(volume.toFixed(2)); // Round to 2 decimal places
                                                } else {
                                                    totalVolume.push(null); // Set to null for null values
                                                }
                                            });

                                            // Replace 0 values with null
                                            totalVolume = totalVolume.map(function(value) {
                                                return value === "0.00" ? null : value;
                                            });

                                            // Chart configuration
                                            var options = {
                                                chart: {
                                                    type: 'line',
                                                    height: 400,
                                                    width: '100%',
                                                },
                                                xaxis: {
                                                    categories: labels,
                                                },
                                                series: [
                                                    {
                                                        name: 'Total Volume Processed',
                                                        data: totalVolume,
                                                    },
                                                ],
                                                stroke: {
                                                    width: 5,
                                                    curve: 'smooth'
                                                },
                                                colors: ['#FFD700'], // Different colors for each line
                                            };

                                            // Create the chart
                                            var chart = new ApexCharts(document.querySelector("#chart_div"), options);
                                            chart.render();

                                            </script>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="navpills-monthly" role="tabpanel">
                                        <h4 class="card-title mb-4">Average of Monthly Delivery</h4>

                                            <div class="mt-3"> 
                                            <div id="chart_div001" style="width: 100%; height: 400px; max-width: 100%; max-height: 400%;"></div>
                                                        <?php
                                                            include 'agriboostdmstransactions/db.inc.php';

                                                            $sql001 = "SELECT month_num, month_name, week_num, year_num, AVG(volume_processed) as average_volume FROM dashboard_tot_processed_volume WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear' GROUP BY month_num";
                                                            $result001 = mysqli_query($conn, $sql001);

                                                            $data_processed_volume001 = array();
                                                            while ($row001 = mysqli_fetch_assoc($result001)) {
                                                                $data_processed_volume001[] = $row001;
                                                            }

                                                        
                                                            ?>
                                            <script>
                                                                        // PHP data from your database
                                            var processedVolumeData001 = <?php echo json_encode($data_processed_volume001); ?>;

                                            // Extract the necessary data for the chart
                                            var labels001 = [];
                                            var totalVolume001 = [];

                                            processedVolumeData001.forEach(function(item001) {
                                                labels001.push(item001.month_name);
                                                // Check for null values in total_volume and handle them gracefully
                                                var volume001 = parseFloat(item001.average_volume);
                                                
                                                if (!isNaN(volume001)) {
                                                    totalVolume001.push(volume001.toFixed(2)); // Round to 2 decimal places
                                                } else {
                                                    totalVolume001.push(null); // Set to null for null values
                                                }
                                            });

                                            // Replace 0 values with null
                                            totalVolume001 = totalVolume001.map(function(value001) {
                                                return value001 === "0.00" ? null : value001;
                                            });

                                            // Chart configuration
                                            var options001 = {
                                                chart: {
                                                    type: 'line',
                                                    height: 400,
                                                    width: '100%',
                                                },
                                                xaxis: {
                                                    categories: labels001,
                                                },
                                                series: [
                                                    {
                                                        name: 'Average Volume Processed',
                                                        data: totalVolume001,
                                                    },
                                                ],
                                                stroke: {
                                                    width: 5,
                                                    curve: 'smooth'
                                                },
                                                colors: ['#FFD700'], // Different colors for each line
                                            };

                                            // Create the chart
                                            var chart001 = new ApexCharts(document.querySelector("#chart_div001"), options001);
                                            chart001.render();

                                            </script>

                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                <div class="col-xl-4">
                   

                    <div class="card">
                        <div class="card-body">

                            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
                                    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

                                    <h4 class="card-title mb-4">Details</h4>

                                    <div class="table-responsive">
                                                    <table id="myTable01" style="width:100%;" class="display table table-striped table-bordered wrap">
                                                        <thead>
                                                            <tr>
                                                                <th>Week</th>
                                                                <th>Date</th>
                                                                <th>Delivered</th>
                                                              
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            include 'agriboostdmstransactions/db.inc.php';
                                                            $query4 = mysqli_query($conn,"SELECT trans_adate, week_num, volume_processed FROM dashboard_tot_processed_volume WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear'");
                                                            while($result4 = mysqli_fetch_array($query4)): ?>
                                                            <tr>
                                                                <td style="text-align: center;"><?php echo $result4 ['week_num'];?></td>  
                                                                <td style="text-align: center;"><?php echo date('M d, Y', strtotime($result4['trans_adate'])); ?></td> 
                                                                <td style="text-align: right;"><?php echo number_format($result4 ['volume_processed']);?> kg</td>                                                  
                                                            </tr>      
                                                            <?php endwhile; ?>                                                  
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <script>
                                                    $(document).ready(function() {
                                                        // Delay the DataTable initialization by 1000 milliseconds (1 second)
                                                        setTimeout(function() {
                                                        $('#myTable01').DataTable({
                                                            dom: 'Bfrtip',
                                                            buttons: [
                                                            'copy', 'csv', 'excel', 'pdf', 'print'
                                                            ],
                                                            "pageLength": 5 // Set the number of rows per page to 5
                                                        });
                                                        }, 1000);
                                                    });
                                                </script>
             
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end Col -->
            </div>
            <!-- end row-->

            
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="card-title mb-4">Buyers Order, Farmers Commitment, Delivered Volume</h4>

                          

                            <div class="mt-3"> <div id="chart_div01" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>                                    

                                                <?php
                                                // Your PHP code to fetch data from the database

                                                include 'agriboostdmstransactions/db.inc.php';

                                                $sql001 = "SELECT * FROM order_commitment_actual_final WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear'";
                                                $result001 = mysqli_query($conn, $sql001);

                                                $order_commit_actual = array();
                                                while ($row001 = mysqli_fetch_assoc($result001)) {
                                                    $order_commit_actual[] = $row001;
                                                }
                                                ?>

                                        <script>
                                            // PHP data from your database
                                            var orderCommitActualData01 = <?php echo json_encode($order_commit_actual); ?>;

                                            // Extract the necessary data for the chart
                                            var labels01 = [];
                                            var actualDelivery01 = [];
                                            var farmerCommitment01 = [];
                                            var vendorOrders01 = [];

                                            orderCommitActualData01.forEach(function(item01) {
                                                labels01.push(item01.week_num);
                                                actualDelivery01.push(parseFloat(item01.actual_delivery).toFixed(2));
                                                farmerCommitment01.push(parseFloat(item01.farmer_commitment).toFixed(2));
                                                vendorOrders01.push(parseFloat(item01.vendor_orders).toFixed(2));
                                            });

                                            // Replace 0.00 values with null
                                            actualDelivery01 = actualDelivery01.map(function(value01) {
                                                return value01 === "0.00" ? null : value01;
                                            });

                                            farmerCommitment01 = farmerCommitment01.map(function(value02) {
                                                return value02 === "0.00" ? null : value02;
                                            });

                                            vendorOrders01 = vendorOrders01.map(function(value03) {
                                                return value03 === "0.00" ? null : value03;
                                            });

                                            // Chart configuration
                                            var options01 = {
                                                chart: {
                                                    type: 'line',
                                                    height: 400,
                                                    width: '100%',
                                                },
                                                xaxis: {
                                                    categories: labels,
                                                    title: {
                                                        text: 'Week Number', // X-axis title
                                                    },
                                                },
                                                yaxis: {
                                                    title: {
                                                        text: 'Values', // Y-axis title
                                                    },
                                                },
                                                series: [
                                                    {
                                                        name: 'Actual Delivery',
                                                        data: actualDelivery01,
                                                    },
                                                    {
                                                        name: 'Farmer Commitment',
                                                        data: farmerCommitment01,
                                                    },
                                                    {
                                                        name: 'Vendor Orders',
                                                        data: vendorOrders01,
                                                    },
                                                ],
                                                stroke: {
                                                    width: 5,
                                                    curve: 'smooth'
                                                },
                                                colors: ['#FFD700', '#00E396', '#FF4560'], // Different colors for each line
                                                annotations: {
                                                    points: [
                                                        {
                                                            x: 'Week 5', // X-axis value for annotation
                                                            y: 500, // Y-axis value for annotation
                                                            marker: {
                                                                size: 6,
                                                                fillColor: '#FF4560',
                                                                strokeColor: '#FF4560',
                                                                strokeWidth: 2,
                                                            },
                                                            label: {
                                                                text: 'Annotation 1',
                                                            },
                                                        },
                                                        // Add more annotations as needed
                                                    ],
                                                },
                                            };

                                            // Create the chart
                                            var chart01 = new ApexCharts(document.querySelector("#chart_div01"), options01);
                                            chart01.render();

                                        </script>


                                           
                            </div>
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

            
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="card-title mb-4">Famers NPS by Month</h4>

                        
                               <div id="chart_div03" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                                    include 'agriboostdmstransactions/db.inc.php';

                                    $sql003 = "SELECT month_num, year_num, month_name,((SUM(rate_five) - (SUM(rate_one) + SUM(rate_two) + SUM(rate_three))) / SUM(total_rating)) * 100 AS percent_rating 
                                FROM 
                                    farmer_nps 
                                WHERE
                                    (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear'
                                GROUP BY 
                                    month_num, month_name, year_num
                                ";
                                    $result003 = mysqli_query($conn, $sql003);

                                    $farmer_nps = array();
                                    while ($row003 = mysqli_fetch_assoc($result003)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row003['percent_rating'] = number_format($row003['percent_rating'], 2); // Format to 2 decimal places
                                        $farmer_nps[] = $row003;
                                    }

                                    ?>

                            <script>
                                // Define the data for the bar chart
                                var chartData03 = <?php echo json_encode($farmer_nps); ?>;
                                
                                // Extract labels (month_name) and data (percent_rating) from the PHP array
                                var labels03 = chartData03.map(function(item03) {
                                    return item03.month_name;
                                });
                                
                                var data03 = chartData03.map(function(item03) {
                                    return parseFloat(item03.percent_rating);
                                });

                                // Get the current month
                                var today = new Date();
                                var currentMonth = today.toLocaleString('default', { month: 'long' });

                                // Check if a month is ongoing (current month)
                                var ongoingIndex = labels03.indexOf(currentMonth);
                                if (ongoingIndex !== -1) {
                                    labels03[ongoingIndex] += ' (Ongoing)';
                                }

                                // Create the bar chart using ApexCharts
                                var options03 = {
                                    chart: {
                                        type: 'bar',
                                        height: 400,
                                        width: '100%',
                                        foreColor: '#333',
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            dataLabels: {
                                                position: 'top',
                                            },
                                        },
                                    },
                                    xaxis: {
                                        categories: labels03,
                                    },
                                    yaxis: {
                                        min: 0, // Set the minimum value to 0
                                        max: 100, // Set the maximum value to 100
                                    },
                                    dataLabels: {
                                        enabled: true,
                                        formatter: function (val03) {
                                            return val03 + "%";
                                        },
                                    },
                                    series: [
                                        {
                                            name: 'Percent Rating',
                                            data: data03,
                                        },
                                    ],
                                    colors: ['#00E396'], // Different colors for each column
                                };

                                var chart03 = new ApexCharts(document.querySelector("#chart_div03"), options03);
                                chart03.render();
                            </script>





                          
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           

                            <h4 class="card-title mb-4">Buyers NPS by Month</h4>

                            <div id="chart_div04" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                                    include 'agriboostdmstransactions/db.inc.php';

                                    $sql004 = "SELECT month_num,year_num,month_name,((SUM(rate_five) - (SUM(rate_one) + SUM(rate_two) + SUM(rate_three))) / SUM(total_rating)) * 100 AS percent_rating 
                                FROM 
                                    vendor_nps 
                                WHERE
                                    (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear'
                                GROUP BY 
                                    month_num, year_num, month_name
                                ";
                                    $result004 = mysqli_query($conn, $sql004);

                                    $vendor_nps = array();
                                    while ($row004 = mysqli_fetch_assoc($result004)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row004['percent_rating'] = number_format($row004['percent_rating'], 2); // Format to 2 decimal places
                                        $vendor_nps[] = $row004;
                                    }

                                    ?>

                                        <script>
                                        // Define the data for the bar chart
                                        var chartData04 = <?php echo json_encode($vendor_nps); ?>;

                                        // Extract labels (month_name) and data (percent_rating) from the PHP array
                                        var labels04 = chartData04.map(function(item04) {
                                            return item04.month_name;
                                        });

                                        var data04 = chartData04.map(function(item04) {
                                            return parseFloat(item04.percent_rating);
                                        });

                                        // Get the current month
                                        var today04 = new Date();
                                        var currentMonth04 = today04.toLocaleString('default', { month: 'long' });

                                        // Check if a month is ongoing (current month)
                                        var ongoingIndex04 = labels04.indexOf(currentMonth04);
                                        if (ongoingIndex04 !== -1) {
                                            labels04[ongoingIndex04] += ' (Ongoing)';
                                        }

                                        // Create the bar chart using ApexCharts
                                        var options04 = {
                                            chart: {
                                                type: 'bar',
                                                height: 400,
                                                width: '100%',
                                                foreColor: '#333',
                                            },
                                            plotOptions: {
                                                bar: {
                                                    horizontal: false,
                                                    dataLabels: {
                                                        position: 'top',
                                                    },
                                                },
                                            },
                                            xaxis: {
                                                categories: labels04,
                                            },
                                            yaxis: {
                                                min: 0, // Set the minimum value to 0
                                                max: 100, // Set the maximum value to 100
                                            },
                                            dataLabels: {
                                                enabled: true,
                                                formatter: function (val04) {
                                                    return val04 + "%";
                                                },
                                            },
                                            series: [
                                                {
                                                    name: 'Percent Rating',
                                                    data: data04,
                                                },
                                            ],
                                        };

                                        var chart04 = new ApexCharts(document.querySelector("#chart_div04"), options04);
                                        chart04.render();
                                        </script>

                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="card-title mb-4">Active Farmers by Month</h4>

                        
                               <div id="chart_div05" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                                    include 'agriboostdmstransactions/db.inc.php';

                                    $sql005 = "SELECT year_num, month_num, month_name, COUNT(DISTINCT trans_partner) AS unique_partner_count FROM active_farmers_perdate WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear' GROUP BY month_num ORDER BY month_num, year_num,month_name;";
                                    $result005 = mysqli_query($conn, $sql005);

                                    $active_farmers = array();
                                    while ($row005 = mysqli_fetch_assoc($result005)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row005['unique_partner_count'] = number_format($row005['unique_partner_count']); // Format to 2 decimal places
                                        $active_farmers[] = $row005;
                                    }

                                    //echo json_encode($farmer_nps);
                                    ?>

                                    <script>
                                            
                                            // Define the data for the bar chart
                                            var chartData05 = <?php echo json_encode($active_farmers); ?>;
                                        
                                        // Extract labels (month_name) and data (percent_rating) from the PHP array
                                        var labels05 = chartData05.map(function(item05) {
                                            return item05.month_name;
                                        });
                                        
                                        var data05 = chartData05.map(function(item05) {
                                            return parseFloat(item05.unique_partner_count);
                                        });

                                        // Get the current month
                                        var today05 = new Date();
                                        var currentMonth05 = today05.toLocaleString('default', { month: 'long' });

                                        // Check if a month is ongoing (current month)
                                        var ongoingIndex05 = labels05.indexOf(currentMonth05);
                                        if (ongoingIndex05 !== -1) {
                                            labels05[ongoingIndex05] += ' (Ongoing)';
                                        }

                                        // Create the bar chart using ApexCharts
                                        var options05 = {
                                            chart: {
                                                type: 'bar',
                                                height: 400,
                                                width: '100%',
                                                foreColor: '#333',
                                            },
                                            plotOptions: {
                                                bar: {
                                                    horizontal: false,
                                                    dataLabels: {
                                                        position: 'top',
                                                    },
                                                },
                                            },
                                            xaxis: {
                                                categories: labels05,
                                            },
                                            dataLabels: {
                                                enabled: true,
                                                formatter: function (val05) {
                                                    return val05;
                                                },
                                            },
                                            series: [
                                                {
                                                    name: 'No. of Farmers',
                                                    data: data05,
                                                },
                                            ],
                                            colors: ['#00E396'], // Different colors for each line
                                        };

                                        var chart05 = new ApexCharts(document.querySelector("#chart_div05"), options05);
                                        chart05.render();
                                    </script>
            
                          
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           

                            <h4 class="card-title mb-4">Active Buyers by Month</h4>

                            <div id="chart_div06" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                                    include 'agriboostdmstransactions/db.inc.php';

                                    $sql006 = "SELECT year_num, month_num, month_name, COUNT(DISTINCT trans_partner) AS unique_partner_count FROM active_vendors_perdate WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear' GROUP BY month_num ORDER BY month_num, year_num,month_name;";
                                    $result006 = mysqli_query($conn, $sql006);

                                    $active_vendors = array();
                                    while ($row006 = mysqli_fetch_assoc($result006)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row006['unique_partner_count'] = number_format($row006['unique_partner_count']); // Format to 2 decimal places
                                        $active_vendors[] = $row006;
                                    }

                                    //echo json_encode($farmer_nps);
                                    ?>


                                        <script>
                                                        // Define the data for the bar chart
                                                        var chartData06 = <?php echo json_encode($active_vendors); ?>;
                                            
                                            // Extract labels (month_name) and data (percent_rating) from the PHP array
                                            var labels06 = chartData06.map(function(item06) {
                                                return item06.month_name;
                                            });
                                            
                                            var data06 = chartData06.map(function(item06) {
                                                return parseFloat(item06.unique_partner_count);
                                            });

                                            // Get the current month
                                            var today06 = new Date();
                                            var currentMonth06 = today06.toLocaleString('default', { month: 'long' });

                                            // Check if a month is ongoing (current month)
                                            var ongoingIndex06 = labels06.indexOf(currentMonth06);
                                            if (ongoingIndex06 !== -1) {
                                                labels06[ongoingIndex06] += ' (Ongoing)';
                                            }


                                                // Create the bar chart using ApexCharts
                                                var options06 = {
                                                    chart: {
                                                        type: 'bar',
                                                        height: 400,
                                                        width: '100%',
                                                        foreColor: '#333',
                                                    },
                                                    plotOptions: {
                                                        bar: {
                                                            horizontal: false,
                                                            dataLabels: {
                                                                position: 'top',
                                                            },
                                                        },
                                                    },
                                                    xaxis: {
                                                        categories: labels05,
                                                    },
                                                    dataLabels: {
                                                        enabled: true,
                                                        formatter: function (val06) {
                                                            return val06;
                                                        },
                                                    },
                                                    series: [
                                                        {
                                                            name: 'No. of Buyers',
                                                            data: data06,
                                                        },
                                                    ],
                                                };

                                                var chart06 = new ApexCharts(document.querySelector("#chart_div06"), options06);
                                                chart06.render();
                                        </script>
                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
            <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           
                            <h4 class="card-title mb-4">Median of Farmer's Weekly Income</h4>

                        
                               <div id="chart_div07" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                               <?php
                            // Include the database connection file
                            include 'agriboostdmstransactions/db.inc.php';

                            // SQL query to retrieve data
                            $sql007 = "SELECT month_name, 
                            MAX(CASE WHEN year_num = 2022 THEN median_sales END) AS median_2022, 
                            MAX(CASE WHEN year_num = 2023 THEN median_sales END) AS median_2023 
                            FROM farmers_weekly_median_final 
                            WHERE ((year_num = '2023' AND month_num NOT IN ('2', '3', '4', '5', '6'))
                            OR (year_num != '2023')) AND (month_num BETWEEN '$fromMonth' AND '$toMonth') 
                            GROUP BY month_name, month_num ORDER BY CAST(month_num AS SIGNED);";

                            // Execute the SQL query
                            $result007 = mysqli_query($conn, $sql007);

                            $median_sales = array();
                            while ($row007 = mysqli_fetch_assoc($result007)) {
                                $median_sales[] = $row007;
                            }
                            ?>

                            <script>
                                // Define the data for the bar chart
                                var chartData07 = <?php echo json_encode($median_sales); ?>;
                                var labels07 = chartData07.map(function(item07) {
                                    return item07.month_name;
                                });

                                var data07_1 = chartData07.map(function(item07) {
                                    return parseFloat(item07.median_2022).toFixed(2);
                                });

                                var data07_2 = chartData07.map(function(item07) {
                                    return parseFloat(item07.median_2023).toFixed(2);
                                });

                                // Create the bar chart data structure with '2022' and '2023' as separate series
                                var chartData = labels07.map(function(month, index) {
                                    return {
                                        x: month,
                                        '2022': parseFloat(data07_1[index]),
                                        '2023': parseFloat(data07_2[index])
                                    };
                                });

                                // Transpose the data to separate '2022' and '2023' series
                                var transposedData = {
                                    categories: labels07,
                                    series: [
                                        {
                                            name: '2022',
                                            data: chartData.map(function(item) {
                                                return item['2022'];
                                            }),
                                        },
                                        {
                                            name: '2023',
                                            data: chartData.map(function(item) {
                                                return item['2023'];
                                            }),
                                        },
                                    ]
                                };

                                // Create the bar chart using ApexCharts
                                var options07 = {
                                    chart: {
                                        type: 'bar',
                                        height: 400,
                                        width: '100%',
                                        foreColor: '#333',
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            dataLabels: {
                                                position: 'top',
                                            },
                                        },
                                    },
                                    xaxis: {
                                        categories: transposedData.categories,
                                    },
                                    dataLabels: {
                                        enabled: true,
                                        formatter: function (val07) {
                                            return 'P' + val07.toLocaleString('en-US', {
                                                minimumFractionDigits: 2,
                                                maximumFractionDigits: 2,
                                            });
                                        },
                                    },
                                    series: transposedData.series,
                                    colors: ['#00E396', '#008FFB'], // Different colors for each year
                                };

                                var chart07 = new ApexCharts(document.querySelector("#chart_div07"), options07);
                                chart07.render();
                            </script>
                          
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <!-- end col -->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                           

                            <h4 class="card-title mb-4">Monthly Volume Weighted Price</h4>

                            <div id="chart_div08" style="width: 100%; height: 400px; max-width: 100%; max-height: 100%;"></div>
                            <div id="line_chart_div08" style="margin-top: 20px;"></div>
                               <?php
                                    include 'agriboostdmstransactions/db.inc.php';

                                    $sql008 = "SELECT year_num, month_num, month_name, agrihub_weighted_price, other_weighted_price, price_diff  FROM volume_weighed_price_permonth WHERE (month_num BETWEEN '$fromMonth' AND '$toMonth') AND year_num='$selectedYear' ORDER BY month_num, year_num;";
                                    $result008 = mysqli_query($conn, $sql008);

                                    $weighed_volume = array();
                                    while ($row008 = mysqli_fetch_assoc($result008)) {
                                        // Format the percent_rating using number_format and store it in the array
                                        $row008['agrihub_weighted_price'] = number_format($row008['agrihub_weighted_price'],2); // Format to 2 decimal places
                                        $row008['other_weighted_price'] = number_format($row008['other_weighted_price'],2); // Format to 2 decimal places
                                        $row008['price_diff'] = number_format($row008['price_diff'],2); // Format to 2 decimal places
                                        $weighed_volume[] = $row008;
                                    }

                                   // echo json_encode($weighed_volume);
                                    ?>


                                    <script>
                                        // Define the data for the charts
                                        var chartData08 = <?php echo json_encode($weighed_volume); ?>;

                                        // Extract labels (month_name) and data (agrihub_weighted_price, other_weighted_price) from the PHP array
                                        var labels08 = chartData08.map(function(item08) {
                                            return item08.month_name;
                                        });

                                        var data08 = chartData08.map(function(item08) {
                                            return parseFloat(item08.agrihub_weighted_price).toFixed(2);
                                        });

                                        var data09 = chartData08.map(function(item08) {
                                            return parseFloat(item08.other_weighted_price).toFixed(2);
                                        });

                                        // Calculate the percent difference and format it
                                        var data10 = chartData08.map(function(item08) {
                                            var agrihubPrice08 = parseFloat(item08.agrihub_weighted_price);
                                            var otherPrice08 = parseFloat(item08.other_weighted_price);

                                            if (otherPrice08 === 0) {
                                                return 'N/A'; // Avoid division by zero
                                            }

                                            var percentDifference08 = ((agrihubPrice08 - otherPrice08) / otherPrice08) * 100;
                                            return percentDifference08.toFixed(2) + '%';
                                        });

                                    
                                        
                                        // Column chart options

                                        var options08 = {
                                        series: [
                                            {
                                                name: 'AgriHub Weighted Price',
                                                type: 'column',
                                                data: data08,
                                            },
                                            {
                                                name: 'Other Weighted Price',
                                                type: 'column',
                                                data: data09,
                                            },
                                            {
                                                name: 'Diff',
                                                type: 'line',
                                                data: data10,
                                            },
                                        ],
                                        chart: {
                                            height: 350,
                                            type: 'line',
                                            stacked: false,
                                        },
                                        dataLabels: {
                                            enabled: false,
                                        },
                                        stroke: {
                                            width: [1, 1, 4],
                                        },
                                        title: {
                                            text: 'Monthly Volume Weighted Price',
                                            align: 'left',
                                            offsetX: 110,
                                        },
                                        xaxis: {
                                            categories: labels08,
                                        },
                                        yaxis: [
                                            {
                                                axisTicks: {
                                                    show: true,
                                                },
                                                axisBorder: {
                                                    show: true,
                                                    color: '#008FFB',
                                                },
                                                labels: {
                                                    style: {
                                                        colors: '#008FFB',
                                                    },
                                                },
                                                title: {
                                                    text: "AgriHub Volume Weighted Price (Php)",
                                                    style: {
                                                        color: '#008FFB',
                                                    },
                                                },
                                                tooltip: {
                                                    enabled: true,
                                                },
                                                min: 0, // Set minimum value for the y-axis
                                                max: 100, // Set maximum value for the y-axis
                                            },
                                            {
                                                seriesName: 'Income',
                                                opposite: true,
                                                axisTicks: {
                                                    show: true,
                                                },
                                                axisBorder: {
                                                    show: true,
                                                    color: '#00E396',
                                                },
                                                labels: {
                                                    style: {
                                                        colors: '#00E396',
                                                    },
                                                },
                                                title: {
                                                    text: "Other Volume Weighted Price (Php)",
                                                    style: {
                                                        color: '#00E396',
                                                    },
                                                },
                                                tooltip: {
                                                    enabled: true,
                                                },
                                                min: 0, // Set minimum value for the y-axis
                                                max: 100, // Set maximum value for the y-axis
                                            },
                                            {
                                                seriesName: 'Diff (%)',
                                                opposite: true,
                                                axisTicks: {
                                                    show: true,
                                                },
                                                axisBorder: {
                                                    show: true,
                                                    color: '#FEB019',
                                                },
                                                labels: {
                                                    style: {
                                                        colors: '#FEB019',
                                                    },
                                                },
                                                title: {
                                                    text: "Diff (%)",
                                                    style: {
                                                        color: '#FEB019',
                                                    },
                                                },
                                                tooltip: {
                                                    enabled: true,
                                                },
                                            },
                                        ],
                                        tooltip: {
                                            fixed: {
                                                enabled: true,
                                                position: 'topLeft',
                                                offsetY: 30,
                                                offsetX: 60,
                                            },
                                        },
                                        legend: {
                                            horizontalAlign: 'left',
                                            offsetX: 40,
                                        },
                                        };


                                            var chart08 = new ApexCharts(document.querySelector("#chart_div08"), options08);
                                            chart08.render();


                                        
                                    </script>




                                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <?php } ?>