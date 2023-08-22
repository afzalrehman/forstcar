<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM your_table";
$result = $conn->query($sql);

// Create an Excel object
require 'path_to/PHPExcel.php';
$objPHPExcel = new PHPExcel();
$objPHPExcel->getActiveSheet()->setTitle('Data');

// Add data to the Excel file
$rowCount = 1;
while ($row = $result->fetch_assoc()) {
    $objPHPExcel->getActiveSheet()->setCellValue('A'.$rowCount, $row['column1']);
    $objPHPExcel->getActiveSheet()->setCellValue('B'.$rowCount, $row['column2']);
    // Add more columns as needed
    $rowCount++;
}

// Save Excel file
$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$writer->save('downloaded_data.xls');

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Download Data</title>
</head>
<body>
    <a href="downloaded_data.xls" download>
        <button>Download Excel</button>
    </a>
</body>
</html>
