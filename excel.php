<?php
// Database connection
include "config.php";


// Fetch data from the database
$sql = "SELECT * FROM importer_details";
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

