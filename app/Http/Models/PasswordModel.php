<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class PasswordModel extends Model
{
    public static function send (Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email']
        ]);

        $validator = Validator::make([
            'email' => $request->post('email')
        ], ['email' => 'unique:users,email']);

        if ($validator->fails()) {
            Password::sendResetLink($credentials);

            return back()->with('status', "Go to your email and you will see password reset link");
        }

        return back()->withErrors(['No such email address']);
    }

    public static function verify () {
        $credentials = request()->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = Hash::make($password);
            $user->save();
        });

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return back()->withErrors(["Invalid token provided"]);
        }

        return redirect()->to('/login')->with("status", "Password has been successfully changed");
    }
}
