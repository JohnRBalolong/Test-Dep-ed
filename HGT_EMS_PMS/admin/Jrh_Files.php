
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../src/img/title_icon.png">
    <title>
    Department of Education
    </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512...">
 
  <style>
 #dangerToast {
    position: fixed;
    top: 63px;
    right: 20px;
    z-index: 9999;
    max-width: 300px;
    background: linear-gradient(to right, #ff5f6d08, #f5647f);
}

/* Additional styles to customize the appearance */
#dangerToast .toast-header {
  background-color: transparent;
  border: none;
}

#dangerToast .text-gradient {
  color: #fff;
}
.toast-body {
    color: black !important;
}

.font{
  font-size: 10px;
}
.approval{
    cursor: pointer;
}

.approval:active{
    transform: scale(0.9);
}
hr {
    height: 2px !important;
}

hr.horizontal1.dark {
    background-image: linear-gradient(90deg, transparent, rgb(0 0 0), transparent) !important;
}
  </style>

<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<style>
        /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap'); */
        /* *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        } */
        .file-input-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .file-input-container label {
            margin-right: 10px;
        }
        .button-container {
            margin-left: 10px;
        }
        .button {
            position: relative;
            height: 30px;
            max-width: 300px;
            width: 100%;
            background: #7d2ae8;
            border-radius: 6px;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .button::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 6px;
        }
        .button.progress::before {
            animation: progress 6s ease-in-out forwards;
        }
        @keyframes progress {
            0% {
                left: -100%;
            }
            10% {
                left: -97%;
            }
            20% {
                left: -92%;
            }
            30% {
                left: -82%;
            }
            30% {
                left: -62%;
            }
            40% {
                left: -38%;
            }
            50% {
                left: -18%;
            }
            60% {
                left: -14%;
            }
            80% {
                left: -7%;
            }
            90% {
                left: -3%;
            }
            100% {
                left: 0%;
            }
        }
        .button .text-icon {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .button .text-icon i,
        .button .text-icon span {
            position: relative;
            color: #fff;
            font-size: 20px;
            margin-left: 8px;
        }
        .button .text-icon span {
            font-size: 16px;
            font-weight: 400;
            margin-left: 8px;
            padding: 30px;
        }
        #result {
            /* width: 50%;  */
           
        }
        #overallTotals {
            width: 50%; /* Adjust the width as needed */
           
        }


    .table-container table {
        font-size: 12px !important; /* Adjust the font size as needed */
    }

    .table-container table td {
        color: black !important; /* Set the text color to black */
    }

    .table-container table thead th {
        color: black !important; /* Set the text color of table head to black */
    }

    .table-container table tbody td:first-child {
    max-width: 120px; /* Set the maximum width of the first column */
    word-wrap: break-word; /* Allow long words to be broken and wrap onto the next line */
}

.button.disabled {
    cursor: not-allowed;
    /* Add any additional styling to indicate disabled state */
    opacity: 0.7; /* Example: reduce opacity */
}


    </style>

  
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0 d-flex align-items-center">
    <img src="../src/img/Logo.png" class="navbar-brand-img h-100 mb-3" alt="main_logo">
    <div class="ms-2 text-white mt-1">
      <span class="font-weight-bold">Department of Education</span>
      <br>
      <span class="ms-3">Misamis Occidental</span>
    </div>
  </a>
</div>

    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/Elem_Files.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">folder</i>
            </div>
            <span class="nav-link-text ms-1">Elementary_Files</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-info" href="../admin/Jrh_Files.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">list</i>
            </div>
            <span class="nav-link-text ms-1">Junior High_Files</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../admin/Shs_Files.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">badge</i>
            </div>
            <span class="nav-link-text ms-1">Senior High_Files</span>
          </a>
        </li>

      </ul>
    </div>
   
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
       
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          
          <ul class="navbar-nav  justify-content-end">
           
          
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
           
            <li class="nav-item d-flex align-items-center">
              <a href="../index.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa-solid fa-power-off"></i>
                <span class="d-sm-inline d-none">Sign out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Upload Junior High School Files to get table data</h6>
              </div>
            </div>

            <div class="file-input-container ms-4 mt-3">
    <label for="fileInput" multiple style="display: none;">Choose Excel Files:</label>
    <input type="file" id="fileInput" multiple style="display: none;">
    <!-- Button with progress bar -->
    <div class="button-container">
        <div class="button" onclick="openFileDialog()">
            <div class="text-icon">
                <i class="bx bx-cloud-upload"></i>
                <span class="text">Upload File</span>
            </div>
        </div>
    </div>
</div>


<div class="row ms-2 me-2">
    <div class="col-6">
        <div class="card my-4">
            <div id="result"></div>
            <div id="overallTotals"></div>
        </div>
    </div>
    <div class="col-6">
        <div class="card my-4">
            <div id="result2"></div>
            <div id="overallTotals2"></div>
        </div>
    </div>
</div>

            <!-- <div class="card-body px-0 pb-2 ms-2">

          
           
            </div> -->







          </div>
        </div>
      </div>


 
     
    </div>




  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <!-- <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div> -->
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
       
       
      </div>
    </div>
  </div>


  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>

var isUploadInProgress = false;

function openFileDialog() {
    // Only open file dialog if upload process is not in progress
    if (!isUploadInProgress) {
        document.getElementById('fileInput').click();
    }
}

