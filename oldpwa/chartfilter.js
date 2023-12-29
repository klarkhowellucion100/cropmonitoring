function filterChartData() {
    // Get selected year and month values from the dropdowns
    var selectedYear = document.getElementById("year_filter").value;
    var fromMonth = document.getElementById("from_month").value;
    var toMonth = document.getElementById("to_month").value;


$.ajax({
    type: 'POST',
    url: 'dashboardfetchajax.php', // Replace with the actual server-side script to fetch data
    data: {
        selectedYear: selectedYear,
        fromMonth: fromMonth,
        toMonth: toMonth
    },
    success: function (response) {
        // Update the total processed volume display with the new data
        $('#dashboardfetchajax').html(response)
    },
    error: function (error) {
        console.error(error);
    }
});

$.ajax({
    type: 'POST',
    url: 'dashboardfetchajaxlines.php', // Replace with the actual server-side script to fetch data
    data: {
        selectedYear: selectedYear,
        fromMonth: fromMonth,
        toMonth: toMonth
    },
    success: function (response) {
        // Update the total processed volume display with the new data
        $('#dashboardfetchajaxlines').html(response)
    },
    error: function (error) {
        console.error(error);
    }
});
    
}