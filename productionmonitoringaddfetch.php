
<!-- STart Category -->
<?php


include 'db.inc.php';

if(isset($_POST['comm_name']) && isset($_POST['farmer_name']) && isset($_POST['no_hills']) && isset($_POST['dt_trans']) && isset($_POST['coordinates']) && isset($_POST['comm_area']) && isset($_POST['status_comm_f']) && isset($_POST['code_m'])){ ?>


<?php 

$comm_name = $_POST['comm_name'];
$farmer_name = $_POST['farmer_name'];
$no_hills = $_POST['no_hills'];
$dt_trans = $_POST['dt_trans'];
$coordinates = $_POST['coordinates'];
$comm_area = $_POST['comm_area'];
$status_comm_f = $_POST['status_comm_f'];
$code_m = $_POST['code_m'];

?>





                                                           
<div class="row">
                    <?php  

                        $date_f = date('Y-m-d');

                        $date_t = date('H:i:s');
                        $date_m = date('m');
                        $date_d = date('d');
                        $date_y = date('Y');

                    ?>
<div class="col-md-12">
                               
    <div class="mb-3">
        <div class="commo">
            <label for="farmer_name">Date Sown <?php echo $farmer_name; ?></label>
            <input type="date" class="form-control" name="date_sown_f[]" id="date_sown_f" onchange="updateHarvestDates()" oninput="updateDTSW()">
        </div>
    </div>
</div>

<?php
$query1 = mysqli_query($conn, "SELECT coef, mat_days, days_in_week, frequency FROM commodity_prod_cms WHERE (`comm` LIKE '%$comm_name%') ORDER BY comm ASC");
while ($q = mysqli_fetch_array($query1)) : ?>
    <table id="table_form2" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr>
                <th style="display:none;">Code</th>
                <th style="display:none;">Farmer Name</th>
                <th style="display:none;">Commodity</th>
                <th style="display:none;">Coefficient</th>
                <th style="display:none;">No. of Hills</th>
                <th>Frequency of Harvest</th>
                <th>Harvest per Day (kg)</th>
                <th>Harvest per Week (kg)</th>
                <th style="display:none;">Date Transplanted</th>
                <th style="display:none;">Maturity Days</th>
                <th>Date of Harvest</th>
                <th>Week of Harvest</th>
                <th>Date Range</th>
                <th style="display:none;">Location</th>
                <th style="display:none;">Area</th>
                <th style="display:none;">Status</th>
                <th style="display:none;">Date Sown</th>
            </tr>
        </thead>
        <tbody id="table-coef-query">
            <tr id="row-1">

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="code[]" id="code" value="<?php echo $code_m; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="name[]" id="name" value="<?php echo $farmer_name; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="comm[]" id="comm" value="<?php echo $comm_name; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="coef[]" id="coef" value="<?php echo $q['coef']; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="number" class="form-control" name="hills[]" id="hills" value="<?php echo $no_hills; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <label for=""><?php echo $q['frequency']; ?> times per week</label>
                                <input style="display:none;" type="number" class="form-control" name="frequency[]" id="frequency" value="<?php echo $q['frequency']; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input style="display:none;" type="number" class="form-control" name="vol_del_day[]" id="vol_del_day" value="<?php $frequency_f = $q['frequency'];
                                                                                                                        $coef_f = $q['coef'];
                                                                                                                        $per_day = $no_hills * $coef_f;
                                                                                                                        echo $per_day;?>">
                                <label for=""><?php echo $per_day;?>kg per day</label>                                                                                       
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input style="display:none;" type="number" class="form-control" name="vol_del_week[]" id="vol_del_week" value="<?php $frequency_f = $q['frequency'];
                                                                                                                        $coef_f = $q['coef'];
                                                                                                                        $per_week = ($no_hills * $coef_f)*$frequency_f;
                                                                                                                        echo $per_week;?>">
                                <label for=""><?php echo $per_week;?>kg per week</label>                                                                                       
                            </div>
                        </div>
                    </div>
                </td>

                

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="date" class="form-control" name="date_trans[]" id="date_trans" value="<?php echo $dt_trans; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="number" class="form-control" name="mat_days[]" id='mat_days' value="<?php echo $q['mat_days']; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="date" class="form-control" name="date_harvest[]" id='date_harvest' readonly>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="number" class="form-control" name="week_harvest[]" id='week_harvest' readonly>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="date_range[]" id='date_range' readonly>
                            </div>
                        </div>
                    </div>
                </td>

              


                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <textarea class="form-control" id="location" name="location[]" readonly><?php echo $coordinates;?></textarea>
                            </div>
                        </div>
                    </div>
                </td>

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="area[]" id='area' value="<?php echo $comm_area; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="status_comm[]" id='status_comm' value="<?php echo $status_comm_f; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="date_sown[]" id='date_sown'>
                            </div>
                        </div>
                    </div>
                </td>

                
                <td style="display:none;">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="date_created[]" id='date_created' value="<?php echo $date_f; ?>">
                            </div>
                        </div>
                    </div>
                </td>


                
            </tr>
        </tbody>
    </table>

<?php endwhile; ?>


                        <script>
                            function updateDTSW() {
                                var dtswValue = document.getElementById("date_sown_f").value;
                                document.querySelectorAll('input[name="date_sown[]"]').forEach(function(input) {
                                    input.value = dtswValue;
                                });
                            }
                        </script>

                                    <script>
                                        $(document).ready(function () {
                                            $("#submit-btn").click(function (e) {
                                                e.preventDefault();

                                                // Create an array to store data for each row
                                                var dataArray = [];

                                                // Loop through each row in the table
                                                $('#table_form2 tbody tr').each(function () {
                                                    var row = $(this);
                                                    var rowData = {
                                                        code: row.find('#code').val(),
                                                        comm: row.find('#comm').val(),
                                                        name: row.find('#name').val(),
                                                        coef: row.find('#coef').val(),
                                                        hills: row.find('#hills').val(),
                                                        frequency: row.find('#frequency').val(),
                                                        vol_del_day: row.find('#vol_del_day').val(),
                                                        vol_del_week: row.find('#vol_del_week').val(),
                                                        date_trans: row.find('#date_trans').val(),
                                                        mat_days: row.find('#mat_days').val(),
                                                        date_harvest: row.find('#date_harvest').val(),
                                                        week_harvest: row.find('#week_harvest').val(),
                                                        date_range: row.find('#date_range').val(),
                                                        location: row.find('#location').val(),
                                                        area: row.find('#area').val(),
                                                        status_comm: row.find('#status_comm').val(),
                                                        date_sown: row.find('#date_sown').val(),
                                                        date_created: row.find('#date_created').val(),
                                                     
                                                       
                                                    };

                                                    // Push the rowData to the dataArray
                                                    dataArray.push(rowData);
                                                });

                                                //alert(JSON.stringify(dataArray, null, 2));

                                                // Send the dataArray to the PHP script
                                                $.ajax({
                                                    url: "productionmonitoringaddprocess.php",
                                                    method: "POST",
                                                    data: { dataArray: dataArray },
                                                    success: function (data) {
                                                        var response = JSON.parse(data);

                                                        if (response.status === 'success') {
                                                            Swal.fire({
                                                                title: 'Success',
                                                                text: response.message,
                                                                icon: 'success',
                                                                timer: 2000
                                                            }).then(() => {
                                                                location.reload();
                                                            });
                                                        } else {
                                                            Swal.fire({
                                                                title: 'Error',
                                                                text: response.message,
                                                                icon: 'error'
                                                            });
                                                        }
                                                    },
                                                    error: function () {
                                                        Swal.fire({
                                                            title: 'Error',
                                                            text: 'An error occurred during the request.',
                                                            icon: 'error'
                                                        });
                                                    }
                                                });
                                            });
                                        });
                                    </script>

<script>
    function getWeekNumber(d) {
        // Copy date so don't modify original
        d = new Date(Date.UTC(d.getFullYear(), d.getMonth(), d.getDate()));
        // Set to nearest Thursday: current date + 4 - current day number
        // Make Sunday's day number 7
        d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay() || 7));
        // Get first day of year
        var yearStart = new Date(Date.UTC(d.getUTCFullYear(), 0, 1));
        // Calculate full weeks to nearest Thursday
        var weekNo = Math.ceil(((d - yearStart) / 86400000 + 1) / 7);
        // Return array of year and week number
        return [d.getUTCFullYear(), weekNo];
    }

    function updateHarvestDates() {
        var dateSown = document.getElementById('date_sown_f').value;
        var dateHarvestInputs = document.getElementsByName('date_harvest[]');
        var weekHarvestInputs = document.getElementsByName('week_harvest[]');
        var dateRangeInputs = document.getElementsByName('date_range[]');
        var mat_days = parseInt(document.getElementById('mat_days').value); // Parse as an integer
        var interval = 7; // Interval in days

        for (var i = 0; i < dateHarvestInputs.length; i++) {
            var currentRowDate = new Date(dateSown);

            // Adding mat_days to the currentRowDate
            currentRowDate.setDate(currentRowDate.getDate() + mat_days);

            // Adding the interval to the currentRowDate
            currentRowDate.setDate(currentRowDate.getDate() + interval * i);

            var formattedDate = currentRowDate.toISOString().split('T')[0];
            dateHarvestInputs[i].value = formattedDate;

            // Calculate week number
            var weekNumber = getWeekNumber(currentRowDate)[1];
            weekHarvestInputs[i].value = weekNumber;

            // Calculate date range based on week number
            var dateRangeStart = new Date(currentRowDate);
            dateRangeStart.setDate(dateRangeStart.getDate() - currentRowDate.getDay()); // Set to the beginning of the week

            var dateRangeEnd = new Date(dateRangeStart);
            dateRangeEnd.setDate(dateRangeEnd.getDate() + 6); // Set to the end of the week

            var formattedDateRange = dateRangeStart.toISOString().split('T')[0] + ' to ' + dateRangeEnd.toISOString().split('T')[0];
            dateRangeInputs[i].value = formattedDateRange;
        }
    }
</script>








                        <script>         
                                $(document).ready(function(){
                                $('.productinfo').click(function(){
                                    var commodityid = $(this).data('id');
                                   
                                    $.ajax({
                                                url:"transactionorderview.php",
                                                method:"POST",
                                                data:{commodityid:commodityid},
                                                success:function(data){
                                                    $('.modal-body').html(data);
                                                    $('#exampleModal').modal('show');
                                                    displayData();
                                                }
                                            });

                                })
                            })
                        </script>
                </div>
                 
<?php } ?>

<!-- End Category -->

