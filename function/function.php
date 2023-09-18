<!--  ============= count card ============= -->
<?php
include "config.php"; 

function validate($input) {
    return $input;
}

function getCount($tableName) {
    global $conn;
    $table = validate($tableName); // Use the validate function

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        // Handle query error, if any
        return "Error: " . mysqli_error($conn);
    }

    $totalCount = mysqli_num_rows($result);
    return $totalCount;
}
?>