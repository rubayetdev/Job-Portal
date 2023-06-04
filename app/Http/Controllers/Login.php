<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginControl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\company;

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
                $data = $request->session()->put('name', $user->User_mail);
                $Data2 = $request->session()->put('User', $user->User_name);
                $Data3 = $request->session()->put('phone', $user->User_Phone);
                $Data4 = $request->session()->put('address', $user->User_Address);
                $Data5 = $request->session()->put('ids', $user->User_id);
                
            
            return view('dashboard');
                //return redirect('/dashboard');
                //echo '<h1>Success</h1>';
            }
        } else {
            // Password doesn't match
            echo '<h1>Failed</h1>';
        }

    }

    

    function readData(Request $request)
{
    
    return view('resume');


}

function personal(Request $req)
{
    $name = $req->input('name');
    $phone = $req->input('phone');
    $mail = $req->input('mail');
    $dateofbirth= $req->input('DateOfBirth');
    $gender = $req->input('Gender');
    $region = $req->input('Religion');
    $grp = $req->input('BloodGroup');
    $nation = $req->input('nation');

    

}

function company_registration(Request $re){
    $company_name = $re->input('company_name');
    $company_password = $re->input('company_password');
    $company_license = $re->input('company_license');
    $company_email = $re->input('company_email');
    $company_number = $re->input('company_number');
    $company_address = $re->input('company_address');
    $company_postal_code = $re->input('company_postal_code');

    $companyinsertion = company::insert(['business_name'=>$company_name,
    'business_license'=>$company_license,'company_mail'=>$company_email,'telephone'=>$company_number,
    'company_address'=>$company_address,'company_password'=>$company_password,'postal_code'=>$company_postal_code]);
    if($companyinsertion) echo '<h1>Success</h1>';
    else echo '<h1>Failed/h1>';
}
function company_login(Request $requ){
    $user2 = DB::table('business_registration')->where('company_mail',$requ->input('company_email'),'company_password',$requ->input('company_password'));
    if($user2){
        echo '<h1>Login</h1>';
    }
    else{
        echo '<h1>Failed</h1>';
    }
}

    public function dashboard(){
        $user = DB::table('userdetails')->get()->first();      
        return view('dashboard',compact('user'));
    }

}