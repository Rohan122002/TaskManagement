var a = 0;
var b = 0;    // Initialize a outside of the function

function show() {
    if (a == 0) {
        document.getElementById('password').type = 'text'; // Show password
        document.getElementById('togglePassword').classList.remove('fa-eye');
        document.getElementById('togglePassword').classList.add('fa-eye-slash');
        a = 1;
    } else {
        document.getElementById('password').type = 'password'; // Hide password
        document.getElementById('togglePassword').classList.remove('fa-eye-slash');
        document.getElementById('togglePassword').classList.add('fa-eye');
        a = 0;
    }
}
function show_1() {
    if (b == 0) {
        document.getElementById('confirmPassword').type = 'text';
        document.getElementById('toggleConfirmPassword').classList.remove('fa-eye');
        document.getElementById('toggleConfirmPassword').classList.add('fa-eye-slash');
        b = 1;
    } else {
        document.getElementById('confirmPassword').type = 'password';
        document.getElementById('toggleConfirmPassword').classList.remove('fa-eye-slash');
        document.getElementById('toggleConfirmPassword').classList.add('fa-eye');
        b = 0;
    }
}

function opennew() {
    window.open("index.html");
    alert("You have Successfully signup !")
}

  (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      });


  })()


