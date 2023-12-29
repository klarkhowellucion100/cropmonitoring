<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'db.inc.php';
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $trans_comm = $_POST["trans_comm"]; // Array of commodities
    $trans_type = $_POST["trans_type"]; // Array of commodities
    $trans_sellingtype = $_POST["trans_sellingtype"]; // Array of commodities
    $trans_class = $_POST["trans_class"]; // Array of commodities
    $trans_price = $_POST["trans_price"]; // Array of commodities
    $trans_date = $_POST["trans_date"]; // Array of commodities
    $trans_commitvol = $_POST["trans_commitvol"]; // Array of commodities
    $trans_status = $_POST["trans_status"]; // Array of commodities
    $trans_partner = $_POST["trans_partner"]; // Array of commodities
    $trans_partnercode = $_POST["trans_partnercode"]; // Array of commodities
    $trans_partnertype = $_POST["trans_partnertype"]; // Array of commodities
    $trans_encoder = $_POST["trans_encoder"]; // Array of commodities

    $dates = array();
    $transactionIds = array(); // Store transaction IDs for each unique date

    // Check if the number of commodities matches the number of quantities and users
    if (
        count($trans_comm) === count($trans_type) &&
        count($trans_comm) === count($trans_sellingtype) &&
        count($trans_comm) === count($trans_class) &&
        count($trans_comm) === count($trans_price) &&
        count($trans_comm) === count($trans_date) &&
        count($trans_comm) === count($trans_commitvol) &&
        count($trans_comm) === count($trans_status) &&
        count($trans_comm) === count($trans_partner) &&
        count($trans_comm) === count($trans_partnercode) &&
        count($trans_comm) === count($trans_partnertype) &&
        count($trans_comm) === count($trans_encoder)
    ) {
        for ($i = 0; $i < count($trans_comm); $i++) {
            $commodities = $trans_comm[$i];
            $types = $trans_type[$i];
            $sellingtypes = $trans_sellingtype[$i];
            $classes = $trans_class[$i];
            $prices = $trans_price[$i];
            $datebeg = $trans_date[$i];
            $volume = $trans_commitvol[$i];
            $status = $trans_status[$i];
            $partner = $trans_partner[$i];
            $partnercode = $trans_partnercode[$i];
            $partnertype = $trans_partnertype[$i];
            $encoder = $trans_encoder[$i];

            if ($volume != "") { // Check if $trans_commitvol is not equal to 0
                $current_date = new DateTime($start_date);

                while ($current_date <= new DateTime($end_date)) {
                    $day_of_week = $current_date->format("N"); // 1 (Monday) to 7 (Sunday)

                    if ($day_of_week == 2 || $day_of_week == 5) { // Tuesday (2) or Wednesday (5)
                        $date = $current_date->format("Y-m-d");

                        // Generate or reuse the same transaction ID for the same date
                        if (!isset($transactionIds[$date])) {
                            $transactionIds[$date] = generateUniqueTransactionID();
                        }

                        $transaction_id = $transactionIds[$date];
                   
                        if ($volume != ""){
                        $sql = "INSERT INTO `transactionfinalhubpos` (trans_adate, ftrans_code, trans_comm, trans_type, trans_sellingtype, trans_class, trans_price, trans_commitvol, trans_encoder)
                                VALUES ('$date', '$transaction_id', '$commodities', '$types', '$sellingtypes', '$classes', '$prices', '$volume', '$encoder')";
                        $result003 = mysqli_query($conn, $sql);
                        }

                        if ($result003) {
                            // Check if the transaction_id already exists in the users table
                            $sql_check = "SELECT COUNT(*) as count FROM `transactionsdrhubpos` WHERE trans_code = '$transaction_id'";
                            $result_check = mysqli_query($conn, $sql_check);
                            $row = mysqli_fetch_assoc($result_check);
                            $count = $row['count'];

                            if ($count == 0) {
                                // Insert user data only if transaction_id is unique
                                $sql2 = "INSERT INTO `transactionsdrhubpos` (trans_adate, trans_partner, trans_code, trans_status, ftrans_encoder, ftrans_date, trans_partnertype, trans_partnercode)
                                VALUES ('$date', '$partner', '$transaction_id', '$status', '$encoder', '$datebeg', '$partnertype', '$partnercode')";
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
        }

        // Respond with a success message
        echo "success";
    } else {
        // Respond with an error message
        echo "Number of commodities, quantities, and users do not match.";
    }
}

// Function to generate a unique transaction ID
function generateUniqueTransactionID()
{
    return uniqid();
}
?>
