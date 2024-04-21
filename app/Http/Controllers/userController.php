<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use  Illuminate\Validation\Validator;
use function PHPUnit\Framework\isNull;

class userController extends Controller
{
    //
    public function dashboard()
    {
        $user = User::all();
        return view('dashboard', compact('user'));
    }


    public function storeUser(Request $request)
    {

        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'password'=>'<PASSWORD>',
        //     'role'=>'required',
        // ]);

        $user = new User();
        $user->name = $request->input("Name");
        $user->email = $request->input("email");
        $user->role = $request->input('role');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        if ($user->save()) {
            return redirect()->route('dashboard')->with('success', 'New User Added Successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user::destroy($id);
        return redirect("/dashboard")->with('fail', 'User Deleted Successfully');
    }

     public function edit($id)
    {
        $user = User::find($id);
        return view('Edit.editDashboard', compact("user"));
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $user->name = $request->input("full_name");
        $user->email = $request->input("email");
        $user->role = $request->input('role');
        $user->password = $request->input('password');
        $user->save();
        return redirect()->route('dashboard')->with('success', 'New User Updated Successfully');
    }
}
