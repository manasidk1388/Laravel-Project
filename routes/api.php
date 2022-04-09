<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APIController;
use App\Http\Controllers\API\SetDataController;
use App\Models\Contact;
use App\Http\Controllers\API\ApiAuthenticationController;


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


 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('index', [SetDataController::class,'index']); 
Route::post('create', [SetDataController::class,'create']); 
Route::post('update', [SetDataController::class,'update']); 
Route::get('show', [SetDataController::class,'show']); 
Route::post('delete', [SetDataController::class,'destroy']); 


// API Routes

Route::post('register', [ApiAuthenticationController::class, 'register']);
Route::post('login', [ApiAuthenticationController::class, 'login']);
  
Route::middleware('auth:api')->group(function () {
    Route::get('get-user', [ApiAuthenticationController::class, 'userInfo']);
});

// Testing API route

// Route::get('testing', function(){
    
//     return Contact::create([
//         'name' => 'manasi',
//         'phone' => '45',
//         'email' => 'ijdhf@sjd'
//     ]);

    // });
    