<!DOCTYPE html>
<html>
<head>
    <title>Date Generator</title>
    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <form id="dateForm">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required><br><br>

        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required><br><br>

        <?php
            include 'db.php';
            $query1 = mysqli_query($conn, "SELECT * FROM commodityhubpos WHERE sellingtype='Farmgate' GROUP BY commodity ORDER BY `type` ASC");

            while ($result1 = mysqli_fetch_array($query1)):
        ?>
        <label for="comm[]">Commodity</label>
        <input type="text" class="comm" name="comm[]" value="<?php echo $result1['commodity']; ?>" required>
        <input type="text" class="qty" name="qty[]"><br><br>
        <input type="text" class="user" name="user[]"><br><br>
        <?php endwhile; ?>

        <label for="user">User</label>
        <select id="username">
            <option value="klark">klark</option>
            <option value="kirs">kirs</option>
        </select>

        <button type="submit">Generate Dates</button>
    </form>

    <div id="dateResult">
        <strong>Dates for each commodity:</strong><br>
    </div>

    <script>
        $(document).ready(function () {

             // Function to update the user input fields when #username changes
             $("#username").on('change', function() {
                var newValue = $(this).val();
                $(".user").val(newValue);
            });

            $("#dateForm").submit(function (e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "generate_dates.php",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function (response) {
                        var dateResult = $("#dateResult");
                        dateResult.html(""); // Clear previous results

                        if (response.length > 0) {
                            for (var i = 0; i < response.length; i++) {
                                dateResult.append(response[i] + "<br>");
                            }
                        } else {
                            dateResult.append("No dates found for the selected range.");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
