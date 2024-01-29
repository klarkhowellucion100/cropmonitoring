
<!-- STart Category -->
<?php


include 'db.inc.php';

if(isset($_POST['val_id']) && isset($_POST['val_code']) && isset($_POST['val_name']) && isset($_POST['val_comm']) && isset($_POST['val_hills']) && isset($_POST['val_area']) && isset($_POST['val_status']) && isset($_POST['val_encoder']) && isset($_POST['val_date_validated']) && isset($_POST['val_date_trans'])){ ?>


<?php 

$val_id = $_POST['val_id'];
$val_code = $_POST['val_code'];
$val_name = $_POST['val_name'];
$val_comm = $_POST['val_comm'];
$val_hills = $_POST['val_hills'];
$val_area = $_POST['val_area'];
$val_status = $_POST['val_status'];
$val_encoder = $_POST['val_encoder'];
$val_date_validated = $_POST['val_date_validated'];
$val_date_trans = $_POST['val_date_trans'];

?>





                                                           
<div class="row">
                    <?php  

                        $date_f = date('Y-m-d');

                        $date_t = date('H:i:s');
                        $date_m = date('m');
                        $date_d = date('d');
                        $date_y = date('Y');

                    ?>
<div class="col-md-12" style="padding-top: 30px;">
                                            <div class="alert alert-success" role="alert">
                                                Successfully generated! Please enter the Actual Date Sown below.
                                            </div>
    <div class="mb-3">
        <div class="commo">
            <label for="val_name">Actual Date Sown <?php echo $val_name; ?></label>
            <input type="date" class="form-control" name="date_sown_f[]" id="date_sown_f" onchange="updateHarvestDates()" oninput="updateDTSW()">
        </div>
    </div>
</div>
<div class="table-responsive">
<?php
$query1 = mysqli_query($conn, "SELECT coef, mat_days, days_in_week, frequency FROM commodity_prod_cms WHERE (`comm` LIKE '%$val_comm%') ORDER BY comm ASC");
while ($q = mysqli_fetch_array($query1)) : ?>
    <table style="display:none;" id="table_form2" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr>
                <th >Code</th>
                <th>Farmer Name</th>
                <th>Commodity</th>
                <th>Coefficient</th>
                <th>No. of Hills</th>
                <th>Frequency of Harvest</th>
                <th>Harvest per Day (kg)</th>
                <th>Harvest per Week (kg)</th>
                <th>Date Transplanted</th>
                <th>Maturity Days</th>
                <th>Date of Harvest</th>
                <th>Week of Harvest</th>
                <th>Date Range</th>
                <th>Area</th>
                <th>Status</th>
                <th>Date Sown</th>
                <th>Date Created</th>
                <th>Encoder</th>
                <th>Date Validated</th>
            </tr>
        </thead>

        <tbody id="table-coef-query">
            <tr id="row-1">

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="code[]" id="code" value="<?php echo $val_code; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="name[]" id="name" value="<?php echo $val_name; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="comm[]" id="comm" value="<?php echo $val_comm; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="coef[]" id="coef" value="<?php echo $q['coef']; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="number" class="form-control" name="hills[]" id="hills" value="<?php echo $val_hills; ?>">
                                <p><?php echo $val_hills;?></p>
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <label for=""><?php echo $q['frequency']; ?> times per week</label>
                                <input type="number" class="form-control" name="frequency[]" id="frequency" value="<?php echo $q['frequency']; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="number" class="form-control" name="vol_del_day[]" id="vol_del_day" value="<?php $frequency_f = $q['frequency'];
                                                                                                                        $coef_f = $q['coef'];
                                                                                                                        $per_day = $val_hills * $coef_f;
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
                                <input type="number" class="form-control" name="vol_del_week[]" id="vol_del_week" value="<?php $frequency_f = $q['frequency'];
                                                                                                                        $coef_f = $q['coef'];
                                                                                                                        $per_week = ($val_hills * $coef_f)*$frequency_f;
                                                                                                                        echo $per_week;?>">
                                <label for=""><?php echo $per_week;?>kg per week</label>                                                                                       
                            </div>
                        </div>
                    </div>
                </td>

                

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="date" class="form-control" name="date_trans[]" id="date_trans" value="<?php echo $val_date_trans; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
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

              



                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="area[]" id='area' value="<?php echo $val_area; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="status_comm[]" id='status_comm' value="<?php echo $val_status; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="date_sown[]" id='date_sown'>
                            </div>
                        </div>
                    </div>
                </td>

            
                
                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="date_created[]" id='date_created' value="<?php echo $date_f; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="encoder[]" id='encoder' value="<?php echo $val_encoder; ?>">
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <div class="commo">
                                <input type="text" class="form-control" name="date_validated[]" id='date_validated' value="<?php echo $val_date_validated; ?>">
                            </div>
                        </div>
                    </div>
                </td>


                
            </tr>
        </tbody>
    </table>
    
<?php endwhile; ?>

</div>
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
                                                        area: row.find('#area').val(),
                                                        status_comm: row.find('#status_comm').val(),
                                                        date_sown: row.find('#date_sown').val(),
                                                        date_created: row.find('#date_created').val(),
                                                        encoder: row.find('#encoder').val(),
                                                        date_validated: row.find('#date_validated').val(),
                                                     
                                                       
                                                    };

                                                    // Push the rowData to the dataArray
                                                    dataArray.push(rowData);
                                                });

                                                //alert(JSON.stringify(dataArray, null, 2));

                                                // Send the dataArray to the PHP script
                                                $.ajax({
                                                    url: "dashboardcommitmentupdateprocess.php",
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

