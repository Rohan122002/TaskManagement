@include('layout')
<div class="col-12 add_user_main">
    <div class="col-10"></div>
    <div class="col-2 add_user">
        <div class="col-4"></div>
        <div class="col-2"><a href="" class="link" data-bs-toggle="modal" data-bs-target="#addUsermodal"> <i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="col-6"> <a href="" class="link" data-bs-toggle="modal" data-bs-target="#addUsermodal">
                <p class="add">Add Task</p>
            </a></div>
    </div>
</div>
<div class="col-12">
    <div class="container">
        <div class="container">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if (session('fail'))
            <div class="alert alert-danger custom-alert">
                {{ session('fail') }}
            </div>
            @endif


            <table class="table_data">
                <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action
                        <td>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $user as $user )
                    <tr class="table_row">
                        <td><a href=""><i class="fa fa-user" aria-hidden="true" style="font-size: 24px;"></a></i></td>
                        <td>{{ $user->Name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('user-edit', ['id' => $user->id]) }}"><i class="bi bi-pencil"></i></a>
                            <a href="{{ route('user-destroy', ['id' => $user->id]) }}"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</section>

<div class="modal fade" id="addUsermodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editmodalLabel">New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="userForm" class="needs-validation" action="{{ route('user-create')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Name</label>
                                <input type="text" class="@error('Name') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Name" name="Name" id="Name">
                                @error('Name')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label h5">Email</label>
                                <input type="email" class="@error('email') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Email" name="email" id="email">
                                @error('email')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label h5">Password</label>
                                <input type="password" class="@error('password') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Password" name="password" id="password">
                                @error('password')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label h5">Role</label>
                                <select class="@error('role') is-invalid @enderror form-select form-select-lg my-2 h3" name="role" id="role">
                                    <option value="">Select Role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Tester">Tester</option>
                                </select>
                                @error('role')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


