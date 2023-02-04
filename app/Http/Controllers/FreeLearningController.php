<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use App\Models\FreeApplication;
use App\Models\User;
use Session;

class FreeLearningController extends Controller
{
    public function applyfreeLearning(){

        $user = Session::get('id');

        if(!isset($user)){

            return view('User/signin');

        }

        $freeApplications = FreeApplication::where('user_id',$user)->first();

        if(!isset($freeApplications)){

            return view('Free_learning/free_learning_application');

        }else{

            if( $freeApplications->approved == 0 ){

                return view('Free_learning/under_review');

            }elseif( $freeApplications->approved == 1 ){

                return view('Free_learning/approve');

            }elseif( $freeApplications->approved == 2 ){

                return view('Free_learning/decline');

            }

        }
    }

    public function submitFreeLearningApplication(Request $request){

        $user = Session::get('id');
        $name = Session::get('user_name');

        $freeapplication = new FreeApplication();

        $freeapplication->user_id = $user;
        $freeapplication->name = $name;
        $freeapplication->description = $request->description;
        $freeapplication->save();
        // return view('home_page/student_home_uploading');

        return view('home_page/student_home_page');
    }


    public function admin_select_free_learning_list(){

        $user = Session::get('id');

        if(!isset($user)){

            return view('User/signin');

        }

        return view('Free_learning/admin_free_learning_list_select');

    }

    public function adminFreeLearningSubmitList(){

        $users_list = FreeApplication::where('approved',0)->get();

        return view('Free_learning/admin_free_learning_list',['users_list' => $users_list,'list_type' => 'Pending List']);
    
    }


    public function adminFreeLearningDeclineList(){

        $users_list = FreeApplication::where('approved',2)->get();

        return view('Free_learning/admin_free_learning_list',['users_list' => $users_list,'list_type' => 'Decline List']);
        
    }

    public function adminFreeLearningApproveList(){

        $users_list = FreeApplication::where('approved',1)->get();

        return view('Free_learning/admin_free_learning_list',['users_list' => $users_list,'list_type' => 'Accepted List']);

    }

    public function admin_show_application($list_type,$user_id){

        $user = Session::get('id');

        $user_application = FreeApplication::where('user_id',$user_id)->first();

        if(!isset($user)){

            return view('User/signin');

        }

        if($list_type == 'Pending List'){

            return view('Free_learning/pending_application',['application' => $user_application,'list_type' => $list_type]);

        }elseif($list_type == 'Decline List'){

            return view('Free_learning/decline_application',['application' => $user_application,'list_type' => $list_type]);
            
        }if($list_type == 'Accepted List'){

            return view('Free_learning/accept_application',['application' => $user_application,'list_type' => $list_type]);
            
        }
    }

    public function admin_free_learning_application_action($action,$user_id){

        $user_application = FreeApplication::where('user_id',$user_id)->first();

        $user_application->approved = $action;
        $user_application->save();

        $users_list = FreeApplication::where('approved',0)->get();

        return view('Free_learning/admin_free_learning_list',['users_list' => $users_list,'list_type' => 'Pending List']);

    }

    public function applyAgainFreeLearningApplication(Request $request){

        $user = Session::get('id');

        if(!isset($user)){

            return view('User/signin');

        }

        $user_application = FreeApplication::where('user_id',$user)->first();

        $user_application->description = $request->description;
        $user_application->approved = 0;
        $user_application->save();

        return view('Free_learning/under_review');

    }


    public function applyagain(){

        $user = Session::get('id');

        if(!isset($user)){

            return view('User/signin');

        }

        return view('Free_learning/apply_again');

    }

        
}
