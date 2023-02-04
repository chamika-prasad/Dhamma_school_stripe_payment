<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\FreeLearningController;
use App\Http\Controllers\BankDepositController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//----------user signin or signup----------------------

Route::get('/', function () {
    return view('User/welcome');
});

Route::get('/selectuser', function () {
    return view('User/selectuser');
});

Route::get('usertype',[UserController::class, 'usertype']);

Route::post('/signup/{usertype}',[UserController::class, 'signup']);

Route::get('/showsignin', function () {
    return view('User/signin');
})->name('showsignin');

Route::post('/signin',[UserController::class, 'signin']);

Route::get('/admin',[UserController::class, 'admin']);

Route::get('/student',[UserController::class, 'student']);

Route::get('/reset',[UserController::class, 'reset']);

Route::post('/sendLink',[UserController::class, 'sendLink']);

//----------end of user signin or signup----------------------


//---------------------------free learning----------------------------

Route::get('/applyfreeLearning',[FreeLearningController::class, 'applyfreeLearning']);

Route::post('/submit_free_learning_application',[FreeLearningController::class, 'submitFreeLearningApplication']);

Route::post('/apply_again_free_learning_application',[FreeLearningController::class, 'applyAgainFreeLearningApplication']);

Route::get('/applyagain',[FreeLearningController::class, 'applyagain']);

Route::get('/admin_select_free_learning_list',[FreeLearningController::class, 'admin_select_free_learning_list']);

Route::get('/adminFreeLearningSubmitList',[FreeLearningController::class, 'adminFreeLearningSubmitList']);

Route::get('/adminFreeLearningApproveList',[FreeLearningController::class, 'adminFreeLearningApproveList']);

Route::get('/adminFreeLearningDeclineList',[FreeLearningController::class, 'adminFreeLearningDeclineList']);

Route::get('/admin_show_application/{list_type}/{user_id}',[FreeLearningController::class, 'admin_show_application']);

Route::get('/admin_free_learning_application_action/{action}/{user_id}',[FreeLearningController::class, 'admin_free_learning_application_action']);

//---------------------------end of free learning----------------------------


//---------------------------bank deposit------------------------------------

Route::get('showPaymentOption',[BankDepositController::class, 'showPaymentOption']);

Route::get('showBankDeposite',[BankDepositController::class, 'showBankDeposite']);

Route::post('upload_bank_slip', [BankDepositController::class, 'upload']);

Route::get('paymentHistory',[BankDepositController::class, 'paymentHistory']);

Route::get('adminPaymentOption',[BankDepositController::class, 'adminPaymentOption']);

Route::get('adminBankDeposite',[BankDepositController::class, 'adminBankDeposite']);

Route::get('approvedBankDepositeHistry',[BankDepositController::class, 'approvedBankDepositeHistry']);

Route::get('declineBankDepositeHistry',[BankDepositController::class, 'declineBankDepositeHistry']);

Route::get('pendingBankDeposite',[BankDepositController::class, 'pendingBankDeposite']);

Route::get('showUserBankSlip/{slip_id}',[BankDepositController::class, 'showUserBankSlip']);

Route::get('adminBankSlipAction/{action}/{slipID}',[BankDepositController::class, 'adminBankSlipAction']);

//---------------------------end of bank deposit------------------------------------

//---------------------------online payment-----------------------------------------

Route::get('stripe', [StripeController::class, 'stripe']);

Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

Route::post('admissionPost', [StripeController::class, 'admissionPost'])->name('admission.post');

Route::get('export_pdf', [StripeController::class, 'exportPdf']);

Route::get('onlinePaymentHistry',[BankDepositController::class, 'onlinePaymentHistry']);

Route::get('allPaymentHistry',[BankDepositController::class, 'allPaymentHistry']);

Route::post('searchPayment', [BankDepositController::class, 'searchPayment']);

Route::get('setupFees',[BankDepositController::class, 'setupFees']);

Route::get('admissionFees',[BankDepositController::class, 'admissionFees']);

Route::post('addAdmissionFee', [BankDepositController::class, 'addAdmissionFee']);

Route::post('addAdmissionFeeEdit', [BankDepositController::class, 'addAdmissionFeeEdit']);

Route::get('otherFees',[BankDepositController::class, 'otherFees']);

Route::post('addPaymentFee', [BankDepositController::class, 'addPaymentFee']);

Route::post('editPaymentFee', [BankDepositController::class, 'editPaymentFee']);

Route::get('admisionFeeReport',[BankDepositController::class, 'admisionFeeReport']);

Route::post('searchAdmissionPayment', [BankDepositController::class, 'searchAdmissionPayment']);

Route::get('remaining',[BankDepositController::class, 'remaining']);

Route::post('remainSearch', [BankDepositController::class, 'remainSearch']);

//---------------------------end of online payment-----------------------------------------




Route::get('/test', function () {
    return view('Free_learning/hi');
});













