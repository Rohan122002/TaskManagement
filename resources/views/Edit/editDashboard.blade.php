@include('layout')
<style>
    .container {
        margin-top: 2rem;
        width: 60%;

    }


</style>

<div class="container">
    <form id="editDashboardForm" class="needs-validation card" action="{{ route('user-edit', ['id'=> $user])  }}" method="POST" novalidate>
        @csrf
        <!-- {{$user}}  -->
        <div class="modal-body main_card">
            <div class="row main">
                <div class="col-6 d-flex flex-column ">
                    <label for="fullName" class="form_label_1">Full Name</label>
                    <input type="text" class="form-control form_control_1" id="fullName" placeholder="Enter full name" value="{{$user->Name}}" name="full_name" required>
                    <span class="invalid-feedback ms-3" id="error_name"></span>
                </div>
                <div class="col-6  d-flex flex-column ">
                    <label for="role" class="form_label_1">Role</label>
                    <select class="form-control form_select_1" id="role" name="role"  required>
                        <option value="">{{$user->role}}</option>
                        <option value="Admin">Admin</option>
                        <option value="Manager">Manager</option>
                        <option value="Developer">Developer</option>
                        <option value="Tester">Tester</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12  d-flex flex-column">
                    <label for="email" class="form_label_1">Email</label>
                    <input type="email" class="form-control form_control_1" id="email" placeholder="Enter email" value="{{$user->email}}" name="email" autocomplete="username" required>
                    <span class="invalid-feedback ms-3" id="error_email"></span>
                </div>
            </div>
            <div class="row mt-3  pass_show ">
                <div class="col-6  d-flex flex-column">
                    <label for="password" class="form_label_1">Set Password</label>
                    <input type="text" class="form-control form_control_1 password_input " id="password" name="password" placeholder="Enter password" value="{{$user->password}}" required minlength="8" autocomplete="new-password">
                    <span class="password_icon"><i class="lar la-eye eye_icon" id="togglePassword" onclick="show()"></i></span>
                    <span class="invalid-feedback ms-3" id="error_pass"></span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary add_btn_1 ajax-data" type="submit">Add</button>
            <a href="{{route('dashboard')}}"> <button type="button" class="btn btn-secondary " >Cancel</button></a>
        </div>
    </form>
</div>
