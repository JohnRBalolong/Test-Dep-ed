<?php
require '../vendor/autoload.php'; // Load PhpSpreadsheet library

use PhpOffice\PhpSpreadsheet\IOFactory;

// Specify the directory where the uploaded files will be stored
$uploadDirectory = 'uploads/';

// Check if files are uploaded
if (!empty($_FILES['files']['name'])) {
    $responses = [];

    foreach ($_FILES['files']['name'] as $key => $value) {
        // Specify the target sheet name
        $targetSheetName = 'Table10';

        // Construct the file path
        $uploadedFilePath = $uploadDirectory . basename($_FILES['files']['name'][$key]);

        // Move the uploaded file to the specified directory
        move_uploaded_file($_FILES['files']['tmp_name'][$key], $uploadedFilePath);

        // Load the Excel file
        $spreadsheet = IOFactory::load($uploadedFilePath);

        // Get the target sheet
        $sheet = $spreadsheet->getSheetByName($targetSheetName);

        if ($sheet !== null) {
            // Define the columns (B, L, O, R) and the range of lines (10 to 29)
            $columns = ['C', 'L', 'O', 'R'];
            $startRow = 10;
            $endRow = 29;

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
                'f37Value' => $sheet->getCell('F37')->getValue(), // Include the value of J37 in the response
            ];

            // Close the spreadsheet to release the file lock
            $spreadsheet->disconnectWorksheets();
            unset($spreadsheet);
        } else {
            $responses[] = "Sheet '$targetSheetName' not found in file {$_FILES['files']['name'][$key]}.";
        }

        // Optionally, you may want to delete the uploaded file after processing
        unlink($uploadedFilePath);
    }

    echo json_encode($responses);
} else {
    echo "No files uploaded.";
}




?>

<script>
    var overallTotals = { totalL: 0, totalO: 0, totalR: 0 };
    const button = document.querySelector(".button");

    function simulateButtonClick() {
        button.classList.remove("progress");
        button.querySelector(".text").innerText = "Uploaded";
    }

    function getData() {
        var fileInput = document.getElementById('fileInput');
        var files = fileInput.files;

        var formData = new FormData();
        for (var i = 0; i < files.length; i++) {
            formData.append('files[]', files[i]);
        }

        button.classList.add("progress");
        button.querySelector(".text").innerText = "Uploading...";

        $.ajax({
            type: 'POST',
            url: 'elem_read_excel.php',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(responses) {
    responses.forEach(function(response) {
        if (Array.isArray(response.data)) {
            displayData(response.data, response.totals, response.filename, response.f39Value);
            updateOverallTotals(response.totals);
        } else {
            console.error('Invalid data format:', response.data);
        }
    });
    displayOverallTotals();
},

            error: function(xhr, status, error) {
    console.error('Error:', error);
    console.error('Status:', status);
    console.error('Response Text:', xhr.responseText);
    // Optionally, you can display an error message to the user
    // $('#error-message').text('An error occurred: ' + error);
},
            complete: function() {
                setTimeout(() => {
                    button.classList.remove("progress");
                    button.querySelector(".text").innerText = "Upload File";
                    simulateButtonClick();
                }, 6000); // Delay to simulate file processing
            },
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                        var percent = (e.loaded / e.total) * 100;
                        // console.log(percent);
                    }
                });
                return xhr;
            }
        });
    }

    function displayData(data, totals, filename, f39Value) {
    var resultDiv = $('#result');

    var tableContainer = $('<div class="table-container"></div>');
    var html = '<h6>Table for ' + filename + '</h6>';
    html += '<div class="table-responsive">';
    html += '<table class="table table-striped">';
    html += '<thead class="thead-dark">';
    html += '<tr>';
    html += '<th scope="col" style="max-width: 150px; text-align: center;">B</th>';
    html += '<th scope="col" style="text-align: center;">L</th>';
    html += '<th scope="col" style="text-align: center;">O</th>';
    html += '<th scope="col" style="text-align: center;">R</th>';
    html += '<th scope="col" style="text-align: center;">Total</th>';
    html += '</tr>';
    html += '</thead>';
    html += '<tbody>';

    var totalL = 0;
    var totalO = 0;
    var totalR = 0;

    data.forEach(function(row) {
        var bValue = row[0];
        var lValue = row[1];
        var oValue = row[2];
        var rValue = row[3];

        var totalValue = parseFloat(oValue) + parseFloat(rValue);

        totalL += parseFloat(lValue);
        totalO += parseFloat(oValue);
        totalR += parseFloat(rValue);

        // Splitting the content of the first column and adding line breaks
        var bValues = bValue.split('\n');
        var formattedBValue = bValues.join('<br>');

        html += '<tr>';
        html += '<td>' + formattedBValue + '</td>';
        html += '<td style="text-align: center;">' + lValue + '</td>';
        html += '<td style="text-align: center;">' + oValue + '</td>';
        html += '<td style="text-align: center;">' + rValue + '</td>';
        html += '<td style="text-align: center;">' + totalValue + '</td>';
        html += '</tr>';
    });

    html += '</tbody>';
    html += '</table>';
    html += '</div>';

    html += '<p style="font-size: 14px; color: black; font-weight: 700">Total L: ' + totalL + ', Total O: ' + totalO + ', Total R: ' + totalR + '</p>';
    html += '<p style="font-size: 14px; color: black; font-weight: 700">F37 Value: ' + f39Value + '</p>';

    tableContainer.html(html);
    resultDiv.append(tableContainer);
}



    function updateOverallTotals(totals) {
        overallTotals.totalL += totals.totalL;
        overallTotals.totalO += totals.totalO;
        overallTotals.totalR += totals.totalR;
    }

    function displayOverallTotals() {
        var overallTotalsDiv = $('#overallTotals');
        var html = '<h6>Overall Totals</h6>';
        html += '<p  style="font-size: 14px; color: black; font-weight: 700">Total Number of Personel: ' + overallTotals.totalL + ', Total Male: ' + overallTotals.totalO + ', Total Female: ' + overallTotals.totalR + '</p>';

        overallTotalsDiv.html(html);
    }
</script>