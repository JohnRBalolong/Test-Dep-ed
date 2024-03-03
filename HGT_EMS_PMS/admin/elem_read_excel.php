<?php

// require '../vendor/autoload.php'; // Load PhpSpreadsheet library

// use PhpOffice\PhpSpreadsheet\IOFactory;

// // Specify the directory where the uploaded files will be stored
// $uploadDirectory = 'uploads/';

// // Check if files are uploaded
// if (!empty($_FILES['files']['name'])) {
//     $responses = [];

//     foreach ($_FILES['files']['name'] as $key => $value) {
//         // Specify the target sheet name
//         $targetSheetName = 'Table10';

//         // Construct the file path
//         $uploadedFilePath = $uploadDirectory . basename($_FILES['files']['name'][$key]);

//         // Move the uploaded file to the specified directory
//         move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadedFilePath);

//         // Load the Excel file
//         $spreadsheet = IOFactory::load($uploadedFilePath);

//         // Get the target sheet
//         $sheet = $spreadsheet->getSheetByName($targetSheetName);

//         if ($sheet !== null) {
//             // Define the columns (B, L, O, R) and the range of lines (10 to 29)
//             $columns = ['C', 'L', 'O', 'R'];
//             $startRow = 10;
//             $endRow = 29;

//             // Initialize an array to store the retrieved values
//             $rowData = [];

//             // Variables to store totals
//             $totalL = 0;
//             $totalO = 0;
//             $totalR = 0;

//             // Loop through the specified range
//             for ($row = $startRow; $row <= $endRow; $row++) {
//                 // Initialize an array for the current row
//                 $currentRow = [];

//                 // Get the values of the specified columns
//                 foreach ($columns as $column) {
//                     $cellValue = $sheet->getCell($column . $row)->getValue();

//                     // Check if the value is null, and set it to 0
//                     $currentRow[] = ($cellValue === null) ? 0 : $cellValue;
//                 }

//                 // Add the current row to the overall data array
//                 $rowData[] = $currentRow;

//                 // Add the values to the totals
//                 $totalL += $currentRow[1];
//                 $totalO += $currentRow[2];
//                 $totalR += $currentRow[3];
//             }

//             // Return the retrieved values and totals as part of the responses array
//             $responses[] = [
//                 'data' => $rowData,
//                 'totals' => [
//                     'totalL' => $totalL,
//                     'totalO' => $totalO,
//                     'totalR' => $totalR,
//                 ],
//                 'filename' => $_FILES['files']['name'][$key], // Include the filename in the response
//                 'f37Value' => $sheet->getCell('F37')->getValue(), // Include the value of J37 in the response
//             ];

//             // Close the spreadsheet to release the file lock
//             $spreadsheet->disconnectWorksheets();
//             unset($spreadsheet);
//         } else {
//             $responses[] = "Sheet '$targetSheetName' not found in file {$_FILES['files']['name'][$key]}.";
//         }

//         // Optionally, you may want to delete the uploaded file after processing
//         unlink($uploadedFilePath);
//     }

//     echo json_encode($responses);
// } else {
//     echo "No files uploaded.";
// }



//***********************************************kini gyud */


// require '../vendor/autoload.php'; // Load PhpSpreadsheet library

// use PhpOffice\PhpSpreadsheet\IOFactory;

// // Specify the directory where the uploaded files will be stored
// $uploadDirectory = 'uploads/';

// // Check if files are uploaded
// if (!empty($_FILES['files']['name'])) {
//     $responses = [];

//     foreach ($_FILES['files']['name'] as $key => $value) {
//         // Specify the target sheet names
//         $targetSheetNames = ['Table10', 'Table11 '];

//         // Construct the file path
//         $uploadedFilePath = $uploadDirectory . basename($_FILES['files']['name'][$key]);

//         // Move the uploaded file to the specified directory
//         move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadedFilePath);

//         // Load the Excel file
//         $spreadsheet = IOFactory::load($uploadedFilePath);

//         foreach ($targetSheetNames as $targetSheetName) {
//             $sheet = $spreadsheet->getSheetByName($targetSheetName);