document.getElementById('fileInput').addEventListener('change', function() {
    // Call getData() function when a file is selected
    getData();
});


    var overallTotalsTable10 = { totalL: 0, totalO: 0, totalR: 0 };
    var overallTotalsTable11 = { totalL: 0, totalO: 0, totalR: 0 };

    const button = document.querySelector(".button");
    let isRequestInProgress = false;

    // function simulateButtonClick() {
    //     button.classList.remove("progress");
    //     button.querySelector(".text").innerText = "Uploaded";
    // }

    function getData() {

       // Set the upload process status to true
    isUploadInProgress = true;

// Disable the file input to prevent selecting files during the upload process
document.getElementById('fileInput').disabled = true;


      // If a request is already in progress, return early to prevent multiple clicks
    if (isRequestInProgress) return;

      // Set the flag to indicate that a request is now in progress
      isRequestInProgress = true;


    // Disable the upload button
    button.disabled = true;
    button.classList.add("disabled");

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
        url: 'jrh_read_excel.php',
        data: formData,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(data) {
            var responses = data.tableData;

            responses.forEach(function(response) {
                if (Array.isArray(response.data)) {
                    if (response.sheetName === "Table9") {
                        displayData(response.data, response.totals, response.filename, response.f39Value);
                        updateOverallTotals(response.totals, overallTotalsTable10);
                    } else if (response.sheetName === "Table10") {
                        displayData2(response.data, response.totals, response.filename, response.f39Value);
                        updateOverallTotals(response.totals, overallTotalsTable11);
                    }
                } else {
                    console.error('Invalid data format:', response.data);
                }
            });

            displayOverallTotals(overallTotalsTable10, overallTotalsTable11);
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
                // Change button text to "Uploaded" after 3 seconds
                button.classList.remove("progress");
                button.querySelector(".text").innerText = "Uploaded";

                setTimeout(() => {
                    // Change button text to "Upload File" after another 3 seconds
                    button.querySelector(".text").innerText = "Upload File";
                    // simulateButtonClick();
                     // Re-enable the upload button
            button.disabled = false;
            button.classList.remove("disabled");
              // Reset the flag to indicate that the request is complete
              isUploadInProgress = false;
          
          // Re-enable the file input after the upload process completes
       document.getElementById('fileInput').disabled = false;
          

                    // Clear the file input
                    fileInput.value = "";
                }, 3000);
            }, 3000); // Delay to simulate file processing
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
        html += '<th scope="col" style="max-width: 150px; text-align: center;">Position Title</th>';
        html += '<th scope="col" style="text-align: center;">No. of positions <br> assigned <br> in school per <br> latest PSI-POP</th>';
        html += '<th scope="col" style="text-align: center;">Male</th>';
        html += '<th scope="col" style="text-align: center;">Female</th>';
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

        html += '<p style="font-size: 14px; color: black; font-weight: 700">Total PSI-POP: ' + totalL + ', Total Male: ' + totalO + ', Total Female: ' + totalR + '</p>';
        // html += '<p style="font-size: 14px; color: black; font-weight: 700">F37 Value: ' + f39Value + '</p>';

        tableContainer.html(html);
        resultDiv.append(tableContainer);
    }

    function displayData2(data, totals, filename, f39Value) {
        var resultDiv = $('#result2');

        var tableContainer = $('<div class="table-container"></div>');
        var html = '<h6>Table for ' + filename + '</h6>';
        html += '<div class="table-responsive">';
        html += '<table class="table table-striped">';
        html += '<thead class="thead-dark">';
        html += '<tr>';
        html += '<th scope="col" style="max-width: 150px; text-align: center;">Position Title</th>';
        html += '<th scope="col" style="text-align: center;">No. of positions <br> assigned <br> in school per <br> latest PSI-POP</th>';
        html += '<th scope="col" style="text-align: center;">Male</th>';
        html += '<th scope="col" style="text-align: center;">Female</th>';
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

        html += '<p style="font-size: 14px; color: black; font-weight: 700">Total PSI-POP: ' + totalL + ', Total Male: ' + totalO + ', Total Female: ' + totalR + '</p>';
        // html += '<p style="font-size: 14px; color: black; font-weight: 700">F37 Value: ' + f39Value + '</p>';

        tableContainer.html(html);
        resultDiv.append(tableContainer);
    }

    function updateOverallTotals(totals, overallTotals) {
        overallTotals.totalL += totals.totalL;
        overallTotals.totalO += totals.totalO;
        overallTotals.totalR += totals.totalR;
    }

    function displayOverallTotals(overallTotalsTable10, overallTotalsTable11) {
        var overallTotalsDiv = $('#overallTotals');
        var html = '<h6>Overall Totals for Table9</h6>';
        html += '<p style="font-size: 14px; color: black; font-weight: 700">Total PSI-POP: ' + overallTotalsTable10.totalL + ', Total Male: ' + overallTotalsTable10.totalO + ', Total Female: ' + overallTotalsTable10.totalR + '</p>';
        overallTotalsDiv.html(html);

        var overallTotalsDiv2 = $('#overallTotals2');
        var html2 = '<h6>Overall Totals for Table10</h6>';
        html2 += '<p style="font-size: 14px; color: black; font-weight: 700">Total PSI-POP: ' + overallTotalsTable11.totalL + ', Total Male: ' + overallTotalsTable11.totalO + ', Total Female: ' + overallTotalsTable11.totalR + '</p>';
        overallTotalsDiv2.html(html2);
    }
</script>



</body>

</html>