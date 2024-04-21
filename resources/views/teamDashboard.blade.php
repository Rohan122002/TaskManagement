@include('layout')
<div class="col-12 add_user_main">
    <div class="col-10"></div>
    <div class="col-2 add_user">
        <div class="col-4"></div>
        <div class="col-2"><a href="" class="link" data-bs-toggle="modal" data-bs-target="#addProjectmodal"> <i class="fa fa-plus-circle" aria-hidden="true"></i></a></div>
        <div class="col-6"> <a href="" class="link" data-bs-toggle="modal" data-bs-target="#addProjectmodal">
                <p class="add">Add Team</p>
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
            <!-- {{$teams}} -->

            <table class="table_data">
                <thead>
                    <th>Team Name</th>
                    <th>Members</th>
                    <th>Description</th>
                    <th>Created Date</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>

                    <tr class="table_row">
                        @foreach($teams as $team)
                        <td>{{$team->teamName}}</td>
                        <td>{{$team->teamMembers}}</td>
                        <td>{{$team->teamDescription}}</td>
                        <td>{{$team->startDate}}</td>
                        <td>
                            <a href="{{ route('team-edit',['id'=>$team->id]) }}"><i class="bi bi-pencil"></i></a>
                            <a href="{{route('team-delete',['id'=>$team->id]) }}"><i class="bi bi-trash3"></i></a>
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
<!-- Add user -->
<div class="modal fade" id="addProjectmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editmodalLabel">New Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addTeamForm" action="{{route('team-create')}}" class="needs-validation" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="TeamName" class="form-label h5">Team Name</label>
                                <input type="text" class="@error('teamName') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Team Name" name="teamName" id="teamName">
                                @error('teamName')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="TeamMembers" class="form-label h5">Team members</label>
                                <input type="number" class="@error('teamMembers') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Title" name="teamMembers" id="teamMembers">
                                @error('teamMembers')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="TeamDescription" class="form-label h5">Team Description</label>
                                <textarea class="@error('ProjectDescription') is-invalid @enderror form-control form-control-lg my-2 h3" placeholder="Project Description" name="teamDescription" id="TeamDescription"></textarea>
                                @error('TeamDescription')
                                <p class="invalid-feedback"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="StartDate" class="form-label h5">Start Date</label>
                                <input type="date" class="form-control form-control-lg my-2 h3" placeholder="Start Date" name="StartDate" id="StartDate">
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



