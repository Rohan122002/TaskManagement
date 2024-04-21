<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Task;


class taskController extends Controller
{
    public function taskBoard()
    {
        $task = Task::all();
        return view('taskBoard', compact('task'));

    }

    public function create(Request $request)
    {

        $task = new Task();
        $task->Name = $request->input('Name');
        $task->Task_title = $request->input('Task_title');
        $task->Task_description = $request->input('Task_description');
        $task->email = $request->input('email');
        $task->Due_Date = $request->input('Due_Date');
        $task->save();
            if ($task->save()) {
                return redirect()->route('task')->with('success', 'New Task Added Successfully');
            } else {
                return back()->with('fail', 'Something went wrong');
            }
    }

    public function destroy($id)
    {
        $task=Task::find($id);
        $task::destroy($id);
        return redirect("/task")->with('fail', 'Task Deleted Successfully');
    }

    public function edit($id)
    {
        $task=Task::find($id);
        return view('Edit.editTask', compact('task'));
    }

    public function update(Request $request,$id)
    {

        $task = new Task();
        $task=Task::find($id);
        $task->Name = $request->input('Name');
        $task->Task_title = $request->input('Task_title');
        $task->Task_description = $request->input('Task_description');
        $task->email = $request->input('email');
        $task->Due_Date = $request->input('Due_Date');
        $task->save();
            if ($task->save()) {
                return redirect()->route('task')->with('success', 'Task updated Successfully');
            } else {
                return back()->with('fail', 'Something went wrong');
            }

    }
}
