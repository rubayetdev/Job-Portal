<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\LoginControl;
use Illuminate\Support\Facades\DB;
use App\Models\cvresumes;
use App\Models\company;
use App\Models\address;
use App\Models\academic;
use App\Models\jobpost;
use App\Models\cvsup;
use App\Models\skills;
use App\Models\User;
use App\Models\follow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{

    function Insert(Request $request)
    {


        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $address = $request->input('address');

        $isInsert = User::insert(['name'=>$name,
            'email'=>$email,'password'=>$password,'phone'=>$phone,'address'=>$address]);

        $isInsert = Auth::user();
        if($isInsert){
            event(new Registered($isInsert));
            return redirect('welcome')->with('message','Registration Successfull');
        }
        else {echo '<h1>Failed</h1>';}

    }
    function userlogin(Request $request) :RedirectResponse
    {
        $user2 = $request->user();
        $user2 = DB::table('users')
        ->where('email',$request->input('email'))
        ->where('password',$request->input('password'))->first();



        if ($user2) {

            // dd();
            // Password matches
            if (session()->isStarted()) {
                 $data = $request->session()->put('name', $user2->email);
                 $Data2 = $request->session()->put('User', $user2->name);
                 $Data3 = $request->session()->put('phone', $user2->phone);
                 $Data4 = $request->session()->put('address', $user2->address);



            return redirect('dashboard');
            }

        } else {
            // Password doesn't match
            $message = 'Login failed. Please check your credentials.';
            return redirect()->back()->with('message', $message);
        }

    }
    function company_registration(Request $re){
        $company_name = $re->input('company_name');
        $company_password = $re->input('company_password');
        $company_license = $re->input('company_license');
        $company_email = $re->input('company_email');
        $company_number = $re->input('company_number');
        $company_address = $re->input('company_address');
        $company_postal_code = $re->input('company_postal_code');



        $companyinsertion = company::insert([
            'business_name'=>$company_name,
        'business_license'=>$company_license,'company_mail'=>$company_email,'telephone'=>$company_number,
        'company_address'=>$company_address,'company_password'=>$company_password,'postal_code'=>$company_postal_code]);
        if ($companyinsertion) {
            return redirect('welcome');
        } else {
            echo 'failed';
        }


    }
    function company_login(Request $requ) {
        //dd($requ->input());
        $user2 = DB::table('business_registration')
            ->where('company_mail', $requ->input('email'))
            ->where('company_password', $requ->input('password'))->first();


        if ($user2) {
            if(session()->isStarted()){
             $datas = $requ->session()->put('names', $user2->business_name);
             $datas2 = $requ->session()->put('mails', $user2->company_mail);

            return redirect('companydashboard');
            }

        } else {
            $message = 'Login failed. Please check your credentials.';
            return redirect()->back()->with('message', $message);
        }
    }

    function cv_post(Request $requs)
    {
        $jobtitle = $requs->input('title');
        $youremail = $requs->input('email');
        $business = $requs->input('businessemail');
        $file = $requs->file('file');

        if($file){
            $originalname = $file->getClientOriginalName();
            $path = $file->storeAs('public/cv', $originalname);
        $path = str_replace('public/', '', $path);
        $cvupload = cvsup::insert([
            'Job_Title' => $jobtitle,
            'candidate_mail' => $youremail,
            'business_mail' => $business,
            'file_data' => $path
        ]);

        if($cvupload){
            return redirect('dashboard');
        }
        else
        echo 'failed';
    }
    else
    echo 'no';
    }

    function redpdf(Request $reu)
{


    // $data = DB::table('cvs')->where('business_mail', $bus)->get();

    // if ($data->count() > 0) {
    //     if ($reu->session()->isStarted()) {
    //         $reu->session()->put('cv_data', $data);
    $data = cvsup::all();
    return view('viewcv',['dataa'=>$data]);
    //     }
    // } else {
    //     echo 'failed';
    // }
}

function deletejob(Request $request){
    $data = jobpost::all();


    return view('yourjob',['dataa'=>$data]);
}
function deltepost($busmail, $job_Title){
    $delete = DB::table('job_post')
    ->where('business_mail',$busmail)
    ->where('job_title',$job_Title)
    ->delete();
    return redirect()->back()->with('success', 'Job post deleted successfully.');
}

    function unfollow($mail,$user)
    {
        $unfollow =DB::table('following')
            ->where('User_mail',$user)
            ->where('Business_mail',$mail)
            ->delete();

        return redirect('jobcircular');

}

public function view ($id){
    $item = cvsup::find($id);
    return view('viewcvs',compact('item'));

}

    function job_posting(Request $requu){
        $job = $requu->input('job');
        $company = $requu->input('company');
        $mailid = $requu->input('companymail');
        $vaccan = $requu->input('vaccan');
        $empstatus = $requu->input('emp');
        $gen = $requu->input('gender');
        $age = $requu -> input('age');
        $experience = $requu->input('experience');
        $location = $requu -> input('loc');
        $respon = $requu->input('reponsibiliti');
        $requirment = $requu->input('requirment');
        $salar = $requu->input('Salary');
        $dead = $requu->input('DeadLIne');

        $postjob = jobpost::insert([
            'business_mail' => $mailid,
            'job_title' => $job,
            'company_name' => $company,
            'vaccacines'=>$vaccan,
            'empstatus' => $empstatus,
            'gender' => $gen,
            'age'=>$age,
            'experience' =>$experience,
            'Location' =>$location,
            'job_responsibilities' => $respon,
            'job_requirment' => $requirment,
            'Salary'=>$salar,
            'Deadline' => $dead
        ]);

        if($postjob){
           return redirect('companydashboard');
        }
        else echo '<h1>Falied</h1>';
    }

    function alldata(){
        $data = jobpost::all();

        $user = session('name');
        $total = DB::table('following')
            ->where('User_mail',$user)
            ->count();

        return view('jobcircular',['datas'=>$data],compact('total'));
    }
    function resumeInsert(Request $reqq)
{
    $name = $reqq->input('Name');
    $phone = $reqq->input('Phone');
    $mail = $reqq->input('Email');
    $dateofbirth = $reqq->input('DateOfBirth');
    $gender = $reqq->input('Gender');
    $region = $reqq->input('Religion');
    $grp = $reqq->input('BloodGroup');
    $nation = $reqq->input('nationality');
    $propic = $reqq->file('photo');

    if($propic){
        $originalname = $propic->getClientOriginalName();
        $path = $propic->storeAs('public/profile',$originalname);
        $path = str_replace('public/','',$path);

    if (!empty($mail)) {
        $insertcv = cvresumes::insert([
            'User_name' => $name,
            'User_mail' => $mail,
            'User_Phone' => $phone,
            'User_Nationality' => $nation,
            'DOB' => $dateofbirth,
            'Gender' => $gender,
            'Blood_Group' => $grp,
            'Religon' => $region,
            'Profile_Pic' => $path
        ]);



        if ($insertcv) {

            return view('address');
        } else {
            echo '<h1>Failed</h1>';
        }
    }
}
}
function addressinsert(Request $reqq)
{
    $mail = $reqq->input('Email');
    $preadd = $reqq->input('present-address');
    $previll = $reqq->input('present-village');
    $prezip = $reqq->input('present-zip');
    $precity = $reqq->input('present-city');
    $peradd = $reqq->input('permanent-address');
    $pervill = $reqq->input('permanent-village');
    $perzip = $reqq->input('permanent-zip');
    $percity = $reqq->input('permanent-city');

        $insertadd = address::insert([
            'User_mail' => $mail,
            'Present_address' => $preadd,
            'Present_City' => $precity,
            'Present_Zip' => $prezip,
            'Present_Village' => $previll,
            'Permanent_Address' => $peradd,
            'Permanent_Village' => $pervill,
            'Permanent_Zip' => $perzip,
            'Permanent_City' => $percity,

        ]);
    if($insertadd){
        return view ('academic');
    }
    else echo '<h1>Failed/h1>';
}
function academicinsert(Request $reqq)
{
    $mail = $reqq->input('Email');
    $Education = $reqq->input('education-level');
    $Degree = $reqq -> input('exam-title');
    $Major =$reqq-> input('major');
    $School = $reqq -> input('school');
    $Result = $reqq ->input('result');
    $Total = $reqq->input('duration');
    $Year = $reqq->input('passing-year');

    $inseracademic = academic::insert([
        'User_mail' => $mail,
        'Education_Level' => $Education,
        'Exam_Title' => $Degree,
        'Major' => $Major,
        'School' => $School,
        'Result' => $Result,
        'Duration' => $Total,
        'Passing_Year' =>$Year
    ]);


    if($inseracademic){
        return view('academic');
    }
    else echo '<h1>Failed/h1>';
}


    function readData(Request $request)
{

    $userPersonalDetails = DB::table('user_personal_details')
    ->where('User_mail', session("name"))
    ->get();

    $userAddressDetails = DB::table('user_personal_address')
    ->where ('User_mail',session("name"))
    ->get();

    $userAcademicDetails = DB::table('user_academic_info')
    ->where ('User_mail',session("name"))
    ->get();

    $userSkillsDetails = DB::table('user_skill')
    ->where ('User_mail',session("name"))
    ->get();

    return view('viewresume', compact('userPersonalDetails','userAddressDetails','userAcademicDetails','userSkillsDetails'));


}

function skill(Request $request){
    $mail = $request->session()->get('name');
    $company = $request->input('company');
    $position = $request->input('position');
    $start = $request->input('start_date');
    $end = $request->input('end_date');
    $program = $request->input('Programming');
    $web = $request->input('Web');
    $database = $request->input('Database');
    $ref1 = $request->input('Ref1');
    $ref2 = $request->input('Ref2');
    $res1 = $request->input('res1');
    $res2 = $request->input('res2');
    $res3 = $request->input('res3');

    $postskill = skills::insert([
        'User_mail' => $mail,
        'Ex_Company' => $company,
        'Ex_position' => $position,
        'Startdate' => $start,
        'Enddate' => $end,
        'Programming' => $program,
        'Web' => $web,
        'DatabaseLan' => $database,
        'Ref1' => $ref1,
        'Ref2' => $ref2,
        'Res1'=> $res1,
        'Res2' => $res2,
        'Res3' => $res3
    ]);

    if($postskill)
    {
        return view('dashboard');
    }
    else
    {
        echo "Failed";
    }

}

function forresume(Request $request){
    $userPersonalDetails = DB::table('user_personal_details')
    ->where('User_mail', session("name"))
    ->get();

    $userAddressDetails = DB::table('user_personal_address')
    ->where ('User_mail',session("name"))
    ->get();

    $userAcademicDetails = DB::table('user_academic_info')
    ->where ('User_mail',session("name"))
    ->get();



    return view('skills', compact('userPersonalDetails','userAddressDetails','userAcademicDetails'));

}

function getData(){
    $updateProfile = DB::table('user_personal_details')
    ->where('User_mail', session("name"))
    ->get();

    return view('profile',compact('updateProfile'));
}

function viewprofile(Request $request){
    $email = $_GET['mail'] ?? '';
    $updateProfile = DB::table('user_personal_details')
    ->where('User_mail', $email)
    ->get();

    return view('profile2', compact('updateProfile'));
}

function uploadpic(Request $request){

    $name = $request->input('first-name');
    $dob = $request->input('date-of-birth');
    $religion =$request->input('religion');
    $phone = $request->input('phone');
    $nation = $request->input('nationality');
    $blood = $request->input('blood-group');
    $updatepic = $request->file('propic');


    $updateProfile = DB::table('user_personal_details')
    ->where('User_mail', session("name"))
    ->update([
        'User_name'=>$name,
        'DOB' =>$dob,
        'Religon'=>$religion,
        'User_Phone'=>$phone,
        'User_Nationality'=>$nation,
        'Blood_Group'=>$blood,

    ]);

    if ($updatepic) {
        $originalname = $updatepic->getClientOriginalName();
        $path = $updatepic->storeAs('public/profile', $originalname);
        $path = str_replace('public/', '', $path);



    $updateProfile = DB::table('user_personal_details')
        ->where('User_mail', session("name"))
        ->update([
            'Profile_Pic' =>$path
        ]);
    }

    return redirect()->route('profile');

}

function bus(Request $request){
    $mail = session('mails');
    $userPersonalDetails = DB::table('business_registration')
    ->where('company_mail', $mail)
    ->get();

    $total = DB::table('following')
        ->where('Business_mail',$mail)
        ->count();


    return view('comprofile',compact('userPersonalDetails','total'));
}

function readbusiness(Request $request){
    $mail = session('mails');

    $com_name = $request->input('com-name');
    $company_license = $request->input('License');
    $loc = $request->input('Location');
    $phone = $request->input('phone');
    $head = $request->input('head');
    $pass = $request->input('password');
    $pic = $request->file('propic');
    $postal = $request->input('postal');

    $userPersonalDetails = DB::table('business_registration')
    ->where('company_mail', $mail)
    ->update([
        'business_name' => $com_name,
        'business_license' => $company_license,
        'telephone' => $phone,
        'company_address' => $loc,
        'headoffice' => $head,
        'company_password' => $pass,
        'postal_code' => $postal
    ]);
    if ($pic) {
        $originalname = $pic->getClientOriginalName();
        $path = $pic->storeAs('public/businessprofile', $originalname);
        $path = str_replace('public/', '', $path);



        $userPersonalDetails = DB::table('business_registration')
        ->where('company_mail', $mail)
        ->update([
            'Profile_Pic' =>$path
        ]);
    }




    return redirect()->route('comprofile');



}

function profile_pic(Request $request){
    $mail = session('mails');
    $userPersonalDetails = DB::table('business_registration')
    ->where('company_mail', $mail)
    ->get();

    return view('companydashboard',compact('userPersonalDetails'));
}

function pro(Request $request){
    $mail = session('name');
    $userPersonalDetails = DB::table('user_personal_details')
    ->where('User_mail', $mail)
    ->get();

    return view('dashboard',compact('userPersonalDetails'));
}

function showCV(Request $request){
    $mail = session('name');
    $userPersonalDetails = DB::table('cvs')
        ->where('candidate_mail', $mail)
        ->get();

    return view('submittedjobs',compact('userPersonalDetails'));
}
function logout(Request $request){
    Auth::logout();
    Session::flush();
    return redirect('welcome');
}

function insertFollow(Request $request){
        $name = $request->input('user');
        $bus = $request->input('mail');

        $insert=follow::insert([
            'User_mail'=>$name,
            'Business_mail'=>$bus
        ]);
        if($insert){
            return redirect('jobcircular');
        }
        else{
            echo 'failed';
        }
}

}
