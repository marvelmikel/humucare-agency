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

Route::get('about',  [PageController::class,'about'])->name('about');
Route::get('job',  [PageController::class,'job'])->name('job');
Route::get('company',  [PageController::class,'company'])->name('company');
Route::get('contact',  [PageController::class,'contact'])->name('contact');






