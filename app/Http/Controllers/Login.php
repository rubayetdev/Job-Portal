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
            // dd();
            // Password matches
            if (session()->isStarted()) {
                // $data = $request->session()->put('name', $user->User_mail);
                // $Data2 = $request->session()->put('User', $user->User_name);
                // return view('dashboard',compact('data','Data2'));
                return redirect('/dashborad');
            }
        } else {
            // Password doesn't match
            echo '<h1>Failed</h1>';
        }

    }

    public function readDataGet( $eamil){
    $getData = DB::table('userdetails')->where('User_mail',$eamil)->get();
    
    return view('resume',compact('getData'));

    }

    // function readData(){
    
    // return view('resume');
    
    // }

    public function dashboard(){
        $user = DB::table('userdetails')->get()->first();
            
                
                
        return view('dashboard',compact('user'));
    }

}