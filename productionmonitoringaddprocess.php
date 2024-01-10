<?php
// pricetabulationprocess.php

// Include your database connection file
include 'db.inc.php';

if (isset($_POST['dataArray'])) {
    $dataArray = $_POST['dataArray'];

    // Now you can loop through $dataArray and save the data to the database
    foreach ($dataArray as $data) {
        // Sanitize data to prevent SQL injection
        $code = mysqli_real_escape_string($conn, $data['code']);
        $comm = mysqli_real_escape_string($conn, $data['comm']);
        $name = mysqli_real_escape_string($conn, $data['name']);
        $coef = mysqli_real_escape_string($conn, $data['coef']);
        $hills = mysqli_real_escape_string($conn, $data['hills']);
        $frequency = mysqli_real_escape_string($conn, $data['frequency']);
        $vol_del_day = mysqli_real_escape_string($conn, $data['vol_del_day']);
        $vol_del_week = mysqli_real_escape_string($conn, $data['vol_del_week']);
        $date_trans = mysqli_real_escape_string($conn, $data['date_trans']);
        $mat_days = mysqli_real_escape_string($conn, $data['mat_days']);
        $date_harvest = mysqli_real_escape_string($conn, $data['date_harvest']);
        $week_harvest = mysqli_real_escape_string($conn, $data['week_harvest']);
        $date_range = mysqli_real_escape_string($conn, $data['date_range']);
        $location = mysqli_real_escape_string($conn, $data['location']);
        $area = mysqli_real_escape_string($conn, $data['area']);
        $status_comm = mysqli_real_escape_string($conn, $data['status_comm']);
        $date_sown = mysqli_real_escape_string($conn, $data['date_sown']);
        $date_created = mysqli_real_escape_string($conn, $data['date_created']);
  
       
        // ... (repeat for other variables)

        // Check if $comm_priv is not empty
        $coef = mysqli_real_escape_string($conn, $data['hills']);
        if ($hills !== "") {
            // Your database insertion query, adjust based on your actual table structure
        $insertQuery = "INSERT INTO production_cms (code,comm,`name`,coef,hills,frequency,vol_del_day,vol_del_week,date_trans,mat_days,date_harvest,week_harvest,date_range,`location`,area,status_comm,date_sown,date_created) 
        VALUES ('$code','$comm','$name','$coef','$hills','$frequency','$vol_del_day','$vol_del_week','$date_trans','$mat_days','$date_harvest','$week_harvest','$date_range','$location','$area','$status_comm','$date_sown','$date_created')";
        
            // Perform the insertion
            $result = mysqli_query($conn, $insertQuery);

            // Check if the insertion was successful
            if (!$result) {
                // Handle the error as needed
                echo json_encode(['status' => 'error', 'message' => 'Error inserting data into the database']);
                exit; // Terminate script
            }
        }
    }

    // Provide a response back to the AJAX call
    echo json_encode(['status' => 'success', 'message' => 'Data saved successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
