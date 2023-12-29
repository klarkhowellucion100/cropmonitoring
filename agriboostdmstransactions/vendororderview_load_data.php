<?php
include 'db.inc.php';

$page = $_POST['page'];
$perPage = 10; // Number of rows per page
$start = ($page - 1) * $perPage;

$query001 = mysqli_query($conn, "SELECT * FROM erp_record WHERE trans_partnertype='Vendor' LIMIT $start, $perPage");

while ($result001 = mysqli_fetch_array($query001)) {
    $commit = $result001['trans_commitvol'];
    $price = $result001['trans_price'];
    $sub_amount = $commit * $price;
    // Output your table rows here
    echo '<tr>';
    echo '<td>' . $result001['trans_partner'] . '</td>';
    echo '<td>' . $result001['trans_comm'] . '</td>';
    echo '<td style="text-align: right;">' . date('F d, Y', strtotime($result001['trans_adate'])) . '</td>';
    echo '<td style="text-align: right;">P ' . $result001['trans_price'] . '</td>';
    echo '<td style="text-align: right;">' . $result001['trans_commitvol'] . ' kg</td>';
    echo '<td style="text-align: right;">P ' . $sub_amount . '</td>';
    echo '<td>';
    echo '<a class="farmerinfo btn btn-raised btn-warning waves-effect" data-id="' . $result001['trans_id'] . '"><i class="uil-edit-alt"></i></a>';
    echo '<a onClick="deleteme(' . $result001['trans_id'] . ')" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>';
    echo '</td>';
    echo '</tr>';
}

mysqli_close($conn);
?>
