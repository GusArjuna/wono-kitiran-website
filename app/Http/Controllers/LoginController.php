<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('adminlogin');
    }

    public function authenticate(Request $request)
    {
        // dd(Auth::attempt(["username"=>'admin',"password"=>123]));
        // if (Auth::attempt(["username"=>$request->username,"password"=>$request->password])) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('/admin/dashboard');
        // }
 
        // return back()->withErrors([
        //     'username' => 'Username Atau Password Salah',
        // ]);
        
        $password = $this->get('password');
        $username = $this->get('username');

        if ($this->isEmail($username)) {
            return [
                'email' => $username,
                'password' => $this->get('password')
            ];
        }
        if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
            //user sent their email 
            Auth::attempt(['email' => $username, 'password' => $password]);
        } else {
            //they sent their username instead 
            Auth::attempt(['username' => $username, 'password' => $password]);
        }
        
        //was any of those correct ?
        if ( Auth::check() ) {
            //send them where they are going 
            return redirect()->intended('/admin/dashboard');
        }
    }
}
