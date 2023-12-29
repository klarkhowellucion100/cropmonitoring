<?php
include 'agriboostdmstransactions/db.inc.php';

// Check if the search text is provided
if (isset($_POST['searchText'])) {
    $searchText = $_POST['searchText'];

    // Perform a SQL query to search for records based on the search text
    $query = "SELECT * FROM commitment_order_dashboard WHERE (trans_adate LIKE '%$searchText%' OR trans_comm LIKE '%$searchText%') AND trans_adate!='0000-00-00' ORDER BY trans_adate ASC";
    $result = mysqli_query($conn, $query);

    // Build the HTML for the search results
    $output = '';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<tr>';
        $output .= '<td style="text-align: right;">' . date('F d, Y', strtotime($row['trans_adate'])) . '</td>';
        $output .= '<td>' . $row['trans_comm'] . '</td>';
        $output .= '<td style="text-align: right;"> ' . $row['vendor_orders'] . ' kg</td>';
        $output .= '<td style="text-align: right;">' . $row['farmer_commitment'] . ' kg</td>';
        $output .= '<td style="text-align: right;"> ' . ($row['vendor_orders'] - $row['farmer_commitment']) . ' kg</td>';
        $output .= '</tr>';
    }

    echo $output;
}
?>


<script>         
    $(document).ready(function(){
    $('.farmerinfo').click(function(){
        var farmerid = $(this).data('id');
    
        $.ajax({
                    url:"agriboostdmstransactions/farmercommitmentupdate.php",
                    method:"POST",
                    data:{farmerid:farmerid},
                    success:function(data){
                        $('#modal_update').html(data);
                        $('#myModalUpdate').modal('show');
                    }
                });

    })
})
</script>