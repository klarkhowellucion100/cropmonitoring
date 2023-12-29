
<?php
include 'agriboostdmstransactions/db.inc.php';

// Parameters
$page = $_GET['page'];
$recordsPerPage = 10; // Change this to your desired number of records per page

// Calculate the offset
$offset = ($page - 1) * $recordsPerPage;

// Query to fetch data with pagination
$query = "SELECT * FROM erp_record WHERE trans_partnertype='Farmer' LIMIT $offset, $recordsPerPage";
$result = mysqli_query($conn, $query);

// Output the data as JSON
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

mysqli_close($conn);
?>