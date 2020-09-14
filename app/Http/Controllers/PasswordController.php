<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PasswordModel;

class PasswordController extends Controller
{
    public function forgot () {
        return view('user.auth.forgotPassword');
    }

    public function forgotSend (Request $request) {
        return PasswordModel::send($request);
    }

    public function reset (Request $request, $token) {
        return view('user.auth.resetPassword', ['token' => $token]);
    }

    public function resetVerify (Request $request) {
        return PasswordModel::verify($request);
    }
}
