<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teamDashboard', compact('teams'));
    }

    public function create(Request $request)
    {
        $teams = new Team();
        $teams->teamName = $request->input('teamName');
        $teams->teamMembers = $request->input('teamMembers');
        $teams->teamDescription = $request->input('teamDescription');
        $teams->StartDate = $request->input('StartDate');
        $teams->save();
        if ($teams->save()) {
            return redirect()->route('teams')->with('success', 'New User Added Successfully',);
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function destroy($id)
    {
        $teams = Team::find($id);
        $teams::destroy($id);
        return redirect("/teams")->with('fail', 'Task Deleted Successfully');
    }



    public function edit($id)
    {
        $teams = Team::find($id);
        return view('Edit.editTeam', compact("teams"));
    }

    public function update(Request $request, $id)
    {

        $teams = new Team();
        $teams = Team::find($id);
        $teams->teamName = $request->input('teamName');
        $teams->teamMembers = $request->input('teamMembers');
        $teams->teamDescription = $request->input('teamDescription');
        $teams->StartDate = $request->input('StartDate');
        $teams->save();
        if ($teams->save()) {
            return redirect()->route('teams')->with('success', 'New User Added Successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}
