<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // middleware
    }
    
    public function login()
    {
        return view('Admin/login');
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
        return redirect()->route('adminHome');
    }

    public function logout()
    {
        
    }
}