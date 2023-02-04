<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentAdmissionFee;
use App\Models\AdmissionFees;
use Illuminate\Support\Facades\Mail;

use Session;

class UserController extends Controller
{
    //select user type
    public function usertype(Request $request){

        if($request->user == 1){

            return view('User/adminsignup');

        }elseif($request->user == 3){

            return view('User/studentsignup');

        }

    }


    //register user
    public function signup(Request $request,$usertype){

        $user = new User();

        $user->firstName = $request->index;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->usertype = $usertype;
        $user->grade = $request->requestgrade;
        $user->save();

        // return view('User/signin');
        return redirect()->route('showsignin');
    }

    public function signin(Request $request){

        $users = User::where('email',$request->email)->first();

        if(!isset($users)){
            
            return redirect()->back()->with('message', 'Invalid usernamr or password');

        }else{

            Session::put('user_name', $users->firstName);
            Session::put('id', $users->id);
            Session::put('email', $users->email);
            Session::put('grade', $users->grade);


            if($users->usertype == 'admin'){

                return view('home_page/admin_home_page');

            }elseif($users->usertype == 'student'){

                // return view('home_page/student_home_page');

                $user = StudentAdmissionFee::where('user_id',$users->id)->count();

                if($user == 1){

                    return view('home_page/student_home_page');

                }else{

                    $amount = AdmissionFees::where('grade',$users->grade)->first();


                    return view('payment/admission_fee',['amount' => $amount]);

                }

            }
        }
    }


    public function admin(){

        $user = Session::get('id');


        if(!isset($user)){

            return view('User/signin');

        }

        return view('home_page/admin_home_page');
    }


    public function student(){

        $user = Session::get('id');

        if(!isset($user)){

            return view('User/signin');

        }

        return view('home_page/student_home_page');
    }

    public function reset(){

        return view('User/reset_password');
    }

    public function sendLink(Request $request){

            $data["email"] = $request->email;
            $data["title"] = "DHAMMA SCHOOL(Reset Passward)";
            $data["body"] = "Click here to reset your password"."\n"."https://laravel.com/docs/8.x/mail#generating-mailables";

            Mail::raw('Text',function($message) use ($data){
                $body = new \Symfony\Component\Mime\Part\TextPart($data["body"]);
                $message->to($data["email"])->subject($data["title"]);
                $message->from('chamikap40@yahoo.com');
                $message->setBody($body);
            });

            return redirect()->back()->with('message','Link sent successfully');
    }
}
