<?php
// Connect to your database
// Assuming you have already connected using mysqli and $conn
include 'db.inc.php';
$sql = "SELECT * FROM areashubpos GROUP BY barangay";
$query = mysqli_query($conn, $sql);

$barangays = array();
while ($row = mysqli_fetch_assoc($query)) {
    $barangays[] = $row;
}

header('Content-Type: application/json');
echo json_encode($barangays);
?>