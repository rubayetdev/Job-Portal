<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use Illuminate\Support\Facades\DB;

class UserAuth extends Controller
{
    //
    // function comlog(Request $req){
    //     $user2 = DB::table('business_registration')
    //         ->where('company_mail', $req->input('company_email'))
    //         ->where('company_password', $req->input('company_password'));
    //         if($user2){
    //     $data = $req->input();
    //    //return $data;
    //     $req->session()->put('comlogin',$data['company_mail']);
    //     return session('comlogin');
    //         }
    // }
}
