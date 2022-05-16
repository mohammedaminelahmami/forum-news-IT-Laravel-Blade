<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function indexRegister()
    {
        return view('auth.register');
    }
    
    public function indexLogin()
    {
        return view('auth.login');
    }

    public function storeRegister(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed:255',
        ]);

        // store user
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // redirect
        return redirect()->route('login');
    }

    public function storeLogin(Request $request)
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

    public function profile()
    {
        return view('Pages.profile');
    }

    public function logoutUser()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}