<?php

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
    return view('welcome');
});


// Route::get('', [PostController::class, 'create'])->name('users.singup');

// Route::get('/singup', 'signup' )->name('users.singUp');

// Route::get('/singup', function () {
//     return view('users.singUp');
// });