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

Route::get('about', function () {
    return view('pages/about');
});


Route::get('/login', [App\Http\Controllers\incubation\IncubationController::class, 'login'])->name('login');
Route::post('/userlogin', [App\Http\Controllers\incubation\IncubationController::class, 'userlogin'])->name('userlogin');
Route::get('pages/admindashboard', [App\Http\Controllers\incubation\IncubationController::class, 'admindashboard'])->name('pages/admindashboard');



