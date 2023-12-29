<?php
include 'agriboostdmstransactions/db.inc.php';

// Check if the search text is provided
if (isset($_POST['searchText'])) {
    $searchText = $_POST['searchText'];

    // Perform a SQL query to search for records based on the search text
    $query = "SELECT * FROM erp_record WHERE (trans_partner LIKE '%$searchText%' OR trans_comm LIKE '%$searchText%') AND trans_partnertype='Farmer'";
    $result = mysqli_query($conn, $query);

    // Build the HTML for the search results
    $output = '';
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<tr>';
        $output .= '<td>' . $row['trans_partner'] . '</td>';
        $output .= '<td>' . $row['trans_comm'] . '</td>';
        $output .= '<td style="text-align: right;">' . date('F d, Y', strtotime($row['trans_adate'])) . '</td>';
        $output .= '<td style="text-align: right;">P ' . $row['trans_price'] . '</td>';
        $output .= '<td style="text-align: right;">' . $row['trans_commitvol'] . ' kg</td>';
        $output .= '<td style="text-align: right;">P ' . ($row['trans_commitvol'] * $row['trans_price']) . '</td>';
        $output .= '<td>';
        $output .= '<a class="farmerinfo btn btn-raised btn-warning waves-effect" data-id="' . $row['trans_id'] . '"><i class="uil-edit-alt"></i></a>';
        $output .= '<a onClick="deleteme(' . $row['trans_id'] . ')" class="btn btn-raised btn-danger waves-effect"><i class="uil-trash-alt"></i></a>';
        $output .= '</td>';
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