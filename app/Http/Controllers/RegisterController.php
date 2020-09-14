<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create (Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
            'name' => ['required', 'alphaNum', 'min:5'],
            'password' => ['required', 'alphaNum', 'min:8', 'required_with:repPassword', 'same:repPassword'],
            'repPassword' => ['required', 'alphaNum', 'min:8'],
        ]);

        $newUserInfo = [
            'email' => $request->post('email'),
            'password' => Hash::make($request->post('password')),
            'name' => $request->post('name'),
        ];

        $newUser = User::create($newUserInfo);

        auth()->login($newUser);

        return redirect()->to('/dashboard');
    }

    public function register () {
        return view('user.auth.register');
    }
}
