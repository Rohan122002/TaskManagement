@include('layout')
<style>
    .container {
        margin-top: 2rem;
        width: 60%;

    }

    .card {
        padding: 2rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 2px 3px rgba(0, 0, 0.09, 0.09);
        background-color: #b9e2f73e;
    }
</style>

<div class="container">

    <form id="editTaskForm" class="needs-validation card " action="{{ route('task-edit',['id'=> $task->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label ">Name</label>
            <input type="text" class="@error('Name') is-invalid @enderror form-control form-control-lg my-2 h3 " placeholder="Name" name="Name" id="Name" value="{{$task->Name}}">
            @error('Name')
            <p class="invalid-feedback"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="taskTitle" class="form-label ">Task Title</label>
            <input value="{{$task->Task_title }}" type="text" class="@error('Task_title') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Task Name" name="Task_title" id="Task_title">
            @error('Task_title')
            <p class="invalid-feedback"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="taskDescription" class="form-label ">Task Description</label>
            <textarea value="{{$task->Task_description }}" class="@error('Task_description') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Task Description" name="Task_description" id="Task_description">{{$task->Task_description }}</textarea>
            @error('Task_description')
            <p class="invalid-feedback"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="taskEmail" class="form-label ">Email</label>
            <input value="{{$task->email }}" type="email" class="@error('email') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="email" name="email" id="email">
            @error('email')
            <p class="invalid-feedback"> {{ $message }} </p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="taskDueDate" class="form-label ">Deadline</label>
            <input value="{{$task->Due_Date }}" type="date" class="form-control form-control-lg my-2 h3" placeholder="Deadline" name="Due_Date" id="Due_Date">
        </div>
        <div class="d-flex">
            <div class="text-right">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
            <div class="text-left">
                <a href="{{route('task')}}"><button type="button" class="btn btn-sm btn-secondary">Cancel</button></a>
            </div>
        </div>
    </form>
</div>
