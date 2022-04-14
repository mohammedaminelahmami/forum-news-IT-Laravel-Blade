<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Sign in
        if(!auth()->attempt($request->only('email', 'password'), $request->remember))
        {
            return back()->with('status', 'Login Failed !');
        }

        // redirect
        return redirect()->route('home');
    }
}