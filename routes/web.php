<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/companylogin', function () {
    return view('companylogin');
});
Route::get('/companyres', function () {
    return view('companyres');
});

Route::get('/registration', function () {
    return view('registration');
});
Route::post('registration-form',[Login::class,'Insert'])->name('registration-form');

Route::post('login-form', [Login::class, 'login'])->name('login-form');
Route::post('comlogin', [Login::class, 'company_login'])->name('comlogin');
// Route::get('/dashboard', [Login::class, 'dashboard'])->name('dashboard');

 Route::get('/dashboard', function () {
     return view('dashboard');
})->name('dashboard');

Route::get('/resume', function () {
  return view('resume');
})->name('resume');

/*Route::get('/resume/{email}', [Login::class, 'readDataGet'])->name('resume');
// Route::get('/resume', [Login::class, 'readData'])->name('resume-get');
Route::post('/readdata', [Login::class, 'readData']);
*/
Route::post('business-registration',[Login::class,'company_registration'])->name('business-registration');