//             if ($sheet !== null) {
//                 // Define the range of lines (10 to 29) for Table10 and (11 to 22) for Table11
//                 $startRow = ($targetSheetName === 'Table10') ? 10 : 11;
//                 $endRow = ($targetSheetName === 'Table10') ? 29 : 22;

//                 // Define the columns (B, L, O, R) for both tables
//                 $columns = ($targetSheetName === 'Table10') ? ['C', 'L', 'O', 'R'] : ['B', 'L', 'O', 'R'];

//                 // Initialize an array to store the retrieved values
//                 $rowData = [];

//                 // Variables to store totals
//                 $totalL = 0;
//                 $totalO = 0;
//                 $totalR = 0;

//                 // Loop through the specified range
//                 for ($row = $startRow; $row <= $endRow; $row++) {
//                     // Initialize an array for the current row
//                     $currentRow = [];

//                     // Get the values of the specified columns
//                     foreach ($columns as $column) {
//                         $cellValue = $sheet->getCell($column . $row)->getValue();

//                         // Check if the value is null, and set it to 0
//                         $currentRow[] = ($cellValue === null) ? 0 : $cellValue;
//                     }

//                     // Add the current row to the overall data array
//                     $rowData[] = $currentRow;

//                     // Add the values to the totals
//                     $totalL += $currentRow[1];
//                     $totalO += $currentRow[2];
//                     $totalR += $currentRow[3];
//                 }

//                 // Return the retrieved values and totals as part of the responses array
//                 $responses[] = [
//                     'data' => $rowData,
//                     'totals' => [
//                         'totalL' => $totalL,
//                         'totalO' => $totalO,
//                         'totalR' => $totalR,
//                     ],
//                     'filename' => $_FILES['files']['name'][$key], // Include the filename in the response
//                     'sheetName' => $targetSheetName, // Include the sheet name in the response
//                 ];
//             } else {
//                 $responses[] = "Sheet '$targetSheetName' not found in file {$_FILES['files']['name'][$key]}.";
//             }
//         }

//         // Close the spreadsheet to release the file lock
//         $spreadsheet->disconnectWorksheets();
//         unset($spreadsheet);

//         // Optionally, you may want to delete the uploaded file after processing
//         unlink($uploadedFilePath);
//     }

//     echo json_encode(['tableData' => $responses]);
// } else {
//     echo "No files uploaded.";
// }


//***********************************************kini gyud */


// sakto ni pero kulabng 

// require '../vendor/autoload.php'; // Load PhpSpreadsheet library

// use PhpOffice\PhpSpreadsheet\IOFactory;

// // Specify the directory where the uploaded files will be stored
// $uploadDirectory = 'uploads/';

// // Check if files are uploaded
// if (!empty($_FILES['files']['name'])) {
//     $responses = [];

//     foreach ($_FILES['files']['name'] as $key => $value) {
//         // Specify the target sheet names
//         $targetSheetNames = ['Table10', 'Table11 ', 'SchInfo '];

//         // Construct the file path
//         $uploadedFilePath = $uploadDirectory . basename($_FILES['files']['name'][$key]);

//         // Move the uploaded file to the specified directory
//         move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadedFilePath);

//         // Load the Excel file
//         $spreadsheet = IOFactory::load($uploadedFilePath);

//         foreach ($targetSheetNames as $targetSheetName) {
//             $sheet = $spreadsheet->getSheetByName($targetSheetName);

//             if ($sheet !== null) {
//                 // Define the range of lines (10 to 29) for Table10, (11 to 22) for Table11, and single cells for SchInfo
//                 if ($targetSheetName === 'Table10') {
//                     $startRow = 10;
//                     $endRow = 29;
//                     $columns = ['C', 'L', 'O', 'R'];
//                 } elseif ($targetSheetName === 'Table11 ') {
//                     $startRow = 11;
//                     $endRow = 22;
//                     $columns = ['B', 'L', 'O', 'R'];
//                 } elseif ($targetSheetName === 'SchInfo ') {
//                     // Define the cells to retrieve data from for SchInfo sheet
//                     $cellReferences = ['F39', 'F41', 'AH23'];
//                 }

//                 // Initialize an array to store the retrieved values
//                 $rowData = [];

//                 // Variables to store totals
//                 $totalL = 0;
//                 $totalO = 0;
//                 $totalR = 0;

