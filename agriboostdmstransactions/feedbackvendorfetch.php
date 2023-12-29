<?php


include 'db.inc.php';

if(isset($_POST['feedbackfetch'])){ ?>


<?php 

$feedbackfetch = $_POST['feedbackfetch'];


?>

<?php $yearnow=date('Y'); ?>



<div class="row">


<div class="col-md-12 col-xl-12">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">   

       <a class="btn btn-raised btn-primary waves-effect mb-3" href="feedbackvendor.php">Back</a>
         
<script>         
    $(document).ready(function(){
    $('.farmerinfo').click(function(){
        var farmerid = $(this).data('id');
    
        $.ajax({
                    url:"agriboostdmstransactions/farmercommitmentupdate.php",
                    method:"POST",
                    data:{farmerid:farmerid},
                    success:function(data){
                        $('#modal_update').html(data);
                        $('#myModalUpdate').modal('show');
                    }
                });

    })
})
</script>

             

                   
                      
                                 
          
                 


<div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Feedback</h4>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link mb-2 active" id="v-pills-q1-tab" data-bs-toggle="pill" href="#v-pills-q1" role="tab" aria-controls="v-pills-q1" aria-selected="true">Q1</a>
                                                <a class="nav-link mb-2" id="v-pills-q2-tab" data-bs-toggle="pill" href="#v-pills-q2" role="tab" aria-controls="v-pills-q2" aria-selected="false">Q2</a>
                                                <a class="nav-link mb-2" id="v-pills-q3-tab" data-bs-toggle="pill" href="#v-pills-q3" role="tab" aria-controls="v-pills-q3" aria-selected="false">Q3</a>
                                                <a class="nav-link mb-2" id="v-pills-q4-tab" data-bs-toggle="pill" href="#v-pills-q4" role="tab" aria-controls="v-pills-q4" aria-selected="false">Q4</a>
                                                <a class="nav-link mb-2" id="v-pills-q5-tab" data-bs-toggle="pill" href="#v-pills-q5" role="tab" aria-controls="v-pills-q5" aria-selected="false">Q5</a>
                                                <a class="nav-link mb-2" id="v-pills-q6-tab" data-bs-toggle="pill" href="#v-pills-q6" role="tab" aria-controls="v-pills-q6" aria-selected="false">Q6</a>
                                                <a class="nav-link mb-2" id="v-pills-q7-tab" data-bs-toggle="pill" href="#v-pills-q7" role="tab" aria-controls="v-pills-q7" aria-selected="false">Q7</a>                                                
                                                <a class="nav-link mb-2" id="v-pills-q8-tab" data-bs-toggle="pill" href="#v-pills-q8" role="tab" aria-controls="v-pills-q8" aria-selected="false">Q8</a>
                                                <a class="nav-link mb-2" id="v-pills-q9-tab" data-bs-toggle="pill" href="#v-pills-q9" role="tab" aria-controls="v-pills-q9" aria-selected="false">Q9</a>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                                                <div class="tab-pane fade show active" id="v-pills-q1" role="tabpanel" aria-labelledby="v-pills-q1-tab">
                                                    <span style="color: royalblue">Reason/s for delivering to AgriHub</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                      Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p><?php echo $result001 ['quniqueone'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-q2" role="tabpanel" aria-labelledby="v-pills-q2-tab">
                                                    <span style="color: royalblue">Are you happy with your delivery to AgriHub?</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                    Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p>Score: <span style="color: green;"><?php echo $result001 ['qone'];?></span></p>
                                                    <p><?php echo $result001 ['qoner'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-q3" role="tabpanel" aria-labelledby="v-pills-q3-tab">
                                                    <span style="color: royalblue">Are you agreeable with AgriHub's buying price?</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                    Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p>Score: <span style="color: green;"><?php echo $result001 ['qtwo'];?></span></p>
                                                    <p><?php echo $result001 ['qtwor'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-q4" role="tabpanel" aria-labelledby="v-pills-q4-tab">
                                                    <span style="color: royalblue">Did you profit from your delivery to AgriHub?</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                    Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p>Score: <span style="color: green;"><?php echo $result001 ['qthree'];?></span></p>
                                                    <p><?php echo $result001 ['qthreer'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-q5" role="tabpanel" aria-labelledby="v-pills-q5-tab">
                                                    <span style="color: royalblue">Will you continue delivering to AgriHub?</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                    Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p>Score: <span style="color: green;"><?php echo $result001 ['qfour'];?></span></p>
                                                    <p><?php echo $result001 ['qfourr'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-q6" role="tabpanel" aria-labelledby="v-pills-q6-tab">
                                                    <span style="color: royalblue">Is AgriBOOST/AgriHub's presence beneficial to you?</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                    Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p>Score: <span style="color: green;"><?php echo $result001 ['qfive'];?></span></p>
                                                    <p><?php echo $result001 ['qfiver'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-q7" role="tabpanel" aria-labelledby="v-pills-q7-tab">
                                                    <span style="color: royalblue">Will you recommend AgriHub to other farmers? (NPS)</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                    Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p>Score: <span style="color: green;"><?php echo $result001 ['qsix'];?></span></p>
                                                    <p><?php echo $result001 ['qsixr'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-q7" role="tabpanel" aria-labelledby="v-pills-q7-tab">
                                                    <span style="color: royalblue">What is the advantage of AgriHub's presence?</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                    Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p>Score: <span style="color: green;"><?php echo $result001 ['qsix'];?></span></p>
                                                    <p><?php echo $result001 ['qsixr'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-q8" role="tabpanel" aria-labelledby="v-pills-q8-tab">
                                                    <span style="color: royalblue">What is the advantage of AgriHub's presence?</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                    Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p><?php echo $result001 ['quniquetwo'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-q9" role="tabpanel" aria-labelledby="v-pills-q9-tab">
                                                    <span style="color: royalblue">Suggestions on how to improve the AgriBOOST Project/AgriHub's operation</span><br><br>

                                                    <?php
                                                    include 'db.inc.php';
                                                    $query001 = mysqli_query($conn,"SELECT * FROM feedbackrecord WHERE fnamecode='$feedbackfetch'");
                                                    while($result001 = mysqli_fetch_array($query001)): ?>
                                                    <p>
                                                    Date: <?php echo date('F d, Y', strtotime($result001['feeddate'])); ?>
                                                    </p>
                                                    <p><?php echo $result001 ['qsuggest'];?></p>
                                                    <?php endwhile; ?>
                                                </div>

                                      

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->


</div>
                    <!-- end row-->

<?php } ?>

