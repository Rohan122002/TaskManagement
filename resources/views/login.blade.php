@include('log_reg_layout')
<style>
    .section {
        height: 100%;
    }

    .container-fluid {
        height: 100%;
    }

    .main {
        height: 100%;
    }

    .form_main {
        padding-top: 8rem;
    }

    .password-toggle-icon_1 {
        position: absolute;
        top: 60%;

    }
</style>

<section class="section">
    <div class="container-fluid">
        <div class="main row">
            <div class="dash_back col-lg-5  d-flex align-items-center justify-content-center">
                <!-- <p class="sidebar">Dash.</p> -->
                <p class="dash">Dash.</p>
            </div>
            <div class="sign_back col-lg-7  justify-content-md-center align-items-center">
                <div class="mobile row  justify-content-center align-items-center best">

                    <div class="form_main col-6  best justify-content-center align-items-center">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if (session('fail'))
                        <div class="alert alert-danger">
                            {{ session('fail') }}
                        </div>
                        @endif
                        <div class="icon_main col-12 ">
                            <div class="create_div col-12">
                                <p class="create">Sign in account</p>
                            </div>
                            <div class="creat_dash_div col-12">
                                <p class="create_dash">Sign in an account to use dashboard</p>
                            </div>

                        </div>
                        <div class="signup_div col-12  ">
                            <form class="signup card col-12 needs-validation" id="show" action="{{route('account-signin')}}" method="post" autocomplete="on" novalidate>
                                @csrf
                                <div class="email_div form-row">
                                    <div class="form-group col-md-12">
                                        <label id="name" class="name" for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback"> Please Enter the Valid Email ! </div>
                                    </div>
                                </div>
                                <div class="pass_div form-row">
                                    <div class="form-group col-md-12">
                                        <label id="name" class="name" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback"> Please Enter the Password ! </div>
                                        <span class="password-toggle-icon_1"><i class="fas fa-eye" id="togglePassword" onclick="show()"></i></i></span>

                                    </div>
                                </div>
                                <button type="submit" onclick="checkpassMatch()" id="sign_btn" class="sign_btn">Sign In</button>
                            </form>
                        </div>
                        <div class="bottom col-12">
                            <div class="col-12 Already_acc_div">
                                <p class="Already_acc">Create account <a href="{{route('register')}}" class="link" id="link">
                                        Sign up here</a></p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</section>
<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            });


    })()
</script>
