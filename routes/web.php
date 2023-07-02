<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\UserAuth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
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

Route::get('/academic', function () {
  return view('academic');
});

// Route::get('/skills', function () {
//   return view('skills');
// });

Route::get('/profile', [Login::class,'getData'])->name('profile');

Route::get('/comprofile', [Login::class,'bus'])->name('comprofile');

Route::post('update-busprofile', [Login::class,'readbusiness'])->name('update-busprofile');

Route::get('/profile2', [Login::class,'viewprofile'])->name('profile2');

Route::get('/yourjob', function () {
  return view('yourjob');
});

Route::get('/service', function () {
  return view('service');
});

// Route::get('/comprofile', function () {
//   return view('comprofile');
// });

Route::get('/userservice', function () {
  return view('userservice');
});

Route::get('/comservice', function () {
  return view('comservice');
});

Route::get('/about', function () {
  return view('about');
});

Route::get('/canabout', function () {
  return view('canabout');
});

Route::get('/comabout', function () {
  return view('comabout');
});

Route::get('/skills',[Login::class,'forresume'])->name('skills');

Route::get('/viewresume', [Login::class,'readData'])->name('viewresume');

//Route::get('/skills', [Login::class,'forresume'])->name('skills');

//Route::post('proupdate',[Login::class,'uploadpic'])->name('proupdate');

Route::post('skill-upload',[Login::class,'skill'])->name('skill-upload');

Route::post('update-profile',[Login::class,'uploadpic'])->name('update-profile');

Route::post('registration-form',[Login::class,'Insert'])->name('registration-form');

Route::post('login-form', [Login::class, 'login'])->name('login-form');
Route::post('comlogin', [Login::class, 'company_login'])->name('comlogin');

Route::post('post-details', [Login::class, 'resumeInsert'])->name('post-details');

Route::post('post-address', [Login::class, 'addressinsert'])->name('post-address');

Route::post('post-education', [Login::class, 'academicinsert'])->name('post-education');

Route::post('job-post', [Login::class, 'job_posting'])->name('job-post');
//Route::post('post-details', [Login::class, 'academicinsert'])->name('post-details');
//Route::post('post-details', [Login::class, 'addressinsert'])->name('post-details');
// Route::get('/dashboard', [Login::class, 'dashboard'])->name('dashboard');

 Route::get('/dashboard', [Login::class,'pro'])->name('dashboard');

Route::get('/companydashboard',[Login::class, 'profile_pic'])->name('companydashboard');

Route::get('/resume', function () {
  return view('resume');
})->name('resume');


Route::get('/forget', function () {
  return view('forget');
})->name('forget');


Route::get('/jobpost', function () {
    return view('jobpost');
  })->name('jobpost');


Route::get('/jobcircular', function () {
    return view('jobcircular');
  })->name('jobcircular');

  Route::get('/apply', function () {
    return view('apply');
  })->name('apply');

  Route::get('/viewcv',function()
  {
    return view('viewcv');
  })->name('viewcv');

// Route::get('/apply',[Login::class,'showOtherPage'])->name('appply');
/*Route::get('/resume/{email}', [Login::class, 'readDataGet'])->name('resume');
// Route::get('/resume', [Login::class, 'readData'])->name('resume-get');
Route::post('/readdata', [Login::class, 'readData']);
*/
Route::post('business-registration',[Login::class,'company_registration'])->name('business-registration');

Route::post('uploadcv',[Login::class,'cv_post'])->name('uploadcv');

Route::get('jobcircular',[Login::class,'alldata']);

Route::get('viewcv',[Login::class,'redpdf']);

Route::get('yourjob',[Login::class,'deletejob']);

Route::get('/view/{id}',[Login::class,'view']);

Route::get('/deletepost/{busmail}/{job_Title}',[Login::class,'deltepost'])->name('deletepost');

// Route::post("comlogin",[UserAuth::class, 'comlog']);



// // Route for the "Forgot Password" page
// Route::get('/forgot-password', function () {
//     return view('forgot-password');
// })->name('forgot-password');

// // Route for handling the "Forgot Password" form submission
// Route::post('/forgot-password', 'App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail')
//     ->name('password.email');

// // Route for the "Password Reset" page
// Route::get('/reset-password/{token}', function ($token) {
//     return view('reset-password', ['token' => $token]);
// })->name('password.reset');

// // Route for handling the "Password Reset" form submission
// Route::post('/reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@reset')
//     ->name('password.update');
