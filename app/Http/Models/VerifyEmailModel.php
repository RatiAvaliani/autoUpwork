<?php

namespace App\Models;

use App\Mail as MaleTemplates;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class VerifyEmailModel extends Model
{
    public static function send (Request $request) {

        $email = Auth::user()->email;
        $token = DB::table('verify_email')->select('token')->where('email', $email)->first();

        if ($token == null) {
            $token = Str::random(40);
            DB::table('verify_email')->insert([
                'email' => Auth::user()->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }

        if (isset($token->token)) $token = $token->token;

        Mail::to($request->user())->cc($email)->bcc($email)->send(new MaleTemplates\verifyEmail($token));
        return back()->with('status', 'Check your email for verification link');
    }

    public static function verify ($token) {
        if (Auth::user()->email_verified_at !== null) {
            return redirect()->to('/dashboard')->with('status', 'Your have already verified email successfully');
        }

        $verify_email = DB::table('verify_email')->where('token', $token)->first();

        if (Auth::user()->email === $verify_email->email) {
            DB::table('verify_email')->where('email', $verify_email->email)->delete();
            DB::table('users')->where('email', $verify_email->email)->update(['email_verified_at' => Carbon::now()]);
        }

        return back()->with('status', 'Your have verified email successfully');
    }
}
