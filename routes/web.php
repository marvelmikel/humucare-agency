<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
//Humucare Job Application Form Online
Route::get('humcareform',  [PageController::class,'humcareform']);
Route::post('humcareform-step-one',[PageController::class, 'postFormStepOne']);
Route::get('humcareform-step-two',  [PageController::class,'getFormStepTwo']);
Route::post('humcareform-step-two',  [PageController::class,'postFormStepTwo']);
Route::get('humcareform-step-three',  [PageController::class,'getFormStepThree']);
Route::post('humcareform-step-three',  [PageController::class,'postFormStepThree']);
Route::get('humcareform-step-four',  [PageController::class,'getFormStepFour']);
Route::post('humcareform-step-four',  [PageController::class,'postFormStepFour']);
Route::get('humcareform-step-five',  [PageController::class,'getFormStepFive']);
Route::post('humcareform-step-five',  [PageController::class,'postFormStepFive']);
Route::get('humcarecleanform',  [PageController::class,'humcarecleanform']);


Route::get('serviceRequest', [ApplicationController::class, 'index'])->name('serviceRequest');
Route::post('/serviceRequest', [ApplicationController::class, 'serviceRequest'])->name('serviceRequest');



//
// Route::get('applications', [ApplicationController::class, 'index'])->name('createTransaction');
// Route::post('applications',[ApplicationController::class, 'store'])->name('application.store');

// //PayPal
// Route::post('process-transaction', [ApplicationController::class, 'processTransaction'])->name('processTransaction');
// Route::get('success-transaction', [ApplicationController::class, 'successTransaction'])->name('successTransaction');
// Route::get('cancel-transaction', [ApplicationController::class, 'cancelTransaction'])->name('cancelTransaction');




//Guest pages
Route::get('about',  [PageController::class,'about'])->name('about');
Route::get('job',  [PageController::class,'job'])->name('job');
Route::get('company',  [PageController::class,'company'])->name('company');
Route::get('contact',  [PageController::class,'contact'])->name('contact');
Route::get('register',  [PageController::class,'register'])->name('register');

//humucare job application form
Route::get('/download', function(){
    $file = public_path()."/files/Humucare-cleaning-application-form.pdf";

    $headers = array(
        'Content-type: application/pdf',
    );

    return Response::download($file, "Humucare Cleaning Application Form.pdf", $headers);
});

//humucare cleaning job application form
Route::get('/download2', function(){
    $file = public_path()."/files/humucare-job-application-form.pdf";

    $headers = array(
        'Content-type: application/pdf',
    );

    return Response::download($file, "Humucare job Application Form.pdf", $headers);
});


Route::get('/download3', function(){
    $file = public_path()."/files/humucare-Time-sheet.pdf";

    $headers = array(
        'Content-type: application/pdf',
    );

    return Response::download($file, "Humucare Time Sheet.pdf", $headers);
});

Route::get('/download4', function(){
    $file = public_path()."/files/Terms&condition.docx";

    $headers = array(
        'Content-type: application/docx',
    );

    return Response::download($file, "Humucare Terms and Conditions.docx", $headers);
});










