<?php


require '../vendor/autoload.php'; // Load PhpSpreadsheet library

use PhpOffice\PhpSpreadsheet\IOFactory;

// Specify the directory where the uploaded files will be stored
$uploadDirectory = 'uploads/';

// Check if files are uploaded
if (!empty($_FILES['files']['name'])) {
    $responses = [];

    foreach ($_FILES['files']['name'] as $key => $value) {
        // Specify the target sheet names
        $targetSheetNames = ['Table9', 'Table10'];

        // Construct the file path
        $uploadedFilePath = $uploadDirectory . basename($_FILES['files']['name'][$key]);

        // Move the uploaded file to the specified directory
        move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadedFilePath);

        // Load the Excel file
        $spreadsheet = IOFactory::load($uploadedFilePath);

        foreach ($targetSheetNames as $targetSheetName) {
            $sheet = $spreadsheet->getSheetByName($targetSheetName);

            if ($sheet !== null) {
                // Define the range of lines (10 to 29) for Table10 and (11 to 22) for Table11
                $startRow = ($targetSheetName === 'Table9') ? 10 : 11;
                $endRow = ($targetSheetName === 'Table9') ? 48 : 26;

                // Define the columns (B, L, O, R) for both tables
                $columns = ($targetSheetName === 'Table9') ? ['C', 'M', 'P', 'S'] : ['B', 'M', 'P', 'S'];

                // Initialize an array to store the retrieved values
                $rowData = [];

                // Variables to store totals
                $totalL = 0;
                $totalO = 0;
                $totalR = 0;

                // Loop through the specified range
                for ($row = $startRow; $row <= $endRow; $row++) {
                    // Initialize an array for the current row
                    $currentRow = [];

                    // Get the values of the specified columns
                    foreach ($columns as $column) {
                        $cellValue = $sheet->getCell($column . $row)->getValue();

                        // Check if the value is null, and set it to 0
                        $currentRow[] = ($cellValue === null) ? 0 : $cellValue;
                    }

                    // Add the current row to the overall data array
                    $rowData[] = $currentRow;

                    // Add the values to the totals
                    $totalL += $currentRow[1];
                    $totalO += $currentRow[2];
                    $totalR += $currentRow[3];
                }

                // Return the retrieved values and totals as part of the responses array
                $responses[] = [
                    'data' => $rowData,
                    'totals' => [
                        'totalL' => $totalL,
                        'totalO' => $totalO,
                        'totalR' => $totalR,
                    ],
                    'filename' => $_FILES['files']['name'][$key], // Include the filename in the response
                    'sheetName' => $targetSheetName, // Include the sheet name in the response
                ];
            } else {
                $responses[] = "Sheet '$targetSheetName' not found in file {$_FILES['files']['name'][$key]}.";
            }
        }

        // Close the spreadsheet to release the file lock
        $spreadsheet->disconnectWorksheets();
        unset($spreadsheet);

        // Optionally, you may want to delete the uploaded file after processing
        unlink($uploadedFilePath);
    }

    echo json_encode(['tableData' => $responses]);
} else {
    echo "No files uploaded.";
}
