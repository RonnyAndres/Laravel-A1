<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Import the controller
use App\Http\Controllers\InfoController; // Import the controller
use App\Http\Controllers\EditInfoController; // Import the controller



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Create a rute UserRegister
Route::get('/userregister', [UserController::class, 'userRegister']);

// Create a rute UserLogin
Route::get('/userlogin', [UserController::class, 'userLogin']);

// Create a rute userInformation
Route::get('/userinformation', [InfoController::class, 'userInformation']);

// Create a rute contact
Route::get('/contact', [InfoController::class, 'contact']);


// Create a rute userEdit
Route::get('/useredit', [EditInfoController::class, 'userEdit']);

// Create a rute userDelete
Route::get('/userdelete', [EditInfoController::class, 'userDelete']);



