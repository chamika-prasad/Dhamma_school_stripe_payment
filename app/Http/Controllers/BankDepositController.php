<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\AdmissionFees;
use App\Models\StudentAdmissionFee;
use App\Models\RemainingUserAmount;
use App\Models\OtherFees;
use Carbon\Carbon;
use Session;

class BankDepositController extends Controller
{
    public function showPaymentOption(){

        $user = Session::get('id');


        if(!isset($user)){

            return view('User/signin');

        }

        $lastpaymentdate = Payment::where(['user_id' => $user,'approved' => 1])->max('created_at');
        $lastpaymentday = strtotime($lastpaymentdate);
        $lastpayment = date('Y-M-d',$lastpaymentday);
        $payment = Payment::where('created_at',$lastpaymentdate)->first();

        return view('payment/payment_option',['payment' => $payment,'lastpayment' => $lastpayment]);

    }


    public function showBankDeposite(){

        $user = Session::get('id');


        if(!isset($user)){

            return view('User/signin');

        }

        $lastpaymentdate = Payment::where('user_id',$user)->max('created_at');
        $lastpaymentday = strtotime($lastpaymentdate);
        $lastpaymentmonth = date('m',$lastpaymentday);

        $current = Carbon::now();
        $currentmounth = $current->format('m');

        if($currentmounth == $lastpaymentmonth){

            $payment = Payment::where('created_at',$lastpaymentdate)->first();

            if($payment->approved == 0){

                return view('payment/bank_deposite_under_review');

            }elseif(($payment->approved == 1) && ($payment->type == 'Bank_Deposit')){

                return view('payment/bank_deposite_approved');

            }elseif($payment->approved == 2){

                return view('payment/bank_deposite_decline');
            }else{

                return view('payment/bank_deposite');
    
            }
           
        }else{

            return view('payment/bank_deposite');

        }

    }


    public function upload(Request $request){

        $user_id = Session::get('id');
        $user_name = Session::get('user_name');
        $name = $request->file('image')->getClientOriginalName();
        $exten = $request->file('image')->getClientOriginalExtension();


        if($exten == 'JPEG' || $exten == 'JPG' || $exten == 'PNG' || $exten == 'png' || $exten == 'jpg' || $exten == 'jpeg' )
        {

            if($request->amount>0){}

            if($request->amount >= 0){
            $request->file('image')->storeAs('public/images/',$name);
            $payment = new Payment;
            $payment->user_id = $user_id;
            $payment->userName = $user_name;
            $payment->grade = Session('grade');
            $payment->amount = $request->amount;
            $payment->type = 'Bank_Deposit';
            $payment->approved = 0;
            $payment->slipName = $name;
            $payment->invoic_id = 'None';
            $payment->save();
            return view('payment/payment_option');

            }else{
                return redirect()->back()->with('message', 'enter valide value');
            }
            
            
        }else{

            return redirect()->back()->with('message', 'file type is incorrect');
        }
    
        }

        public function paymentHistory(){

            $user_id = Session::get('id');
            $id = 1;
            $payments = Payment::where('user_id',$user_id)->get();

            return view('payment/student_paymen_histry',['payments' => $payments,'id' => $id]);

        }

        public function adminPaymentOption(){

        $user = Session::get('id');


        if(!isset($user)){

            return view('User/signin');

        }

        return view('payment/admin_payment_option');

        }

        public function adminBankDeposite(){

        $user = Session::get('id');


        if(!isset($user)){

            return view('User/signin');

        }

        return view('payment/bank_deposite_histry_option');

        }


        public function approvedBankDepositeHistry(){

            $user = Session::get('id');


        if(!isset($user)){

            return view('User/signin');

        }

        $payments = Payment::where(['type' => 'Bank_Deposit','approved' => 1])->get();
        $id = 1;

        return view('payment/approved_bank_deposite',['payments' => $payments,'id' => $id]);

        }

        public function declineBankDepositeHistry(){

            $user = Session::get('id');


        if(!isset($user)){

            return view('User/signin');

        }

        $payments = Payment::where(['type' => 'Bank_Deposit','approved' => 2])->get();
        $id = 1;

        return view('payment/decline_bank_deposite',['payments' => $payments,'id' => $id]);

        }

        public function pendingBankDeposite(){

        $user = Session::get('id');


        if(!isset($user)){
    
            return view('User/signin');
    
        }

        $payments = Payment::where(['type' => 'Bank_Deposit','approved' => 0])->get();
        
        return view('payment/pending_bank_deposite',['payments' => $payments]);

        }


        public function showUserBankSlip($slipId){

            $user = Session::get('id');


            if(!isset($user)){
    
                return view('User/signin');
    
            }


            $Slip = Payment::where('id',$slipId)->first();

            return view('payment/admin_bank_slip_show',['Slip' => $Slip]);

        }


