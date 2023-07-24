<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\Verification;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use App\Models\LoginControl;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Str;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/forget', function () {
  return view('forget');
})->name('password.request');

Route::post('/forget', function (Request $request) {
  $request->validate(['email' => 'required|email']);

  $status = Password::sendResetLink(
      $request->only('email')
  );

  return $status === Password::RESET_LINK_SENT
              ? back()->with(['status' => __($status)])
              : back()->withErrors(['email' => __($status)]);
})->name('password.email');

Route::get('/reset/{token}', function (string $token) {
  return view('reset', ['token' => $token]);
})->name('password.reset');

Route::post('/reset', function (Request $request) {
  $request->validate([
      'token' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed',
  ]);

  $status = Password::reset(
    $request->only('email', 'password', 'password_confirmation', 'token'),
    function (User $user, string $password) {
        $user->forceFill([
            'password' => $password
        ])->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));
    }
);


  return $status === Password::PASSWORD_RESET
              ? redirect()->route('login')->with('status', __($status))
              : back()->withErrors(['email' => [__($status)]]);
})->name('password.update');





Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

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

Route::post('login-form', [Login::class, 'userlogin'])->name('login-form');
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

Route::get('/submittedjobs', function () {
    return view('submittedjobs');
})->name('submittedjobs');

Route::get('/submittedjobs',[Login::class, 'showCV'])->name('submittedjobs');

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

Route::get('/unfollow/{mail}/{user}',[Login::class,'unfollow'])->name('unfollow');

Route::post('/following',[Login::class,'insertFollow'])->name('following');


Route::middleware(['preventBack'])->group(function(){
  return view('welcome');
});

Route::get('/logout',[Login::class,'logout'])->name('logout');

Route::get('/email/verify', function () {
  return view('verifiemail');
})->middleware('auth')->name('verification.notice');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
  $request->fulfill();

  return redirect('/welcome');
})->middleware(['auth', 'signed'])->name('verification.verify');
