<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class signinController extends Controller
{

    public function index()
    {
        return view('login');
    }
    public function signin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = register::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', 'User logged in successfully');
        } else {
            return back()->withInput()->with('error', 'Invalid credentials');
        }
    }
}
