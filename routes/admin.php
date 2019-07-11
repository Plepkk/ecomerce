<?php

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
// // Login routes...
// Route::prefix('auth')->group(function () {
//     Route::get('login', 'LoginController@showLoginForm')->name('admin.auth.login');
//     Route::post('login', 'LoginController@login');
//     Route::post('logout', 'LoginController@logout')->name('admin.auth.logout');
// });

// // Password reset routes...
// Route::prefix('password')->group(function () {
//     Route::get('reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//     Route::post('email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
//     Route::get('reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
//     Route::post('reset', 'ResetPasswordController@reset')->name('admin.password.update');
// });

// // Email verification routes...
// Route::prefix('verification')->group(function () {
//     Route::get('verify', 'VerificationController@show')->name('admin.verification.notice');
//     Route::get('verify/{id}', 'VerificationController@verify')->name('admin.verification.verify');
//     Route::get('resend', 'VerificationController@resend')->name('admin.verification.resend');
//     Route::get('expire', 'VerificationController@expire')->name('admin.verification.expire');
// });

route::get('auth/login','LoginController@showLoginForm')->name('admin.auth.login');
route::post('auth/login','LoginController@login');
//Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout')->name('admin.auth.logout');

Route::group(['middleware' => ['auth:admin']], function () {
    Route::resource('/', 'HomeController')->only(['index'])->names([
        'index' => 'admin.home.index'
    ]);
});