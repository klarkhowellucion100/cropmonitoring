<?php
include 'db.inc.php';

// Assuming you want to count records where trans_partnertype is 'Vendor'
$queryCount = mysqli_query($conn, "SELECT COUNT(*) AS total FROM erp_record WHERE trans_partnertype='Vendor'");
$row = mysqli_fetch_assoc($queryCount);
$totalRows = $row['total'];
$totalPages = ceil($totalRows / $perPage); // Calculate the total number of pages

echo $totalPages;

mysqli_close($conn);
?>
