<?php

namespace App\Http\Controllers;

use App\Models\StripePayment;
use PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\Payment;
use App\Models\StudentAdmissionFee;
use App\Models\RemainingUserAmount;
use App\Models\OtherFees;
use Illuminate\Support\Str;    
use Illuminate\Http\Request;
use Session;
use Stripe; 
use Exception;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('payment/stripe');
    }
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {

        // $email = Session::get('email');
        // $name = Session::get('user_name');

        try{
            

            $payment = new Payment();           
            $payment->user_id = Session('id');   
            $payment->userName = Session('user_name');
            $payment->grade = Session('grade');           
            $payment->amount = $request->amount;           
            $payment->type = 'Online_Payment';           
            $payment->approved = 1;
            
        
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create (
                [
                "amount" => ($request->amount) * 100,
                "currency" => "LKR",
                "source" => $request->stripeToken,
                "description" => "Dhamma School Payment",
                "receipt_email" => Session('email'),
                "metadata" => ["user" => Session('user_name')]
                ]
                );

            $randomNumber = random_int(100000, 999999);
            Session::put('date',date('Y-m-d'));
            Session::put('amount',$request->amount);
            Session::put('invoiceNo',$randomNumber);
            
            $name = 'INVO-'.strval(Session('invoiceNo'));
            $payment->invoic_id = $name;           
            $payment->slipName = 'none';          
            $payment->save();
             


            $userPayments = Payment::where(['user_id' => Session('id'),'grade' => Session('grade')])->sum('amount');
            $amount = OtherFees::where('grade',Session('grade'))->first();
            $remaining = doubleval($amount->amount) - doubleval($userPayments);
            
            $remuser = RemainingUserAmount::where(['user_id' => Session('id'),'grade' => Session('grade')])->first();
             
            if( $remuser === null){

                $setRemaining = new RemainingUserAmount();
                $setRemaining -> user_id = Session('id');
                $setRemaining -> userName = Session('user_name');
                $setRemaining -> grade = Session('grade');
                $setRemaining -> total_amount = doubleval($amount->amount);
                $setRemaining -> paid_amount = doubleval($userPayments);
                $setRemaining -> remaining_amount = $remaining;
                $setRemaining -> save();

            }else{

                $remuser -> paid_amount = doubleval($userPayments);
                $remuser -> remaining_amount = $remaining;
                $remuser -> save();
            }

            // Session::flash('success', 'Payment successful!');
            return view('payment/invoice')->with('message', 'Payment successful!');
           
        } catch(Exception $e)
        {

            return redirect()->back()->with('message', $e);

        }

    }

    public function exportPdf(){

        $name = 'INVO-'.strval(Session('invoiceNo')).'.pdf';

        $pdf = PDF::loadView('invoice.user_invoice');

            $data["email"] = Session('email');
            $data["title"] = "DHAMMA SCHOOL MONTHLY PAYMENT";
            $data["body"] = "YOUR MADE PAYMENT SUCCESSFULLY";
            $data["name"] = $name;

            Mail::send('invoice.user_invoice',$data,function($message) use ($data,$pdf){
                $message->to($data["email"])->subject($data["title"]);
                $message->attachData($pdf->output(),$data["name"]);
                $message->from('chamikap40@yahoo.com');
            });

        return $pdf->download($name);
       
    }

    


    public function admissionPost(Request $request)
    {  

        // $email = Session::get('email');
        // $name = Session::get('user_name');

        try{    

            $StudentAdmissionFee = new StudentAdmissionFee();
            $StudentAdmissionFee->user_id = Session('id');
            $StudentAdmissionFee->userName = Session('user_name');
            $StudentAdmissionFee->amount = $request->amount;
        
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create (
                [
                "amount" => ($request->amount) * 100,
                "currency" => "LKR",
                "source" => $request->stripeToken,
                "description" => "Dhamma School Admission Fee Payment",
                "receipt_email" => Session('email'),
                "metadata" => ["user" => Session('user_name')]
            ]
            );

            $StudentAdmissionFee->save();

            return view('home_page/student_home_page');

        } catch(Exception $e)
        {

            return redirect()->back()->with('message', $e);

        }

    }
}
