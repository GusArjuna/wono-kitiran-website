<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('adminlogin');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/users');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin/login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        // dd(Auth::attempt($credentials));
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('admin/dashboard');
        }
 
        return back()->withErrors([
            'username' => 'Username Atau Password Salah',
        ]);
    }
}
