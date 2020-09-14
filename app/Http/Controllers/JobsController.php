<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function notifications () {
        return view('user.jobs.notifications');
    }
}
