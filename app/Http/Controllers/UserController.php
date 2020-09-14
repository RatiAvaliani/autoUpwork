<?php
namespace App\Http\Controllers;

use App\Models\VerifyEmailModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function verifyEmail (Request $request) {
        return VerifyEmailModel::send($request);
    }

    public function verifyEmailVerify (Request $request, $token) {
        return VerifyEmailModel::verify($token);
    }

    public function dashboard () {
        return view('user.dashboard');
    }
}
