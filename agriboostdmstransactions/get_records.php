<?php
include 'db.inc.php';

$recordsPerPage = 10; // Change this to your desired number of records per page
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

$offset = ($page - 1) * $recordsPerPage;
$query001 = mysqli_query($conn, "SELECT * FROM erp_record WHERE trans_partnertype='Vendor' LIMIT $offset, $recordsPerPage");

$records = array();

while ($result001 = mysqli_fetch_assoc($query001)) {
    $commit = $result001['trans_commitvol'];
    $price = $result001['trans_price'];
    $sub_amount = $commit * $price;

    $records[] = array(
        'trans_partner' => $result001['trans_partner'],
        'trans_comm' => $result001['trans_comm'],
        'trans_adate' => date('F d, Y', strtotime($result001['trans_adate'])),
        'trans_price' => 'P ' . $result001['trans_price'],
        'trans_commitvol' => $result001['trans_commitvol'] . ' kg',
        'sub_amount' => 'P ' . $sub_amount,
        'trans_id' => $result001['trans_id']
    );
}

echo json_encode($records);
?>