//                 // Loop through the specified range or cells
//                 if ($targetSheetName !== 'SchInfo ') {
//                     for ($row = $startRow; $row <= $endRow; $row++) {
//                         // Initialize an array for the current row
//                         $currentRow = [];

//                         // Get the values of the specified columns
//                         foreach ($columns as $column) {
//                             $cellValue = $sheet->getCell($column . $row)->getValue();

//                             // Check if the value is null, and set it to 0
//                             $currentRow[] = ($cellValue === null) ? 0 : $cellValue;
//                         }

//                         // Add the current row to the overall data array
//                         $rowData[] = $currentRow;

//                         // Add the values to the totals
//                         $totalL += $currentRow[1];
//                         $totalO += $currentRow[2];
//                         $totalR += $currentRow[3];
//                     }
//                 } else {
//                     // Retrieve data from individual cells for SchInfo sheet
//                     foreach ($cellReferences as $cellRef) {
//                         $cellValue = $sheet->getCell($cellRef)->getValue();
//                         $rowData[] = [$cellRef => $cellValue];
//                     }
//                 }

//                 // Return the retrieved values and totals as part of the responses array
//                 $responses[] = [
//                     'data' => $rowData,
//                     'totals' => [
//                         'totalL' => $totalL,
//                         'totalO' => $totalO,
//                         'totalR' => $totalR,
//                     ],
//                     'filename' => $_FILES['files']['name'][$key], // Include the filename in the response
//                     'sheetName' => $targetSheetName, // Include the sheet name in the response
//                 ];
//             } else {
//                 $responses[] = "Sheet '$targetSheetName' not found in file {$_FILES['files']['name'][$key]}.";
//             }
//         }

//         // Close the spreadsheet to release the file lock
//         $spreadsheet->disconnectWorksheets();
//         unset($spreadsheet);

//         // Optionally, you may want to delete the uploaded file after processing
//         unlink($uploadedFilePath);
//     }

//     echo json_encode(['tableData' => $responses]);
// } else {
//     echo "No files uploaded.";
// }


// require '../vendor/autoload.php'; // Load PhpSpreadsheet library

// use PhpOffice\PhpSpreadsheet\IOFactory;

// // Specify the directory where the uploaded files will be stored
// $uploadDirectory = 'uploads/';

// // Check if files are uploaded
// if (!empty($_FILES['files']['name'])) {
//     $responses = [];
//     $schInfoData = []; // Initialize array to store SchInfo data

//     foreach ($_FILES['files']['name'] as $key => $value) {
//         // Specify the target sheet names
//         $targetSheetNames = ['Table10', 'Table11 ', 'SchInfo '];

//         // Construct the file path
//         $uploadedFilePath = $uploadDirectory . basename($_FILES['files']['name'][$key]);

//         // Move the uploaded file to the specified directory
//         move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadedFilePath);

//         // Load the Excel file
//         $spreadsheet = IOFactory::load($uploadedFilePath);

//         foreach ($targetSheetNames as $targetSheetName) {
//             $sheet = $spreadsheet->getSheetByName($targetSheetName);

//             if ($sheet !== null) {
//                 // Define the range of lines (10 to 29) for Table10, (11 to 22) for Table11, and single cells for SchInfo
//                 if ($targetSheetName === 'Table10') {
//                     $startRow = 10;
//                     $endRow = 29;
//                     $columns = ['C', 'L', 'O', 'R'];
//                 } elseif ($targetSheetName === 'Table11 ') {
//                     $startRow = 11;
//                     $endRow = 22;
//                     $columns = ['B', 'L', 'O', 'R'];
//                 } elseif ($targetSheetName === 'SchInfo ') {
//                     // Define the cells to retrieve data from for SchInfo sheet
//                     $rowData[] = [
//                         'F39' => $sheet->getCell('F39')->getValue(),
//                         'F41' => $sheet->getCell('F41')->getValue(),
//                         'AH23' => $sheet->getCell('AH23')->getValue()
//                     ];
//                     $schInfoData[$_FILES['files']['name'][$key]] = $rowData[0]; // Store SchInfo data using the filename as key
//                     // continue; // Skip the rest of the processing for SchInfo
//                 }

