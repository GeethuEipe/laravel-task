<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
Route::get('/view', function () {
    return view('register');
});
Route::view("user",'login');
Route::post("loginform",[UserController::class,'loginform']);

Route::view("profile",'logwelcome');

Route::post("insert",[UserController::class,'User_Register']);
