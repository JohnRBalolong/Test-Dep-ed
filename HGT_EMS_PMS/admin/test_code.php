<?php
// Include PhpSpreadsheet
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

// Load the Excel file
$spreadsheet = IOFactory::load('C:/Xampp Server/htdocs/Coding Testing/Test-Dep-ed/HGT_EMS_PMS/Files/2022_elem_127393.xlsx');

// Select the target sheet name
$targetSheetName = 'SchInfo ';

// Define the columns based on the target sheet name
$columns = ['F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'AH'];

// Get the sheet by name
$sheet = $spreadsheet->getSheetByName($targetSheetName);

// Check if the sheet exists
if ($sheet !== null) {
    // Define the starting row
    $startRow = 23;

    // Iterate through each column
    foreach ($columns as $column) {
        // Get the cell value
        $cellValue = $sheet->getCell($column . (string)$startRow)->getValue(); // Ensure $startRow is cast to string
        // Output the cell data with coordinates
        echo "Cell {$column}{$startRow}: {$cellValue}\t";
    }
} else {
    echo "Sheet '{$targetSheetName}' not found.";
}
?>
