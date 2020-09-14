<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\authUser;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => authUser::class], function () {
    Route::get('/', 'MainController@index');

    Route::get('/login', 'LoginController@login')->name('login');
    Route::post('/auth', 'LoginController@auth');

    Route::get('/register', 'RegisterController@register');
    Route::post('/create', 'RegisterController@create');

    Route::post('/resetPassword', 'Password@resetVerify');
    Route::get('/resetPassword/{token}', 'Password@reset')->name('password.reset');

    Route::get('/forgotPassword', 'Password@forgot');
    Route::post('/forgotPassword', 'Password@forgotSend');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'UserController@dashboard');
    Route::get('/logout', 'LoginController@logout');

    Route::get('/jobs/auto/filter/notifications', 'JobsController@notifications');

    Route::get('/settings', 'SettingsController@list');
    Route::get('/jobs', 'SearchJobsAndFreelancers@jobs');

    Route::get('/verifyEmail', 'UserController@verifyEmail');
    Route::get('/verifyEmailToken/{token}', 'UserController@verifyEmailVerify');
});
