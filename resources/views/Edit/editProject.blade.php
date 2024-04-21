@include('layout')
<style>
    .container {
        margin-top: 1rem;
        width: 60%;

    }

    .form-control {
        padding: 0.5rem;
        padding-left: 1rem;
    }

    .card {
        padding: 2rem;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 2px 3px rgba(0, 0, 0.09, 0.09);
        background-color: #b9e2f73e;
    }
</style>

<div class="container">

    <form id="editProjectForm" action="{{ route('project-edit', ['id' => $project->id]) }}" class="needs-validation" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="ProjectName" class="form-label ">Project Name</label>
                    <input type="text" class="@error('ProjectName') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Name" name="ProjectName" id="ProjectName" value="{{$project->ProjectName}}">
                    @error('ProjectName')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="ProjectTitle" class="form-label ">Project Title</label>
                    <input type="text" class="@error('ProjectTitle') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Title" name="ProjectTitle" id="ProjectTitle" value="{{$project->ProjectTitle}}">
                    @error('ProjectTitle')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="ProjectDescription" class="form-label ">Project Description</label>
                    <textarea class="@error('ProjectDescription') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Description" name="ProjectDescription" id="ProjectDescription">{{$project->ProjectDescription}}</textarea>
                    @error('ProjectDescription')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label ">Upload File</label>
                    <input type="file" class="@error('file') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Upload" name="file" id="file" value="{{$project->file}}">
                    @error('file')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="StartDate" class="form-label h5">Start Date</label>
                    <input type="date" class="form-control form-control-lg my-2 h3" placeholder="Start Date" name="StartDate" id="StartDate" value="{{$project->StartDate}}">
                </div>
                <div class="mb-3">
                    <label for="EndDate" class="form-label h5">End Date</label>
                    <input type="date" class="form-control form-control-lg my-2 h3" placeholder="End Date" name="EndDate" id="EndDate" value="{{$project->EndDate}}">
                </div>
                <div class="d-flex">
                    <div class="text-right ">
                        <button type="submit" class="btn btn-sm btn-primary ">Submit</button>
                    </div>
                    <div class="text-left ">
                        <a href="{{route('projects')}}"><button type="button" class="btn btn-sm btn-secondary ">Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
