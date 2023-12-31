<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/',[UserController::class,'home']);

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/create-user',function(){
    return view('pages/add-users');
});

Route::post('/add-user',[UserController::class,'addUser'])->name('addUser');
