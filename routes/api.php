<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('create', [ServiceController::class, 'create']);

Route::post('/test', function () {
    return response()->json(['message' => 'Test route OK']);
});

Route::prefix('services')->group(function () {

    Route::post('create', [ServiceController::class, 'create'])->name('create');

    Route::post('update/{id?}', [ServiceController::class, 'update'])->name('update');
    Route::post('delete/{id?}', [ServiceController::class, 'delete'])->name('delete');
    Route::get('display', [ServiceController::class, 'display'])->name('display');

    Route::get('display/{id?}', [ServiceController::class, 'displayById'])->name('displayById');
});
