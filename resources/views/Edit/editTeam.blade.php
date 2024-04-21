@include('layout')
<style>
    .container {
        margin-top: 2rem;
        width: 60%;

    }
</style>

<div class="container">

    <form id="editTeamForm" action="{{ route('team-edit',['id'=>$teams->id]) }}" class="needs-validation"  method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="TeamName" class="form-label h5">Team Name</label>
                    <input type="text" class="@error('teamName') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Team Name" name="teamName" id="teamName" value="{{$teams->teamName}}">
                    @error('teamName')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="TeamMembers" class="form-label h5">Team members</label>
                    <input type="number" class="@error('teamMembers') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Title" name="teamMembers" id="teamMembers" value="$teams->teamMembers">
                    @error('teamMembers')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="TeamDescription" class="form-label h5">Team Description</label>
                    <textarea class="@error('ProjectDescription') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Description" name="teamDescription" id="TeamDescription">{{$teams->teamDescription}}</textarea>
                    @error('TeamDescription')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="StartDate" class="form-label h5">Start Date</label>
                    <input type="date" class="form-control form-control-lg my-2 h3" placeholder="Start Date" name="StartDate" id="StartDate" value="{{$teams->StartDate}}">
                </div>
                <div class="d-flex">
                <div class="text-left">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
                <div class="text-right">
                    <a href="{{route('teams')}}"><button type="button" class="btn btn-sm btn-secondary">Cancel</button></a>
                </div>
                </div>
            </div>
        </div>
    </form>
</div>
