<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth (Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'alphaNum', 'min:8']
        ]);

        $loginInfo = [
            'email' => $request->post('email'),
            'password' => $request->post('password')
        ];

        if (Auth::attempt($loginInfo, $request->post('remember_token'))) {
            return redirect('/dashboard');
        } else {
            return back()->withErrors(['error' => 'Incorrect Password or Email']);
        }
    }

    public function logout () {
        auth::logout();
        return redirect()->to('/');
    }

    public function login () {
        return view ('user.auth.login');
    }
}
