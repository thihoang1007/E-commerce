//validation functions
(function() {
    'use strict';

    window.addEventListener('load', function() {
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })

})();

function checkPasswords() {
    let passwords = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm-password").value;
    let msg = document.getElementById("messg");

    if (passwords == "" || confirmPassword == "") {
        msg.textContent = "";
    } else if (passwords != confirmPassword) {
        msg.textContent = "Passwords do not match";
    } else {
        msg.textContent = "Passwords match";
    }
}

$(document).ready(function() {
    var $grid = $('#product-list').isotope({
        // options
    });
    // filter items on button click
    $('.filter-button-group').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');

        $grid.isotope({ filter: filterValue });
    });
})