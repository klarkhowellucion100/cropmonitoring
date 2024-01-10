<?php
// pricetabulationprocess.php

// Include your database connection file
include 'db.inc.php';

if (isset($_POST['dataArray'])) {
    $dataArray = $_POST['dataArray'];

    // Now you can loop through $dataArray and save the data to the database
    foreach ($dataArray as $data) {
        // Sanitize data to prevent SQL injection
        $coef = mysqli_real_escape_string($conn, $data['coef']);
        $code = mysqli_real_escape_string($conn, $data['code']);
        $date_created = mysqli_real_escape_string($conn, $data['date_created']);
        $dh = mysqli_real_escape_string($conn, $data['dh']);
        $dr = mysqli_real_escape_string($conn, $data['dr']);
        $mat_days = mysqli_real_escape_string($conn, $data['mat_days']);
        $comm = mysqli_real_escape_string($conn, $data['comm']);
        $days_in_week = mysqli_real_escape_string($conn, $data['days_in_week']);
        $frequency = mysqli_real_escape_string($conn, $data['frequency']);
       
        // ... (repeat for other variables)

        // Check if $comm_priv is not empty
        $coef = mysqli_real_escape_string($conn, $data['coef']);
        if ($coef !== "") {
            // Your database insertion query, adjust based on your actual table structure
        $insertQuery = "INSERT INTO commodity_prod_cms (coef,code,date_created,dh,dr,mat_days,comm,days_in_week,frequency) VALUES ('$coef','$code','$date_created','$dh','$dr','$mat_days','$comm','$days_in_week','$frequency')";
        
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