        public function adminBankSlipAction($action,$slipId){

            $user = Session::get('id');


            if(!isset($user)){
    
                return view('User/signin');
    
            }

            $slip = Payment::where('id',$slipId)->first();

            $slip->approved = $action;
            $slip->save();


           


            //----------------------------------------------------------------------


            if(intval($action) == 1){

            $slip = Payment::where('id',$slipId)->first();

            $userPayments = Payment::where(['user_id' => $slip->user_id,'grade' => $slip->grade])->sum('amount');
            $amount = OtherFees::where('grade',$slip->grade)->first();
            $remaining = doubleval($amount->amount) - doubleval($userPayments);

            
            $remuser = RemainingUserAmount::where(['user_id' => $slip->user_id,'grade' => $slip->grade])->first();

            if( $remuser === null){

                $setRemaining = new RemainingUserAmount();
                $setRemaining -> user_id = $slip->user_id;
                $setRemaining -> userName = $slip->userName;
                $setRemaining -> grade = $slip->grade;
                $setRemaining -> total_amount = doubleval($amount->amount);
                $setRemaining -> paid_amount = doubleval($userPayments);
                $setRemaining -> remaining_amount = $remaining;
                $setRemaining -> save();

            }else{

                $remuser -> paid_amount = doubleval($userPayments);
                $remuser -> remaining_amount = $remaining;
                $remuser -> save();
            }

            }


            //----------------------------------------------------------------------





            $payments = Payment::where(['type' => 'Bank_Deposit','approved' => 0])->get();
        
            return view('payment/pending_bank_deposite',['payments' => $payments]);
            
        }


        public function onlinePaymentHistry(){

            $user = Session::get('id');
    
    
            if(!isset($user)){
        
                return view('User/signin');
        
            }

            $payments = Payment::where(['type' => 'Online_Payment','approved' => 1])->get();
            $id = 1;

            return view('payment/online_payment_histry',['payments' => $payments,'id' => $id]);
    
            }


            public function allPaymentHistry(){

                $user = Session::get('id');
        
        
                if(!isset($user)){
            
                    return view('User/signin');
            
                }
    
                $payments = Payment::where('approved',1)->get();
                $id = 1;
    
                return view('payment/all_payment_histry',['payments' => $payments,'id' => $id]);
        
                }

            public function searchPayment(Request $request){

                $user = Session::get('id');
        
        
                if(!isset($user)){
            
                    return view('User/signin');
            
                }

                $payments = Payment::where(['user_id' => $request->search,'approved' => 1])->get();
                $id = 1;
    
                return view('payment/all_payment_histry',['payments' => $payments,'id' => $id]);
               
            }

            public function setupFees(){

                $user = Session::get('id');
        
        
                if(!isset($user)){
            
                    return view('User/signin');
            
                }

                return view('payment/setup_fees_option');
        
                }

            public function admissionFees(){

                $user = Session::get('id');
        
        
                if(!isset($user)){
            
                    return view('User/signin');
            
                }

                $fees = admissionFees::orderBy("grade","ASC")->get();
                $id = 1;

                // return view('payment/admision_fee');
                return view('payment/admin_admision_fee',['fees' => $fees,'id' => $id]);
            
            }    

            public function otherFees(){

                $user = Session::get('id');
        
        
                if(!isset($user)){
            
                    return view('User/signin');
            
                }


                $fees = OtherFees::orderBy("grade","ASC")->get();
                $id = 1;

                // return view('payment/admision_fee');
                return view('payment/other_payment',['fees' => $fees,'id' => $id]);
            
            }  

            public function addAdmissionFee(Request $request){

                $fees = admissionFees::where('grade',$request->grade)->count();

                if($fees == 0){

                $AdmissionFees = new AdmissionFees;
                $AdmissionFees->grade = $request->grade;
                $AdmissionFees->amount = $request->amount;
                $AdmissionFees->save();

                return redirect()->back();

                }else{
                    
                    return redirect()->back()->with('alert', 'Grade has already entered');

                }
            }

            public function addAdmissionFeeEdit(Request $request){

                $editFees = admissionFees::where('grade',$request->grade)->first();
                $editFees->amount = $request->amount;
                $editFees->save();
                return redirect()->back();

            }


            public function addPaymentFee(Request $request){

                $fees = OtherFees::where('grade',$request->grade)->count();

                if($fees == 0){

                $OtherFees = new OtherFees;
                $OtherFees->grade = $request->grade;
                $OtherFees->amount = $request->amount;
                $OtherFees->save();

                return redirect()->back();

                }else{
                    
                    return redirect()->back()->with('alert', 'Grade has already entered');

                }
            }

            public function editPaymentFee(Request $request){

                $editOtherFees = OtherFees::where('grade',$request->grade)->first();
                $editOtherFees->amount = $request->amount;
                $editOtherFees->save();
                return redirect()->back();

            }

            public function admisionFeeReport(){

                $user = Session::get('id');
        
        
                if(!isset($user)){
            
                    return view('User/signin');
            
                }


                $fees = StudentAdmissionFee::orderBy("id","ASC")->get();
                $id = 1;

                // return view('payment/admision_fee');
                return view('payment/student_addmission_fee_report',['fees' => $fees,'id' => $id]);
            
            }

            public function searchAdmissionPayment(Request $request){

                $user = Session::get('id');
        
        
                if(!isset($user)){
            
                    return view('User/signin');
            
                }

                $fees = StudentAdmissionFee::where(['user_id' => $request->search])->get();
                $id = 1;
    
                return view('payment/student_addmission_fee_report',['fees' => $fees,'id' => $id]);
               
            }


            public function remaining(){

                $remaings = RemainingUserAmount::orderBy("id","ASC")->get();
                $id = 1;

                return view('payment/users_remaining_details',['remaings' => $remaings,'id' => $id]);

            }

            

            public function remainSearch(Request $request){

                $user = Session::get('id');
        
        
                if(!isset($user)){
            
                    return view('User/signin');
            
                }

                $remaings = RemainingUserAmount::where(['user_id' => $request->search])->get();
                $id = 1;
    
                return view('payment/users_remaining_details',['remaings' => $remaings,'id' => $id]);
               
            }

            }


