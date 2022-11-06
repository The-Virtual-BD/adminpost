<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Login view
    public function login()
    {
        return view('auth.login');
    }

    // Login perform
    public function loginPerform(Request $request)
    {

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials = [
            $fieldType => $request->username,
            'password' => $request->password,
        ];

        if(auth()->attempt($credentials))
        {
            return redirect()->route('index');
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }


    // Logout
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}