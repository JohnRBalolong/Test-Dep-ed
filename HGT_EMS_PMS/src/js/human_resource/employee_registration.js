// ************************************* Show and hide password ************************************* //
function togglePassword(inputId) {
    var passwordInput = document.getElementById(inputId);
    var icon = document.querySelector('#' + inputId + '+ i.material-icons');

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.textContent = 'visibility';
    } else {
        passwordInput.type = "password";
        icon.textContent = 'visibility_off';
    }
}
// ************************************* Show and hide password ************************************* //



// ************************************* Switch display of the Course ************************************* //
document.addEventListener('DOMContentLoaded', function() {
    // Get references to the input fields
    var tertiarySchoolInput = document.getElementById('tertiarySchoolInput');
    var courseContainer = document.getElementById('courseContainer');

    // Add event listener to the tertiary school input
    tertiarySchoolInput.addEventListener('input', function() {
        // Toggle the visibility of the course container based on whether the tertiary school input is empty or not
        courseContainer.style.display = tertiarySchoolInput.value.trim() !== '' ? 'block' : 'none';
    });
});
// ************************************* Switch display of the Course ************************************* //



// ************************************* Show and hide Marital Status ************************************* //
document.addEventListener("DOMContentLoaded", function() {
    // Get the Civil Status select element
    var civilStatusSelect = document.getElementById('civil_status');

    // Get the marital status div
    var marStatusDiv = document.getElementById('mar_status');

    // Add an onchange event to the Civil Status select
    civilStatusSelect.addEventListener('change', function() {
        // Check if the selected value is not 'single'
        if (civilStatusSelect.value !== 'single') {
            // If not 'single', display the marital status div
            marStatusDiv.style.display = 'block';
        } else {
            // If 'single', hide the marital status div
            marStatusDiv.style.display = 'none';
        }
    });
});
// ************************************* Show and hide Marital Status ************************************* //