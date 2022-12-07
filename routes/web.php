<?php
use App\Http\Controllers\PageController;
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

Route::get('humcareform',  [PageController::class,'humcareform']);
Route::get('humcarecleanform',  [PageController::class,'humcarecleanform']);


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