//                 // Initialize an array to store the retrieved values
//                 $rowData = [];

//                 // Variables to store totals
//                 $totalL = 0;
//                 $totalO = 0;
//                 $totalR = 0;

//                 // Loop through the specified range or cells
//                 if ($targetSheetName !== 'SchInfo ') {
//                     for ($row = $startRow; $row <= $endRow; $row++) {
//                         // Initialize an array for the current row
//                         $currentRow = [];

//                         // Get the values of the specified columns
//                         foreach ($columns as $column) {
//                             $cellValue = $sheet->getCell($column . $row)->getValue();

//                             // Check if the value is null, and set it to 0
//                             $currentRow[] = ($cellValue === null) ? 0 : $cellValue;
//                         }

//                         // Add the current row to the overall data array
//                         $rowData[] = $currentRow;

//                         // Add the values to the totals
//                         $totalL += $currentRow[1];
//                         $totalO += $currentRow[2];
//                         $totalR += $currentRow[3];
//                     }
//                 }

//                 // Return the retrieved values and totals as part of the responses array
//                 $responses[] = [
//                     'data' => $rowData,
//                     'totals' => [
//                         'totalL' => $totalL,
//                         'totalO' => $totalO,
//                         'totalR' => $totalR,
//                     ],
//                     'filename' => $_FILES['files']['name'][$key], // Include the filename in the response
//                     'sheetName' => $targetSheetName, // Include the sheet name in the response
//                 ];
//             } else {
//                 $responses[] = "Sheet '$targetSheetName' not found in file {$_FILES['files']['name'][$key]}.";
//             }
//         }

//         // Close the spreadsheet to release the file lock
//         $spreadsheet->disconnectWorksheets();
//         unset($spreadsheet);

//         // Optionally, you may want to delete the uploaded file after processing
//         unlink($uploadedFilePath);
//     }

//     echo json_encode(['tableData' => $responses, 'schInfoData' => $schInfoData]);
// } else {
//     echo "No files uploaded.";
// }

require '../vendor/autoload.php'; // Load PhpSpreadsheet library

use PhpOffice\PhpSpreadsheet\IOFactory;

// Specify the directory where the uploaded files will be stored
$uploadDirectory = 'uploads/';

// Check if files are uploaded
if (!empty($_FILES['files']['name'])) {
    $responses = [];

    foreach ($_FILES['files']['name'] as $key => $value) {
        // Specify the target sheet names
        $targetSheetNames = ['SchInfo ' , 'Table10', 'Table11 '];

        // Construct the file path
        $uploadedFilePath = $uploadDirectory . basename($_FILES['files']['name'][$key]);

        // Move the uploaded file to the specified directory
        move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadedFilePath);

        // Load the Excel file
        $spreadsheet = IOFactory::load($uploadedFilePath);

        foreach ($targetSheetNames as $targetSheetName) {
            $sheet = $spreadsheet->getSheetByName($targetSheetName);

            if ($sheet !== null) {
                // Define the range of lines (10 to 29) for Table10, (11 to 22) for Table11, and single cells for SchInfo
                if ($targetSheetName === 'Table10') {
                    $startRow = 10;
                    $endRow = 29;
                    $columns = ['C', 'L', 'O', 'R'];
                } elseif ($targetSheetName === 'Table11 ') {
                    $startRow = 11;
                    $endRow = 22;
                    $columns = ['B', 'L', 'O', 'R'];
                } elseif ($targetSheetName === 'SchInfo ') {
                    // Define the cells to retrieve data from for SchInfo sheet
                    $cellReferences = ['F39', 'F41', 'AH23'];
                }

                // Initialize an array to store the retrieved values
                $rowData = [];

                // Variables to store totals
                $totalL = 0;
                $totalO = 0;
                $totalR = 0;

                // Loop through the specified range or cells
                if ($targetSheetName !== 'SchInfo ') {
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
                } else {
                    // Retrieve data from individual cells for SchInfo sheet
                    foreach ($cellReferences as $cellRef) {
                        $cellValue = $sheet->getCell($cellRef)->getValue();
                        $rowData[] = [$cellRef => $cellValue];
                    }
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