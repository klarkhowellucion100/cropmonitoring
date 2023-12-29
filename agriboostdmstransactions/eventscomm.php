

<?php include_once 'header.php';?>




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
  $finalcode='EV'.date('Y').''.date('d').''.createRandomPassword().''.date('m');
?>


<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Events Log</h4>

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



<div id="feebackmain">

<div class="container-fluid">

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Calendar</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                    <li class="breadcrumb-item active">Calendar</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title" style='color: white;'>Activity</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="agriboostdmstransactions/save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label" style='display:none;'>Code</label>
                                    <input type="text" readonly class="form-control form-control-sm rounded-0" name="code" id="code" value='<?php echo $finalcode; ?>' required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required placeholder='Enter Title of Activity *'>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description"></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Location</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="location" id="location" placeholder='Enter Location *'>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Target Audience</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="targetaudience" id="targetaudience" placeholder='Enter Target Audience *'>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">No. of Attendees</label>
                                    <input type="number" class="form-control form-control-sm rounded-0" name="totalaudience" id="totalaudience" placeholder='Enter No. of Audience *'>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Code</dt>
                            <dd id="code" class=""></dd>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                            <dt class="text-muted">Location</dt>
                            <dd id="location" class=""></dd>
                            <dt class="text-muted">Target Audience</dt>
                            <dd id="targetaudience" class=""></dd>
                            <dt class="text-muted">Total Audience</dt>
                            <dd id="totalaudience" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
<!-- container-fluid -->
</div>
               
<?php 
$schedules = $conn->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>



<textarea name="" id="parsevalue" style='display:none;' cols="30" rows="10"><?= json_encode($sched_res) ?></textarea>

                </div>
            </div>




        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    



<?php include_once 'footer.php';?>