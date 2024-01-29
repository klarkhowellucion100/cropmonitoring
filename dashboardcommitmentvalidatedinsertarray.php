<?php
// pricetabulationprocess.php

// Include your database connection file
include 'db.inc.php';

if (isset($_POST['dataArray'])) {
    $dataArray = $_POST['dataArray'];

    // Now you can loop through $dataArray and save the data to the database
    foreach ($dataArray as $data) {
        // Sanitize data to prevent SQL injection
        foreach ($data as $key => $value) {
            $data[$key] = mysqli_real_escape_string($conn, $value);
        }

        // Check if $level_from is not empty
        if (!empty($data['name_from'])) {
            // Your database insertion query, adjust based on your actual table structure
            $insertQuery = "INSERT INTO pest_monitoring_cms (id_from, code_from, type_from, encoder_from, date_created_from, name_from, level_from, date_validated, code_monitor_pd) 
                            VALUES ('{$data['id_from']}', '{$data['code_from']}', '{$data['type_from']}', '{$data['encoder_from']}', '{$data['date_created_from']}', '{$data['name_from']}', '{$data['level_from']}', '{$data['date_validated_from']}', '{$data['code_monitor_pd']}')";
            
            // Perform the insertion
            $result003 = mysqli_query($conn, $insertQuery);

            // Check if the insertion was successful
            // if (!$result003) {
            //     // Handle the error as needed
            //     echo json_encode(['status' => 'error', 'message' => 'Error inserting data into the database']);
            //     exit; // Terminate script
            // }
        }

        // Check if $level_from1 is not empty
        if (!empty($data['name_from1'])) {
            $insertQuery01 = "INSERT INTO pest_monitoring_cms (id_from, code_from, type_from, encoder_from, date_created_from, name_from, level_from, date_validated, code_monitor_pd) 
                              VALUES ('{$data['id_from1']}', '{$data['code_from1']}', '{$data['type_from1']}', '{$data['encoder_from1']}', '{$data['date_created_from1']}', '{$data['name_from1']}', '{$data['level_from1']}', '{$data['date_validated_from1']}' , '{$data['code_monitor_pd1']}')";
            
            // Perform the insertion
            $result004 = mysqli_query($conn, $insertQuery01);
        }

        // Check if $level_from1 is not empty
        if (!empty($data['name_from02'])) {
            $insertQuery02 = "INSERT INTO fertilizer_monitoring_cms (id_from, code_from, code_monitor_pd, encoder_from, date_validated, date_created_from, name_from) 
                              VALUES ('{$data['id_from02']}', '{$data['code_from02']}', '{$data['code_monitor_pd02']}', '{$data['encoder_from02']}', '{$data['date_validated_from02']}', '{$data['date_created_from02']}', '{$data['name_from02']}')";
            
            // Perform the insertion
            $result005 = mysqli_query($conn, $insertQuery02);
        }

        if (!empty($data['name_from03'])) {
            $insertQuery03 = "INSERT INTO controlagent_monitoring_cms (id_from, code_from, code_monitor_pd, encoder_from, date_validated, date_created_from, name_from) 
                              VALUES ('{$data['id_from03']}', '{$data['code_from03']}', '{$data['code_monitor_pd03']}', '{$data['encoder_from03']}', '{$data['date_validated_from03']}', '{$data['date_created_from03']}', '{$data['name_from03']}')";
            
            // Perform the insertion
            $result006 = mysqli_query($conn, $insertQuery03);
        }
    }

    // Provide a response back to the AJAX call
    echo json_encode(['status' => 'success', 'message' => 'Data saved successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
