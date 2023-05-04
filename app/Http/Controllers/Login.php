<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginControl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class Login extends Controller
{

    function Insert(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $address = $request->input('address');

        $isInsert = LoginControl::insert(['User_name'=>$name,
            'User_mail'=>$email,'User_Password'=>$password,'User_Phone'=>$phone,'User_Address'=>$address]);
        if($isInsert) echo '<h1>Success</h1>';
        else echo '<h1>Failed/h1>';
    }
    function login(Request $request)
    {
        $user = DB::table('userdetails')->where('User_mail', $request->input('email'))->first();
        if ($user) {
            // Password matches

            return Redirect::to('dashboard');
        } else {
            // Password doesn't match
            echo '<h1>Failed</h1>';
        }
    }



}
