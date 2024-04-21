@include('log_reg_layout')
<style>
      .section,.container-fluid, .main,.dash_back{
        height: 100%;
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
                    <div class="form_main col-4 w-auto p-3  best justify-content-center align-items-center">
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
                                <p class="create">Create an account</p>
                            </div>
                            <div class="creat_dash_div col-12">
                                <p class="create_dash">Create an account to use dashboard</p>
                            </div>
                        </div>
                        <div class="signup_div col-12  ">
                            <!-- Updated HTML Form -->
                            <form class="signup card col-12 needs-validation" id="show" action="{{ route('register') }}" method="post" autocomplete="on" novalidate oninput='confirmPassword.setCustomValidity(confirmPassword.value != password.value ? "Passwords do not match." : "")'>
                                @csrf
                                <div class="name_div form-row col-12 d-flex">
                                    <div class="first_div form-group col">
                                        <label id="name" class="name" for="firstName">First Name</label>
                                        <input type="text" class="first_input form-control" id="firstName" name="firstName" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Please enter the first name.</div>
                                    </div>

                                    <div class="last_div form-group col">
                                        <label id="name" class="name" for="lastName">Last Name</label>
                                        <input type="text" class="first_input form-control" id="lastName" name="lastName" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Please enter the last name.</div>
                                    </div>
                                </div>
                                <div class="email_div form-row">
                                    <div class="form-group col-md-12">
                                        <label id="name" class="name" for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                    </div>
                                </div>
                                <div class="pass_div form-row">
                                    <div class="form-group col-md-12">
                                        <label id="name" class="name" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Please enter a password.</div>
                                        <span class="password-toggle-icon_1"><i class="fas fa-eye" id="togglePassword" onclick="show()"></i></i></span>
                                    </div>
                                </div>
                                <div class="confirm_div form-row">
                                    <div class="form-group col-md-12">
                                        <label id="name" class="name" for="confirmPassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Please confirm the password.</div>
                                        <span class="password-toggle-icon_2"><i class="fas fa-eye" id="toggleConfirmPassword" onclick="show_1()"></i><i></span>
                                    </div>
                                </div>
                                <div class="check_div form-group d-flex form-check">
                                    <div class="checkbox_div col-sm-1 col-lg-1"> <input type="checkbox" class="name check-css" class="form-check-input" role="checkbox" id="agreeTerms" required></div>
                                    <div class="terms_div col-sm-8 col-lg-8">
                                        <label class="form-check-label" for="agreeTerms" for="invalidCheck">I agree to the <a class="link" id="link" href="#">terms and conditions</a></label>
                                    </div>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please check the terms and conditions to continue.</div>
                                </div>

                                <button type="submit" onclick="checkpassMatch()" id="sign_btn" class="sign_btn">Sign Up</button>
                            </form>

                        </div>
                        <div class="bottom col-12">
                            <div class="col-12 Already_acc_div">
                                <p class="Already_acc">Already have an account ? <a href="{{route('account-signin')}}" class="link" id="link">
                                        Sign in here</a></p>
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
