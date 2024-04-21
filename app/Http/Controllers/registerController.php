<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;

class registerController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:registers',
            'password' => 'required|min:6',
            // 'confirmPassword' => 'required|same:password',
        ]);

        $existingUser = register::where('email', $request->input('email'))->first();

        if ($existingUser) {
            return redirect()->route('register')->with('fail', 'Email address already in use.');
        } else {
            $register = new register();
            $register->firstName = $request->input('firstName');
            $register->lastName = $request->input('lastName');
            $register->email = $request->input('email');
            $register->password = bcrypt($request->input('password'));
            $register->save();

            // Redirect with success message
            if ($register->save()) {
                return redirect()->route('signin')->with('success', 'User Registered Successfully');
            } else {
                return back()->with('fail', 'Something went wrong');
            }
        }
    }

}
