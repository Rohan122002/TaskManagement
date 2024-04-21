@include('layout')
<div class="col-12 add_user_main">
    <div class="col-10"></div>
    <div class="col-2 add_user">
        <div class="col-4"></div>
        <div class="col-2"><a href="" class="link" data-bs-toggle="modal" data-bs-target="#addProjectmodal"> <i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="col-6"> <a href="" class="link" data-bs-toggle="modal" data-bs-target="#addProjectmodal">
                <p class="add">Project</p>
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
            <div class="alert alert-danger">
                {{ session('fail') }}
            </div>
            @endif
            <!-- {{$project}} -->

            <table class="table_data">
                <thead>
                    <th>Project Name</th>
                    <th>Project Title</th>
                    <th>Project Description</th>
                    <!-- <th>Project file</th> -->
                    <th>Project Start Date</th>
                    <th>Project End Date</th>
                    <th>Action</th>
                </thead>
                <tbody>

                    <tr class="table_row">
                    @foreach($project as $project)
                        <td>{{$project->ProjectName}}</td>
                        <td>{{$project->ProjectTitle}}</td>
                        <td>{{$project->ProjectDescription}}</td>
                        <!-- <td>{{$project->file}}</td> -->
                        <td>{{$project->StartDate}}</td>
                        <td>{{$project->EndDate}}</td>
                        <td>
                            <a href="{{ route('project-edit',['id'=>$project->id])}}"> <i class="bi bi-pencil"></i></a>
                            <a href="{{route('project-delete',['id'=>$project->id])}}"><i class="bi bi-trash3"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</section>
<!-- Add project -->
<div class="modal fade" id="addProjectmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editmodalLabel">New Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="userForm" action="{{route('project-create')}}" class="needs-validation" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Project Name</label>
                                <input type="text" class="@error('Name') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Name" name="ProjectName" id="ProjectName">
                                @error('ProjectName')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="taskTitle" class="form-label h5">Project Title</label>
                                <input type="text" class="@error('Task_title') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Title" name="ProjectTitle" id="ProjectTitle">
                                @error('ProjectTitle')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="taskDescription" class="form-label h5">Project Description</label>
                                <textarea  class="@error('Task_description') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Description" name="ProjectDescription" id="ProjectDescription"></textarea>
                                @error('ProjectDescription')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="taskFile" class="form-label h5">Upload File</label>
                                <input  type="file" class="@error('file') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Upload" name="file" id="file">
                                @error('file')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="taskDueDate" class="form-label h5">Start Date</label>
                                <input type="date" class="form-control form-control-lg my-2 h3" placeholder="Start Date" name="StartDate" id="StartDate">
                            </div>
                            <div class="mb-3">
                                <label for="taskDueDate" class="form-label h5">End Date</label>
                                <input  type="date" class="form-control form-control-lg my-2 h3" placeholder="End Date" name="EndDate" id="EndDate">
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

