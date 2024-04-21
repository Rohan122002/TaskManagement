@include('layout')
<div class="col-12 add_user_main">
    <div class="col-10"></div>
    <div class="col-2 add_user">
        <div class="col-4"></div>
        <div class="col-2"><a href="" class="link" data-bs-toggle="modal" data-bs-target="#addTaskmodal"> <i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="col-6"> <a href="" class="link" data-bs-toggle="modal" data-bs-target="#addTaskmodal">
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

        <!-- {{$task}} -->
        <table class="table_data">
            <thead>
                <tr>
                    <th>Profile</th>
                    <!-- <th>Name</th> -->
                    <th>Task Title</th>
                    <th>Task Description</th>
                    <th>Email</th>
                    <th>Due Date</th>
                    <th>Action
                    <td>
                </tr>
            </thead>
            <tbody>
                <tr class="table_row">
                    @foreach( $task as $task )
                    <td><a href=""><i class="fa fa-user" aria-hidden="true"style="font-size: 24px;"></a></i></td>
                    <!-- <td>{{$task->Name}}</td> -->
                    <td>{{$task->Task_title}}</td>
                    <td>{{$task->Task_description}}</td>
                    <td>{{$task->email}}</td>
                    <td>{{$task->Due_Date}}</td>
                    <td>
                        <a href="{{ route('task-edit', ['id' => $task->id]) }}""> <i class="bi bi-pencil"></i></a>
                        <a href="{{ route('task-destroy', ['id'=> $task->id]) }}"><i class="bi bi-trash3"></i></a>
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

<div class="modal fade" id="addTaskmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editmodalLabel">New Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="userForm" class="needs-validation" action="{{ route('task-create') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Name</label>
                                <input value="{{ old('Name') }}" type="text" class="@error('Name') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Name" name="Name" id="Name">
                                @error('Name')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="taskTitle" class="form-label h5">Task Title</label>
                                <input value="{{ old('Task_title') }}" type="text" class="@error('Task_title') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Task Name" name="Task_title" id="Task_title">
                                @error('Task_title')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="taskDescription" class="form-label h5">Task Description</label>
                                <textarea value="{{ old('Task_description') }}" class="@error('Task_description') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Task Description" name="Task_description" id="Task_description"></textarea>
                                @error('Task_description')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="taskEmail" class="form-label h5">Email</label>
                                <input value="{{ old('email') }}" type="email" class="@error('email') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="email" name="email" id="email">
                                @error('email')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="taskDueDate" class="form-label h5">Deadline</label>
                                <input value="{{ old('Due_Date') }}" type="date" class="form-control form-control-lg my-2 h3" placeholder="Deadline" name="Due_Date" id="Due_Date">
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
