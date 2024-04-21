<?php
// projectController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Project;


class projectController extends Controller
{
    //

    public function  index()
    {
        $project = Project::all();
        return view('projectBoard', compact('project'));
    }
    public function create(Request $request)
    {
        $project = new Project();
        $project->ProjectName = $request->input('ProjectName');
        $project->ProjectTitle = $request->input('ProjectTitle');
        $project->ProjectDescription = $request->input('ProjectDescription');
        $project->file = $request->input('file');
        $project->StartDate = $request->input('StartDate');
        $project->EndDate = $request->input('EndDate');
        // $project->save();
        if ($project->save()) {
            return redirect()->route('projects')->with('success', 'New User Added Successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
    public function destroy($id)
    {
        $project = Project::find($id);
        $project::destroy($id);
        return redirect("/projects")->with('fail', 'Task Deleted Successfully');
    }



    public function edit($id)
    {
        $project = Project::find($id);
        return view("Edit.editProject", compact("project"));
    }

    public function update(Request $request, $id)
    {

        $project = Project::find($id);
        $project->ProjectName = $request->input('ProjectName');
        $project->ProjectTitle = $request->input('ProjectTitle');
        $project->ProjectDescription = $request->input('ProjectDescription');
        $project->file = $request->input('file');
        $project->StartDate = $request->input('StartDate');
        $project->EndDate = $request->input('EndDate');

        if ($project->save()) {
            return redirect()->route('projects')->with('success', 'Project updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

}
