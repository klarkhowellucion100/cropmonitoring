<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'db.php';
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $commodities = $_POST["comm"]; // Array of commodities
    $qty = $_POST["qty"]; // Array of quantities
    $users = $_POST["user"]; // Array of users

    $dates = array();
    $transactionIds = array(); // Store transaction IDs for each unique date

    // Check if the number of commodities matches the number of quantities and users
    if (count($commodities) === count($qty) && count($commodities) === count($users)) {
        for ($i = 0; $i < count($commodities); $i++) {
            $commodity = $commodities[$i];
            $quan = $qty[$i];
            $user = $users[$i];

            $current_date = new DateTime($start_date);

            while ($current_date <= new DateTime($end_date)) {
                $day_of_week = $current_date->format("N"); // 1 (Monday) to 7 (Sunday)

                if ($day_of_week == 2 || $day_of_week == 3) { // Tuesday (2) or Wednesday (3)
                    $date = $current_date->format("Y-m-d");

                    // Generate or reuse the same transaction ID for the same date
                    if (!isset($transactionIds[$date])) {
                        $transactionIds[$date] = generateUniqueTransactionID();
                    }

                    $transaction_id = $transactionIds[$date];
                    $dates[] = "$date $commodity $quan - Transaction ID: $transaction_id";

                    $sql = "INSERT INTO `transactionsdates` (dates_beg, comm, transaction_id, qty)
                            VALUES ('$date', '$commodity', '$transaction_id', '$quan')";
                    $result003 = mysqli_query($conn, $sql);

                    if ($result003) {
                        // Check if the transaction_id already exists in the users table
                        $sql_check = "SELECT COUNT(*) as count FROM `users` WHERE transaction_id = '$transaction_id'";
                        $result_check = mysqli_query($conn, $sql_check);
                        $row = mysqli_fetch_assoc($result_check);
                        $count = $row['count'];

                        if ($count == 0) {
                            // Insert user data only if transaction_id is unique
                            $sql2 = "INSERT INTO `users` (dates_ar, transaction_id, name_f)
                                     VALUES ('$date', '$transaction_id', '$user')";
                            $result_user = mysqli_query($conn, $sql2);

                            if (!$result_user) {
                                echo "Error inserting user data: " . mysqli_error($conn);
                            }
                        }
                    } else {
                        echo "Error inserting transaction data: " . mysqli_error($conn);
                    }
                }

                $current_date->modify("+1 day");
            }
        }
    } else {
        echo "Number of commodities, quantities, and users do not match.";
    }

    // Output the array of dates
    echo json_encode($dates);
}

// Function to generate a unique transaction ID
function generateUniqueTransactionID() {
    return uniqid();
}

?>
